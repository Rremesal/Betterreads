<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.index');
    }

    public function register() {
        return view('auth.register');
    }

    public function register_store() {
        $data = request()->validate([
            'first_name' => ['required', 'min: 2', 'max:30'],
            'last_name' => ['required', 'min: 3', 'max:30'],
            'email' => ['required', 'email', 'min:12', 'max:25', 'unique:users,email'],
            'password' => ['required', 'min:6', 'max:25', 'same:password_confirm'],
        ]);

        $user = User::create($data);

        session()->flush();
        if(Auth::login($user)) {
            return redirect()->route('register');
        }
        
        return redirect()->route('home');





    }
}
