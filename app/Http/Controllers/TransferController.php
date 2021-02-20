<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

class TransferController extends Controller
{
    /**
     * Display transfer form
     *
     * @return view
     **/
    public function create()
    {
        $user = auth()->user();
        return view('transfer', compact('user'));
    }

    /**
     * Debit transfer
     * 
     * @return view
     **/
    public function debit()
    {
        $data = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => [],
            'zip_code' => [],
            'country' => [],
            'state' => [],
            'receiver_bank_account_name' => ['required'],
            'bank_name' => ['required'],
            'amount' => ['numeric'],
            'receiver_account_number' => [],
            'receiver_routing_number' => [],
            'receiver_bank_address' => [],
            'purpose' => [],
            'token' => [function ($attribute, $value, $fail) {
                $user = auth()->user();

                if ($value !== $user->token) {
                    $fail('Your token is incorrect.');
                } else if ($user->n_token_usage >= $user->n_token_success) {
                    $fail('Your account is suspended.');
                }
            },]
        ]);

        $id = auth()->user()->id;
        $user = User::find("$id");

        if ($user->status === 'SUSPENDED') {
            $messages = ['suspended' => 'Your account is suspended.'];
            $messageBag = new MessageBag($messages);
            // $messageBag->add('name', 'value);
            return redirect()->route('transfer', compact('user'))->withErrors($messageBag)->withInput();
        }

        /*$credits = $user->transfer->where('type', 'CREDIT')->sum('amount');
        $debits = $user->transfer->where('type', 'DEBIT')->sum('amount');
        $balance = $credits - $debits;*/

        $total = DB::table('transfers')->where('user_id', "$id")->get();
        $credits = $total->where('type', 'CREDIT')->sum('amount');
        $debits = $total->where('type', 'DEBIT')->sum('amount');
        $balance = ($credits - $debits) * env('RETURN_FRACTION', 1);

        if ($balance < $data['amount']) {
            $messages = ['insufficient_funds' => 'Insufficient funds.'];
            $messageBag = new MessageBag($messages);
            return redirect()->route('transfer', compact('user'))->withErrors($messageBag)->withInput();
        }

        $data['type'] = 'DEBIT';
        $data['user_id'] = "$id";
        $transfer = Transfer::create($data);
        $success = $transfer ? true : false;
        $failure = $transfer ? false : true;

        if ($success) {
            $id = auth()->user()->id;
            $user = User::find("$id");
            $user->update(['n_token_usage' => $user->n_token_usage + 1]);
        }

        $transfers = $user->transfer()->orderBy('id', 'desc')->paginate(10);
        return redirect()->route('dashboard.statement', compact(['success', 'failure', 'user', 'transfers']));
    }

    /**
     * Credit transfer
     *
     * @return redirect
     **/
    public function credit()
    {
        $data = request()->validate(['user_id' => ['required'], 'amount' => ['required', 'numeric'], 'purpose' => []]);
        $user = User::find($data['user_id']);
        $data['first_name'] = $user->first_name;
        $data['last_name'] = $user->last_name;
        $data['status'] = 'SUCCESSFUL';
        $data['type'] = 'CREDIT';

        $transfer = Transfer::create($data);

        $success = $transfer ? true : false;
        $failure = $transfer ? false : true;

        $users = User::paginate(10);
        //$users = User::all();

        foreach ($users as $user) {
            if ($user->display_password != null) {
                try {
                    $user->display_password = Crypt::decryptString($user->display_password);
                } catch (DecryptException $e) {
                    //
                }
            }
        }

        return view('users.index', compact(['users', 'success', 'failure']));
        //return redirect()->route('users.index', compact(['success', 'failure']));
    }
}
