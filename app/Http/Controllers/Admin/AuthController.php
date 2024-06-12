<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('backend.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('backend.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $notification = array(
            'message' => 'Register successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            $notification = array(
                'message' => 'Login successfull',
                'alert-type' => 'success'
            );
            return redirect('/admin')->with($notification);
        }
        $notification = array(
            'message' => 'Email or Password not match',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    public function logout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Logout successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.login')->with($notification);
    }
}
