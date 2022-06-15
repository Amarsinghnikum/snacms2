<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
           'title' => 'Mail from SKS Tech Solutions',
           'body' => 'This is for testing mail using gmail.'
        ];

        Mail::to("amarskstech@gmail.com")->send(new TestMail($details));
        return "Email Send";
    }
}
