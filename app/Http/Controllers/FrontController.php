<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index($id=55,$title='laravel'){
       return view('home',compact('id','title'));
    }


    function home(){
        return view('home');
    }
}
