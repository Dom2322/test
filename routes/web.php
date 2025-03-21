<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ProjektyController;

Route::get('/', function () {
    return view('home');
});

Route::get('/o-nas', function(){
    return view('o-nas');
});

Route::get('/statut', function () {
    return view('statut');
});

Route::get('/projekty', function(){
    return view('projekty');
});

Route::get('/kontakt', function(){
    return view('kontakt');
});

Route::get('/zarzad', function(){
    return view('zarzad');
});

Route::get('/cele', function () {
    return view('celeizasady');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/dzialalnosc', function () {
    return view('dzialalnosc');
});

Route::get('/opinie', [OpinionController::class, 'index'])->name('opinions.index');

Route::post('/opinie', [OpinionController::class, 'store'])->name('opinions.store');


Route::get('/projekty', [ProjektyController::class, 'index'])->name('projekty.index');

Route::get('/projekty/{id}', [ProjektyController::class, 'show'])->name('projekty.show');

Route::get('/sprawozdania', function () {
    return view('sprawozdania');
});
