<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\NowController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeController::class)->name('home');

Route::get('/lists', ListsController::class)->name('lists');

Route::get('/now', NowController::class)->name('now');

require __DIR__ . '/prezet.php';
