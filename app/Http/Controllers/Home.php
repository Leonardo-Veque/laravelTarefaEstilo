<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home() {
        return view('header') . view('home') . view('footer');
    }
}
