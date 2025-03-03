<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function Admin (){
        return view ('admin');

    }
    function pengguna_tim (){
        echo "selamat datang pegguna tim ";
        echo '<h1>'. Auth::user()->name . '</h1>';
        echo '<a href="/logout"> Logout >></a>';

    }
    function pengguna_personal (){
        echo "selamat datang pengguna personal ";
        echo '<h1>'. Auth::user()->name . '</h1>';
        echo '<a href="/logout"> Logout >></a>';

    }
}
