<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $start = date('Y-m-d') . ' 00:00:00';
        $end = date('Y-m-d') . ' 23:59:59';
        $transfers = $user->transfer->whereBetween('created_at', [$start, $end]);
        $credit_today = $transfers->where('type', 'CREDIT')->sum('amount');
        $debit_today = $transfers->where('type', 'CREDIT')->sum('amount');
        $credits = $user->transfer->where('type', 'CREDIT')->sum('amount');
        $debits = $user->transfer->where('type', 'DEBIT')->sum('amount');
        $balance = $credits - $debits;
        return view('dashboard.index', compact('user', 'debit_today', 'credit_today', 'balance'));
    }

    public function transfer()
    {
        $user = auth()->user();
        return view('dashboard.transfer', compact('user'));
    }

    public function statement()
    {
        $user = User::find(auth()->user()->id);
        $transfers = $user->transfer()->orderBy('id', 'desc')->paginate(10);
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
