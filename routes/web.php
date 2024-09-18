<?php

use App\Http\Controllers\BookController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [BookController::class , 'index']);
Route::get('/show/{id}' , [BookController::class , 'show']);


Route::get('/store' , [BookController::class , 'store']);
Route::post('/addBooks' , [BookController::class , 'addBooks']);


Route::get('/delete/{id}' , [BookController::class , 'delete']);

Route::get('/prepareUpdate/{id}' , [BookController::class , 'prepareUpdate']);
Route::post('/update/{id}' , [BookController::class , 'update']);


Route::get('/homepage' , [BookController::class , 'homepage']);