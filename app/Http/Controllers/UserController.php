<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        $role = Auth::user()->role;
        if($role == '0'){
            return redirect()->route('home');
        }else{
            return redirect()->route('dashboard');
        }
    }
}
