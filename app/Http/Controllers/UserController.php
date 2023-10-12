<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //overzicht van alle gebruikers

    public function index()
    {
        return view('users.index');
    }
}
