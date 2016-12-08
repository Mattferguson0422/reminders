<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

    //Home Page
    public function home() {
        return view('home');
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
