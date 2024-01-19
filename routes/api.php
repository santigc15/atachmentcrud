<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtachmentController;



Route::get('/atachment', [AtachmentController::class , 'index'])->name('index');
Route::post('/atachment', [AtachmentController::class , 'store'] )->name('store');
Route::delete('/atachment/{id}', [AtachmentController::class , 'destroy'] )->name('destroy');

