<?php

use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'index')->name('Home');
Route::view('/messages', 'messages')->name('messages');

Route::get("/job/{vacancy}", [VacancyController::class, 'show']);
Route::get('/jobs', [VacancyController::class, 'index']);
Route::get('/jobs/create', [VacancyController::class, 'create']);
Route::post('/jobs/create', [VacancyController::class, 'store']);
