<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Validator;
use Illuminate\Http\Request;

class MailController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails = Mail::all();
        return $this->sendResponse($mails->toArray(), 'Mails retrieved successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
       /* $validator = Validator::make($input, [
            'email' => 'required',
            'type' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }*/
        $mail = Mail::create($input);
        return $this->sendResponse($mail->toArray(), 'Mail created successfully.');
    }
}
