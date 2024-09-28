<?php

use App\Livewire\ProductList;
use App\Livewire\CreateProduct;
use Illuminate\Support\Facades\Route;

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

});

Route::get('/home',ProductList::class)->name('home');

Route::get('/create',CreateProduct::class)->name('create');