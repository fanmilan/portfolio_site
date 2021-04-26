<?php

namespace App\Http\Controllers\API;

use App\Models\Frame;
use Illuminate\Http\Request;

class FrameController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $frames = Frame::limit(40)->get();
        return $this->sendResponse($frames->toArray());
    }
}
