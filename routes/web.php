<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\VendorItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('events', EventController::class)->only(['index']);

Route::get('/vendor-items/{type}', [VendorItemController::class, 'getByType'])->name('vendor-items.by-type');
