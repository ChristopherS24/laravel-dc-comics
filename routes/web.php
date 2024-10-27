<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ComicController;

Route::get('/', function () {
    $firstName = 'Gino';
    $lastName = 'Paoli';



    return view('welcome', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);

});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

Route::resource('comics', ComicController::class);
