<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function index()
    {
        return view('components.signup');
    }

    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|confirmed',
    //         'terms' => 'accepted'
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect('signup')
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     User::create([
    //         'firstname' => $request->firstname,
    //         'lastname' => $request->lastname,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password)
    //     ]);

    //     return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
// }