<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'title' =>  $request->subject,
            'body' => $request->message,
        ];  
        
        Mail::to($request->to_email)->send(new TestMail($details));

        return redirect("/mail");
    }
}
