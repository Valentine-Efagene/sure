<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.index', compact('user'));
    }

    public function transfer()
    {
        $user = auth()->user();
        return view('dashboard.transfer', compact('user'));
    }

    public function statement()
    {
        return view('dashboard.statement');
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
