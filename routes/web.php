<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['pageTitle' => 'Home']);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard', ['pageTitle' => 'Dashboard']);
})->name('dashboard');

Route::get('/projects', [ProjectController::class, 'index']) ->name('projects');
Route::get('/project/{code}', [ProjectController::class, 'show']) ->name('project');
