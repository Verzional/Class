<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['pageTitle' => 'Home']);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard', ['pageTitle' => 'Dashboard']);
})->name('dashboard');

Route::get('/projects', function () {
    return view('projects', ['pageTitle' => 'Projects', 'projects' => Project::allData()]);
})->name('projects');

Route::get('/projects/{code}', function ($code) {
    return view('showProject', ['pageTitle' => 'Project Detail', 'project' => Project::dataWithCode($code)]);
})->name('project');
