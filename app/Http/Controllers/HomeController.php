<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        $role = Auth::user()->role;
        if($role == '0'){
            return view('visitor.index');
        }else{
            return view('dashboard');
        }
    }
}
