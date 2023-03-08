<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function submit(Request $request){
        $name= $request->name;
        $email= $request->email;
        $number= $request->number;
        $message= $request->message;

        $user= compact('name', 'email', 'message', 'number');
        Mail::to($email)->send(new ContactMail($user));

        return redirect(route('homepage'))->with('message', 'La tua email è stata inviata con successo');
    }
}
