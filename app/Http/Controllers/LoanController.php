<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
  public function index()
  {
    return view('loans.history');
  }

  public function history()
  {
    $loans = Loan::orderBy('id', 'asc')->paginate(10);
    $user = auth()->user();
    return view('loans.history', compact(['loans', 'user']));
  }

  public function active()
  {
    $loans = Loan::where('status', 'ACTIVE')->orderBy('id', 'asc')->paginate(10);
    $user = auth()->user();
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
    Loan::create($data);

    return redirect()->route('loans.history');
  }
}
