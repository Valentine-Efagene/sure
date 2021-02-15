<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class AdminLoginController extends Controller
{
    /**
     * Contructor
     *
     * @param Type $var Description
     * @return type
     **/
    public function __construct()
    {
        //$this->middleware('guest:admin');
        //$this->middleware('guest');
    }

    /**
     * Show log in form
     *
     * @return view
     **/
    public function show()
    {
        return view('auth.admin_login');
    }

    /**
     * Log In
     *
     * @param Request
     * @return type
     **/
    public function login(Request $request)
    {
        $data = $request->validate(['id' => ['required', 'numeric'], 'password' => ['required']]);
        $remember = $request->filled('remember');
        extract($data);

        // The error below is an intelliphense problem. The guard actually returns a SessionGuard, 
        //which indeed has an 'attempt' method.
        if (Auth::guard('admin')->attempt(['id' => $id, 'password' => $password], $remember)) {
            return redirect()->intended(route('users.index'));
        }

        return redirect()->back()->withInput($request->only('id', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
