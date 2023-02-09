<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });]
//visitor
Route::get('/', function () {
    return view('visitor.index');
});
Route::get('/menu', function () {
    return view('visitor.menu');
})->name('menu');
//dashboard
Route::get('/dashboard-test', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});


Route::get('/redirects', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('checkuser');
    Route::get('/dashboard/create', function () {
        return view('crud.create');
    })->name('dashboard.create')->middleware('checkuser');
    Route::get('/dashboard/edit', function () {
        return view('crud.edit');
    })->name('dashboard.edit')->middleware('checkuser');
});
