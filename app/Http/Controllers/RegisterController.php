<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    
    public function show(){

        return view('authRegister');

    }


    public function register(RegisterRequest $request){

        $user=User::create($request->validated());

        return redirect('/login')->with('success','Account create succesfully');

    }



}
