<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Message;

class MailsController extends Controller
{
    public function sendMessage()
    {
        
        //Mail::to('odehisaac1998@gmail.com')->send(new ContactMail());
        $message = Message::find(5);
        return new ContactMail($message);
    }
}
