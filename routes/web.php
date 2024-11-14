<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['pageTitle' => 'Home']);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard', ['pageTitle' => 'Dashboard']);
})-> name('dashboard');

Route::get('/projects', function () {
    return view('projects', ['pageTitle' => 'Projects']);
})-> name('projects');