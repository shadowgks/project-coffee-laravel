<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\UserController;
use App\Models\Categorie;
use App\Models\Plate;
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

//Visitor
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

//profile
// Route::get('/profile', function(){
//     return view('profile');
// })->name('profile');

// Route::resource('/dashboard', [PlateController::class]);
//Admin
Route::get('/redirects', [UserController::class, 'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->controller(PlateController::class)
->group(function () {
    Route::get('/dashboard', 'index')
    ->name('dashboard')->middleware('checkuser');
    Route::get('/dashboard/create', 'create')
    ->name('dashboard.create')->middleware('checkuser');
    Route::post('/dashboard/store', 'store')
    ->name('dashboard.store')->middleware('checkuser');
    Route::get('/dashboard/edit/{id}', 'edit')
    ->name('dashboard.edit')->middleware('checkuser');
    Route::PUT('/dashboard/update/{id}', 'update')
    ->name('dashboard.update')->middleware('checkuser');
    Route::delete('/dashboard/{id}', 'destroy')
    ->name('dashboard.destroy')->middleware('checkuser');

    // Route::get('/dashboard/create', function () {
    //     return view('crud.create');
    // })->name('dashboard.create')->middleware('checkuser');
    // Route::get('/dashboard/edit', function () {
    //     return view('crud.edit');
    // })->name('dashboard.edit')->middleware('checkuser');
    // Route::resource('/dashboard',[PlateController::class])
    // ->middleware('checkuser');

});
