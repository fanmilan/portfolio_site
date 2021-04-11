<?php

namespace App\Http\Controllers\API;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ideas = Idea::all()->map(function($item){
            return [
                'id'=>$item->id,
                'idea'=>$item->idea,
                'created_at'=>$item->created_at->format('Y-m-d')
            ];
        });
        return $this->sendResponse($ideas->toArray());
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'idea'=>'required'
        ],
        ['idea.required'=>'Поле "Идея" обязательно к заполнению.']);
        $idea = Idea::create($input);
        return $this->sendResponse($idea->toArray());
    }
}
