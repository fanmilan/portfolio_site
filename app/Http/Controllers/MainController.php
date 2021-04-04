<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Link;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function showMainPage() {
        $projects = Project::all();

        return view('home', ['projects' => $projects, 'title'=>"Главная страница"]);
    }

    function showProjectPage($project_id) {
        $project = Project::findOrFail($project_id);
        return view('project', ['project' => $project]);
    }
}
