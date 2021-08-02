<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function (){
        if (auth()->check())
            return view('layouts.app');
                return redirect('/login');
});
Route::get('getuser',function (){
    return auth()->user();
});
//Auth::routes();
Route::view('/login', 'layouts.app');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
