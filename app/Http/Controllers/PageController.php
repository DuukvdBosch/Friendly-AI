<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
      return view('home');
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }

    public function chat(){
      return view('chat');
    }
	
    public function register(){
      return view('register');
    }
}
