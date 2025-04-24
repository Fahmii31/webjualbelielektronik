<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home2Controller extends Controller
{
    public function home() {
        return view('pages/home');
    }
}
