<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[ProductController::class,'home'])->name('home');

Route::get('/create',[ProductController::class,'create'])->name('create');

Route::get('/edit/{product}',[ProductController::class,'edit'])->name('edit');

Route::get('/update',[ProductController::class,'update'])->name('update');

Route::post('/store',[ProductController::class,'store'])->name('store');

Route::get('/welcome',[ProductController::class,'welcome'])->name('welcome');

