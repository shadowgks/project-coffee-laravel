<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    function update(Request $request,$id){
        if($request->user == '0'){
            DB::table('users')
            ->where('id', $id)
            ->update(['role' => '1']);
            return redirect()->route('dashboard');
        }
        else if($request->user == '1'){
            DB::table('users')
            ->where('id', $id)
            ->update(['role' => '0']);
            return redirect()->route('dashboard');
        }
        
    }
}
