<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Validation\ValidationException;


class RegisterController extends Controller
{
    
    public function show(){

        return view('authRegister');

    }

    public function register(RegisterRequest $request){

        try {
            $user = User::create($request->validated());
        } catch (ValidationException $e) {
            return redirect('/invalid')->with('error', 'Failed to validate user data');
        }
    
        if ($user) {
            return redirect('/login')->with('success', 'Account created successfully');
        } else {
            return redirect('/register')->with('error', 'Failed to create account');
        }
    }
    


}
