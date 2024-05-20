<?php

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'index')->name('Home');

Route::get("/messages/{message}", [MessageController::class, 'show']);
Route::get('/messages', [MessageController::class, 'index']);

Route::get("/jobs/{vacancy}", [VacancyController::class, 'show']);
Route::get('/jobs', [VacancyController::class, 'index']);
Route::get('/jobs/create', [VacancyController::class, 'create']);
Route::post('/jobs/create', [VacancyController::class, 'store']);
