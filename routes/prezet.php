<?php

use App\Http\Controllers\PrezetIndexController;
use App\Http\Controllers\PrezetShowController;
use BenBjurstrom\Prezet\Http\Controllers\ImageController;
use BenBjurstrom\Prezet\Http\Controllers\OgimageController;
use BenBjurstrom\Prezet\Http\Controllers\SearchController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

Route::withoutMiddleware([
    ShareErrorsFromSession::class,
    StartSession::class,
    VerifyCsrfToken::class,
])
    ->group(function () {

        Route::get('/search', SearchController::class)->name('prezet.search');

        Route::get('/img/{path}', ImageController::class)
            ->name('prezet.image')
            ->where('path', '.*');

        Route::get('/ogimage/{slug}', OgimageController::class)
            ->name('prezet.ogimage')
            ->where('slug', '.*');

        Route::get('/articles', PrezetIndexController::class)
            ->name('prezet.index');

        Route::get('/{slug}', PrezetShowController::class)
            ->name('prezet.show')
            ->where('slug', '.*'); // https://laravel.com/docs/11.x/routing#parameters-encoded-forward-slashes
    });
