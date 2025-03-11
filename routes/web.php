<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

// Sitemap generator route
Route::statamic('sitemap.xml', 'sitemap', ['layout' => 'sitemap', 'content_type' => 'xml']);