<?php

namespace App\Http\Controllers\API;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mails = Mail::all()->map(function($item){
            return [
                'id'=>$item->id,
                'email'=>$item->email,
                'created_at'=>$item->items
            ];
            });
        return $this->sendResponse($mails->toArray());
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'Email обязателен к заполнению'
        ]);

        $mail = Mail::create($input);
        return $this->sendResponse($mail->toArray());
    }
}
