<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function testEnvoi()
    {
        $mail = new InvitationMail();
        $email = 'andrianantenainasonia@gmail.com';
        $mail->to($email);
        Mail::send($mail);
        return 'E-mail envoyé avec succès!';
    }
}