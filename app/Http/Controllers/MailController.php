<?php

namespace App\Http\Controllers;

use App\Jobs\MailSend;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Notifications\SignupConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend()
    {
        // Mail::to('mahmudulanam8@gmail.com')->send(new WelcomeMail());
        dispatch(new MailSend());
    }
    public function notification()
    {
        // Mail::to('mahmudulanam8@gmail.com')->send(new WelcomeMail());
        $user = User::findOrFail(1);
        $user->notify(new SignupConfirm());
    }
}
