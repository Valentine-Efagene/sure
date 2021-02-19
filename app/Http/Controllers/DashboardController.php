<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        /*
        $id = auth()->user()->id;
        $user = User::find("$id");
        $start = date('Y-m-d') . ' 00:00:00';
        $end = date('Y-m-d') . ' 23:59:59';
        $transfers = $user->transfer()->whereBetween('created_at', [$start, $end]);
        $credit_today = $transfers->where('type', 'CREDIT')->sum('amount');
        $debit_today = $transfers->where('type', 'CREDIT')->sum('amount');
        $credits = $user->transfer->where('type', 'CREDIT')->sum('amount');
        $debits = $user->transfer->where('type', 'DEBIT')->sum('amount');
        $available_balance = $credits - $debits;
        $ledger_balance = $available_balance * 0.98; // Subtract 2% from the available balance*/

        //Using Query builder because Eloquent failed on server
        $id = auth()->user()->id;
        $user = auth()->user();
        $total = DB::table('transfers')->where('user_id', "$id")->get();
        $credits = $total->where('type', 'CREDIT')->sum('amount');
        $debits = $total->where('type', 'DEBIT')->sum('amount');
        $available_balance = $credits - $debits;
        $today = DB::table('transfers')->where('user_id', "$id")->whereDate('created_at', date('Y-m-d'))->get();
        $credit_today = $today->where('type', 'CREDIT')->sum('amount');
        $debit_today = $today->where('type', 'DEBIT')->sum('amount');
        $ledger_balance = $available_balance * 0.98; // Subtract 2% from the available balance

        return view('dashboard.index', compact('user', 'debit_today', 'credit_today', 'available_balance', 'ledger_balance'));
    }

    public function transfer()
    {
        $user = auth()->user();
        return view('dashboard.transfer', compact('user'));
    }

    public function statement()
    {
        $id = auth()->user()->id;
        $user = auth()->user();
        //$user = User::find("$id"); // Safety net, because of SQL odd behaviour in converting numbers
        //$transfers = $user->transfer()->orderBy('id', 'desc')->paginate(10);
        //dd($transfers);
        $transfers = DB::table('transfers')->where('id', "$id")->paginate(10);
        return view('dashboard.statement', compact('user', 'transfers'));
    }

    public function apply()
    {
        return view('dashboard.apply');
    }

    public function active_loan()
    {
        return view('dashboard.active_loan');
    }

    public function loan_history()
    {
        return view('dashboard.loan_history');
    }
}
