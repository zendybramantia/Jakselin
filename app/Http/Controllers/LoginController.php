<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
}
