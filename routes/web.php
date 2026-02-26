<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'] )->name('admin');
