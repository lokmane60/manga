<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class UserController extends Controller
{
    

    public function store(Request $request)
    {
        // Validate user input

        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',

            'email' => 'required',
            'password' => 'required',
        ]);
        // Create a new user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role'  => $validated['role'],
            'password' => Hash::make($validated['password']), // Hashing password before storing
        ]);
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([


            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials= ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
        }else{

        }
    }
    public function logout(){

        Session::flush();
        Auth::logout();

    }
    
}
