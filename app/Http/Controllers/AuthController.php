<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Validator\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function rules($data){
        $messages = [
            'email.required' => 'Please enter your email address',
            'email.exists' => 'Email arleady exists',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Password must be at least 6 character',
            'password.min' => 'Password must be atleast 6 character'
        ];
        $validator = Validator::make($data,[
            'email'=> 'required|email|exists:users',
            'password' => 'required'
        ], $messages);
    }

    public function savedoc(Request $request)
    {
        $users = new User([
        'name' => $request ->get('name'),
        'email' => $request ->get('email'),
        'password' =>$request ->get('password'),
        'user__type' => 'doctor'
        ]);
        $users->save();

        return redirect()->intended('/doctor/dashboard');
    }
}
