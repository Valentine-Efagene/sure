<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    /**
     * Display all users
     * 
     * @return view
     * 
     */
    public function index()
    {
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

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Create a new user account
     * 
     * @return view
     */
    public function store()
    {
        $data = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
        ]);

        $success = $user ? true : false;

        if (auth()->guard('admin')->check()) {
            return $this->index();
        }

        return view('auth.login', compact('success'));
    }

    /**
     * Show user profile
     * 
     * @return view
     */
    public function profile()
    {
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    public function edit(User $user)
    {
        if ($user->display_password != null) {
            try {
                $user->display_password = Crypt::decryptString($user->display_password);
            } catch (DecryptException $e) {
                //
            }
        }

        return view('users.edit', compact('user'));
    }

    /**
     * Update a user account
     * 
     * @param User
     * @return function to redirect
     */
    public function update(User $user)
    {
        $data = request()->validate([
            'first_name' => ['nullable', 'max:125'],
            'last_name' => ['nullable', 'max:125'],
            'phone_number' => ['nullable', 'max:30'],
            'email' => ['nullable', 'email', 'unique:users'],
            'password' => ['nullable'],

            'account_name' => ['nullable'],
            'account_number' => ['nullable', 'numeric'],
            'social_security_number' => ['nullable'],
            'routing_number' => ['nullable'],
            'gender' => ['nullable'],
            'state' => ['nullable'],
            'postal_code' => ['nullable', 'numeric'],
            'address' => ['nullable',],
            'display_password' => ['nullable', 'min:8'],
            'add' => ['nullable', 'numeric'],
            'token' => ['nullable'],
            'n_token_usage' => ['nullable', 'numeric'],
            'n_token_success' => ['nullable', 'numeric'],
            'suspended' => ['nullable'],
            'photo' => ['nullable'],
        ]);

        $data['status'] = isset($data['suspended']) ? 'SUSPENDED' : 'ACTIVE';
        unset($data['suspended']);

        if ($data['password'] != null) {
            $password = $data['password'];
            $data['display_password'] = Crypt::encryptString($password);
            $data['password'] = Hash::make($password);
        }

        if (isset($data['photo'])) {
            $data['photo'] = $data['photo']->store('uploads', 'public');
        }

        if (isset($data['add'])) {
            $amount = $data['add'];
            $data['balance'] = $user->balance + (isset($data['add']) ? $data['add'] : 0);
            Transfer::create(['user_id' => $user->id, 'amount' => $amount, 'type' => 'CREDIT']);
            unset($data['add']);
        }

        $user->update($data);
        return $this->index();
    }

    /**
     * Delete an admin acount
     * 
     * @param User
     * @return function to redirect
     * 
     */
    public function destroy(User $user)
    {
        $user->delete();
        return $this->index();
    }
}
