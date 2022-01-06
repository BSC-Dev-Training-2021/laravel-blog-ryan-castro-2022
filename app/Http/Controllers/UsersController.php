<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class UsersController extends Controller
{
    public function login(){

        return redirect('login');
    }

    public function registration(){
        return view('blog/signup');
    }
}


