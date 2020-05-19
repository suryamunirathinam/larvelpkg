<?php

namespace Suryamunirathinam\Communication\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Suryamunirathinam\Communication\Mail\sendMailable;
use Suryamunirathinam\Communication\Models\Form;

class FormController extends Controller
{
    public function index(){
        return view('communication::form');
    }

    public function store(Request $request){
        Mail::to(config('communication.send_email_to'))->send(new sendMailable($request->feedback,$request->fname));
        Form::create($request->all());
        return "submitted";
    }
//    public function send()
//    {
//
//    }
}
