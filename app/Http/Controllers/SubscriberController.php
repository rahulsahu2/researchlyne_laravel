<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Request;

class SubscriberController extends Controller
{
    public function __construct(){
        $this->middleware('isUser');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.subscriber.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile()
    {
        return view('frontend.subscriber.profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->all();
        if (auth()->attempt($credentials)) {
            return redirect()->route('user.dashboard')->with(['success' => 'Successfully logged in.', 'type' => 'success']);
        }
        else{
            return redirect()->back()->with(['error' => 'Invalid credentials.', 'type' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
