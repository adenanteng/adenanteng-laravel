<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
//        return view('home');

        if (Auth::check()) {
            $data = array(
                'title'=>'a.dashboard',
                'url'=>'/home',
            );
        }else{
            $data = array(
                'title'=>'a.sign in',
                'url'=>'/login',
            );
        }

        return view('welcome')->with($data);

    }

//    public function starter() {
//        return view('starter');
//    }

    /* Process the logout request */
//    public function logout(Request $request) {
//        Auth::logout();
//        return redirect('/login')->with(['msg_body' => 'You signed out!']);
//    }
}
