<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate ([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->route('auth.login');
    }
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email, 
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
        return redirect('/'); 
        } else {
        return back();
        }
    }

    public function logout()
    {
     Auth::logout();
     return redirect()->route('auth.login');
    }    
}
