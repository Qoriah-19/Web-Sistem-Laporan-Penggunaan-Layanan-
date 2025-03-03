<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
 function index()
  {
    return view('login');
  }

  function login(Request $request){
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ],[
        'email.required'=>'Email wajib diisi',
        'password.required'=>'Passsword wajib diisi'
    
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if(Auth::attempt($infologin)){
        if(Auth::user()->role == 'admin'){
           return redirect('/admin');
        } elseif (Auth::user()->role == 'pengguna_tim'){
           return redirect('/pengguna_tim');
        } elseif (Auth::user()->role == 'pengguna_personal'){
            return redirect('/pengguna_personal');
        }
    }else{
        return redirect('')->withErrors('Username dan Password Salah')->withInput();
    }
  }

  function logout(){
    Auth::logout ();
    return redirect('');
  }
} 
