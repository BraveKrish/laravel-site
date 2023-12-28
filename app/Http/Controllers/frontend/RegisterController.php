<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Frontend.sign_up');
    }

    public function register(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['password'] = Hash::make($req->password);

        $user = DB::table('users')->insert($data);
        if($user){
            // return redirect()->back()->with('success', 'Registered Successfully');
            // echo 'user registration successful';
            return redirect(route('home'))->with('success', 'Registered Successfully');
        }else{
            return redirect(route('register'))->with('error', 'Registration Failure');
        }
        // $user = User::create($data);
    }
}
