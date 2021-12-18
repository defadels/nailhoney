<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index() {
        $details = [
            'title' => 'Mail from websitepercobaan.com',
            'body' => 'This is for testing email using smtp'
            ];
           
            \Mail::to('emailpenerima@gmail.com')->send(new \App\Mail\MyTestMail($details));
           
            dd("Email sudah terkirim.");
    }
}
