<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects', ['pageTitle' => 'Projects', 'projects' => Project::allData()]);
    }

    public function show($code)
    {
        return view('showProject', ['pageTitle' => 'Project Detail', 'project' => Project::dataWithCode($code)]);
    }
}
