<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


//Route::any('/',[MainController::class, 'Pet']);
Route::any('/docs/countries',[MainController::class, 'countries1']);
Route::any('/docs',[MainController::class, 'docs1']);
Route::any('/pricing',[MainController::class, 'pricing']);
Route::any('/integrations',[MainController::class, 'integrations']);
Route::any('/',[MainController::class, 'Pet'])->name('/');
Route::post('/',[MainController::class, 'review'])->name('review');
