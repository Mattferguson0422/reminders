<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home Page
    public function home() {
        return view('welcome');
    }

    //About Page
    public function about() {
        return view('about');
    }

    //Trump Countdown Page
    public function trump() {
        return view('trump');
    }
}
