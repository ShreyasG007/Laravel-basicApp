<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthManager extends Controller
{
    function login()
    {
        return view("login");
    }

    function registration()
    {
        return view("registration");
    }

    function loginPost(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'

            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('users.index'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid...");
    }

    function registrationPost(Request $request)
    {
        $request->validate([
            "name" => ["required", "string", ""],
            "email" => "required|email|unique:users",
            "password" => "required",
            "phone" => "required"
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone'] = $request->phone;
        $user = User::create($data);

        if (!$user) {

            return redirect(route('registration'))->intended(route('login'))->with("error", "Registration Failed,try Again...!!!");
        }
        return redirect(route('login'))->with("success", "Login SuccessFull...!!!");
    }
        function logout(){
            Session::flush();
            Auth::logout();
            return redirect(route("login"));
        }
    
}   
