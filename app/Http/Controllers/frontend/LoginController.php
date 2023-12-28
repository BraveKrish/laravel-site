<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class LoginController extends Controller
{
    public function index(){
        // dd(FacadesHash::make('krishna1234'));
        return view('Frontend.sign_in');

    }

    public function login(Request $req){
        $req->validate([
            // password and email are name of input field
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("admin"))->with('error','Login successful');
        }
        return redirect(route('login'))->with('error','Login failed or password is incorrect');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('frontend.login'));
    }
}
