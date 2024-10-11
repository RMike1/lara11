<?php

use App\Livewire\ProductList;
use App\Livewire\CreateProduct;
use App\Livewire\EditProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
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

Route::middleware('auth')->group(function(){

    Route::get('/home',ProductList::class)->name('home')->lazy(enabled: true);
    
    Route::get('/create',CreateProduct::class)->name('create');
    
    Route::get('edit/{item}',EditProduct::class)->name('edit');

});
