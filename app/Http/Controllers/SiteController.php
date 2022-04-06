<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class SiteController extends Controller {
    public function index(){
        return view('login');
    }
}