<?php

namespace App\Http\Controllers;

use App\Models\User;  // Import User model
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::all(); 
        return view('users.index', compact('users'));
    }
}
