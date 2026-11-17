<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum-laravel', function () {
    return view('praktikum2.index');
});
Route::get('events/{location}/{name}', [
    App\Http\Controllers\EventsController::class,
    'show'
]);
