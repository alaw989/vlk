<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])
    ->name('application');

Route::get('/pages', [PageController::class, 'getPages'])
    ->name('pages.index');
