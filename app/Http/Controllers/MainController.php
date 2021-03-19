<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function showMainPage() {
        $projects = Project::get();
        return view('home', ['projects' => $projects, 'title'=>"Главная страница"]);
    }
}
