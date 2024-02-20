<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    function index(){
        return view('manager/manager');
    }
    function profile(){
        echo "this is manager profile page";
    }
}
