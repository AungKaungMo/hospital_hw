<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Log::channel('customLog')->info("Starting our system");
        return view("Login");
    }

    public function checking(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function check(LoginRequest $request)
    {
        //     $request->validate([
        //         'username' => 'required|alpha|min:4|max:12',
        //         'password' => 'required|digits_between:8,12',
        //     ]);
        Log::channel('customLog')->info("$request->username is logging in our system");
        $request->session()->put('HasLogin', "true");
        return redirect('home');
    }
}
