<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller {
    public function index(Request $request){
        $Username = $request->session()->get("email-login");
        $Password = $request->session()->get("pass-login");
        return view('login', [$Username, $Password]);
    }
}