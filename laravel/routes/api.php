<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/notes', [App\Http\Controllers\NotesController::class, 'index']);
Route::get('/notes/{id}', [App\Http\Controllers\NotesController::class, 'show']);
Route::post('/notes', [App\Http\Controllers\NotesController::class, 'store']);
Route::put('/notes/{id}', [App\Http\Controllers\NotesController::class, 'update']);
Route::delete('/notes/{id}', [App\Http\Controllers\NotesController::class, 'delete']);


