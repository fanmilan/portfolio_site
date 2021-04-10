<?php

namespace App\Http\Controllers;

use App\Mail\feedback;
use App\Models\Project;
use App\Models\Link;
use App\Models\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    function showMainPage() {
        $projects = Project::where('published',1)->limit(4)->orderBy('created_at', 'desc')->get();

        return view('home', ['projects' => $projects, 'title'=>"Главная страница"]);
    }

    function showProjectsPage() {
        $projects = Project::where('published',1)->orderBy('created_at', 'desc')->get();
        return view('projects', ['projects' => $projects]);
    }

    function showProjectPage($project_id) {
        $project = Project::where('published',1)->findOrFail($project_id);
        return view('project', ['project' => $project]);
    }

    function sendFeedback(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ], [
            'name.required' => 'Поле "Имя" обязательно к заполнению',
            'email.required' => 'Поле "Email" обязательно к заполнению',
            'message.required' => 'Поле "Сообщение" обязательно к заполнению',
        ]);




        //  Send mail to admin
        Mail::to("fanmilan007@gmail.com")->send(new feedback($request->all()));

        return back()->with('success', 'Ваше сообщение успешно отправлено.');
    }
}
