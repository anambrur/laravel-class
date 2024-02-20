<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
<<<<<<< HEAD
    function index($id=55,$title='laravel'){
       return view('home',compact('id','title'));
=======
    function index(){
        return view('first');
>>>>>>> 480e619d9310f9857a67e3db5adaef5243ab51b0
    }
}
