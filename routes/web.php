<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('home',[Homecontroller::class,'index'])->name('home');

    Route::get('create',[HomeController::class,'create'])->name('create');

    Route::post('store',[Homecontroller::class,'store'])->name('store');


});