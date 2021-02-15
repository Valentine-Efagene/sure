<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

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
     * Store tranfer
     * 
     * @return view
     **/
    public function store()
    {
        $data = request()->validate([
            'first_name' => [],
            'last_name' => [],
            'address' => [],
            'zip_code' => [],
            'country' => [],
            'state' => [],
            'receiver_bank_account_name' => [],
            'bank_name' => [],
            'amount' => ['numeric'],
            'receiver_account_number' => [],
            'receiver_routing_number' => [],
            'receiver_bank_address' => [],
            'purpose' => [],
            'token' => [function ($attribute, $value, $fail) {
                $user = auth()->user();

                if ($user->n_token_usage >= $user->n_token_success) {
                    $fail('Token has been exhausted.');
                }
            },]
        ]);

        $user = auth()->user();

        /*if ($user->n_token_usage >= $user->n_token_success) {
            $failure = true;
            return view('transfer', compact(['failure', 'user']));
        }*/

        $data['type'] = 'DEBIT';
        $data['user_id'] = auth()->user()->id;
        $transfer = Transfer::create($data);
        $success = $transfer ? true : false;
        $failure = $transfer ? false : true;

        if ($success) {
            User::find(auth()->user()->id)->update(['n_token_used' => auth()->user()->id + 1]);
        }

        return view('dashboard.statement', compact(['success', 'failure', 'user']));
    }
}
