<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;
use Str;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view("forget-password");
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'email' =>"required|email|exists:users"
        ]);
        $token =Str::random(64);
        DB::table("password_resets")->insert([
            'email' => $request->email,
            'token'=> $token,
            'created_at'=> Carbon::now(),
        ]);

        Mail::send("emails.forget-password",['token'=>$token],function ($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset Passwod');
        });
        return redirect()->to(route('forgetPassword'))->with("success","we have send an email to reset password");
    }

    function resetPassword(){}
}
