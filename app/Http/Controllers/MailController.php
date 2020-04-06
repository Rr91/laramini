<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(["text" => "mail"], ["name" => "lara"], function($message){
            $message->to("rr@easy-it.ru", "Lara")->subject("test mail");
            $message->from("rr@easy-it.ru", "Lara1");
        });
    }
}
