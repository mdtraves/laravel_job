<?php

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('Home');

Route::get('/jobs', [VacancyController::class, 'index']);
Route::get('/jobs/create', [VacancyController::class, 'create']);
Route::post('/jobs/create', [VacancyController::class, 'store']);
Route::get("/jobs/{vacancy}", [VacancyController::class, 'show']);
Route::get('/jobs/edit/{vacancy}', [VacancyController::class, 'edit']);
Route::patch('/jobs/edit/{vacancy}', [VacancyController::class, 'update']);
Route::delete('/jobs/delete/{vacancy}', [VacancyController::class, 'destroy']);

Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/create', [MessageController::class, 'create']);
Route::post('/messages/create', [MessageController::class, 'store']);
Route::get("/messages/{message}", [MessageController::class, 'show']);
Route::get('/messages/edit/{message}', [MessageController::class, 'edit']);
Route::patch('/messages/edit/{message}', [MessageController::class, 'update']);
Route::delete('/messages/delete/{message}', [MessageController::class, 'destroy']);