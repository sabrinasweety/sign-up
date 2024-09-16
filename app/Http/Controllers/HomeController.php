<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function dologin(Request $request){

        $request->session()->put('email', $request->input('email'));
    $request->session()->put('password', $request->input('password'));

     
        Login::create([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),

        ]);
        return redirect()->route('home');

    }
    public function logout(Request $request){
        $request->session()->forget('email');
        $request->session()->forget('password');
        return redirect()->route('home');

    }
}
