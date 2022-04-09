<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $Username = $request->session()->get('email-login');
        $Password = $request->session()->get('pass-login');
        return view('login', [$Username, $Password]);
    }
}
