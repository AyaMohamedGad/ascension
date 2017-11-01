<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function cpa(){
        return view('site.cpa');
    }

    public function ers(){
        return view('site.ers');
    }

}
