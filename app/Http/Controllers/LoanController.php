<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
  public function index()
  {
    return view('loans.history');
  }

  public function history()
  {
    $user = User::find(auth()->user()->id);
    $loans = $user->loan()->orderBy('id', 'desc')->paginate(10);
    return view('loans.history', compact(['loans', 'user']));
  }

  public function active()
  {
    $user = User::find(auth()->user()->id);
    $loans = $user->loan()->where('status', 'PENDING')->orderBy('id', 'desc')->paginate(10);
    return view('loans.active', compact(['user', 'loans']));
  }

  public function create()
  {
    return view('loans.create');
  }

  public function store(Request $request)
  {
    $data = $request->validate(['income_source' => ['required'], 'annual_income' => ['required'], 'credit_score' => ['required'], 'employer' => [], 'company' => ['required'], 'company_address' => ['required'], 'company_reg' => [], 'zip_code' => ['required'], 'state' => ['required'], 'purpose' => ['required'], 'amount' => [], 'note' => [], 'payment_method' => ['required']]);
    $data['user_id'] = auth()->user()->id;
    $loan = Loan::create($data);
    $success = $loan ? true : false;

    if ($success) {
      return redirect()->route('loans.history', compact('success'));
    }

    $failure = true;
    return redirect()->route('loans.create', compact('failure'));
  }
}
