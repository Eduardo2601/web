<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\Contracts\Validation\Factory as ValidationFactory;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          
          
            'username' => 'required',
            'password' => 'required',
           
        ];
    }
public function getCredentials(){
$username=$this->get('username');

if($this->isEmail($username)){
return[
    'email'=> $username,
    'password'=> $$this->get('password')

];
}
return $this->only('usename','password');
}
public function isEmail($value){
$factory=$this->container->make(ValidationFactory::class);
return !$factory->make(['username' => $value],['username' =>'email'])->fails();

}


}


