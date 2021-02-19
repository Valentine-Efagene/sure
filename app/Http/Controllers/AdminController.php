<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance
     *kk
     * @return void
     **/
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display all admins
     * 
     * @return view
     */
    public function index()
    {
        $admins = Admin::paginate(10);
        //$users = User::all();

        foreach ($admins as $admin) {
            if ($admin->display_password != null) {
                try {
                    $admin->display_password = Crypt::decryptString($admin->display_password);
                } catch (DecryptException $e) {
                    //
                }
            }
        }
        return view('admins.index', compact('admins'));
    }

    /**
     * Display page to create a new admin
     * 
     * @return view
     */
    public function create()
    {
        $id = Admin::count() + 1;
        return view('admins.create', compact('id'));
    }

    /**
     * Create an admin account
     * 
     * @return redirect
     */
    public function store()
    {
        $data = request()->validate(['id' => ['numeric', 'unique:admins'], 'password' => ['min:8']]);
        Admin::create($data);
        return redirect()->route('admins.index');
    }

    /**
     * Display page to edit an admin account
     * 
     * @param Amin model
     * 
     * @return view
     */
    public function edit(Admin $admin)
    {
        if ($admin->display_password != null) {
            try {
                $admin->display_password = Crypt::decryptString($admin->display_password);
            } catch (DecryptException $e) {
                //
            }
        }
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update an admin account
     * 
     * @param Admin model
     * @return function for redirect
     */
    public function update(Admin $admin)
    {
        $data = request()->validate([
            'id' => ['required', 'numeric'],
            'password' => ['required'],
            'first_name' => [],
            'last_name' => [],
            'photo' => ['nullable'],
        ]);

        if (isset($data['photo'])) {
            $data['photo'] = $data['photo']->store('uploads', 'public');
        }

        $password = $data['password'];
        $data['display_password'] = Crypt::encryptString($password);
        $data['password'] = Hash::make($password);
        $admin->update($data);
        return $this->index();
    }

    /**
     * Delete an admin acount
     * 
     * @param Admin
     * @return function to redirect
     * 
     */
    public function destroy(Admin $admin)
    {
        $data = request()->validate(['admin_id' => ['required']]);
        $admin = Admin::find($data['admin_id']);
        $admin->delete();
        return $this->index();
    }
}
