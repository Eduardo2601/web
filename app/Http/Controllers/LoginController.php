<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
public function show(){

    return view('auth.login');
}




public function login(loginRequest $request ){
$credentials=$request->getCredentials();
if(!Auth::validate($credentials)){


return redirect()->to('/login')->withErrors('Auth.failed');

}
$user= Auth::getProvider()->retrieveByCredentials($credentials);
Auth::login($user);
return $this->authenticated($request,$user);

}
public function authenticated(Request $request, $user){
    return redirect('/home');
}

}


 

