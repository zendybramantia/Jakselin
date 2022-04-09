<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class LoginController extends Controller
{
    public function index(Request $request){
        $Username = $request->session()->get('email-login');
        $Password = $request->session()->get('pass-login');
        return view('login', [$Username, $Password]);
    }

    public function login(Request $request){
        if (Auth::attempt(["email" => $request->get('email-login'), "password" => $request->get('pass-login')])) {
            // $user = Auth::user();
            // $token = $user->createToken('tkn')->plainTextToken;
            // $data = [
            //     "user" => $user,
            //     "token" => $token,
            // ];
            // return response($data, 200);
        } else {
            return response("Nama atau password salah", 400);
        }
    }
}
