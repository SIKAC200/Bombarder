<?php

namespace App\Http\Controllers;

use App\Mail\BombardEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function send(Request $request)
    {
        $email = 'mohamed.moumariss@gmail.com';
        Mail::to($email)->send(new BombardEmail());

        dd('Mail send successfully');
    }
}
