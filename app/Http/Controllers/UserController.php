<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        $role = Auth::user()->role;
        if ($role == '0') {
            return redirect()->route('home');
        } else {
            return redirect()->route('dashboard');
        }
    }

    function update(Request $request, $id)
    {
        if ($request->role == '0') {
            $role = '1';
        } else {
            $role = '0';
        }
        DB::table('users')
            ->where('id', $id)
            ->update(['role' => $role]);
            
        return redirect()->route('dashboard');
    }
}
