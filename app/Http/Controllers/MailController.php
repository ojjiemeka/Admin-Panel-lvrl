<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;

class MailController extends Controller
{
    private $mailFrom = 'info@entertainment360.live';

    public function mailform()
    {
        return view('mail');
    }

    public function sendMail(Request $request)
    {
        $fromName   =   env('APP_NAME', 'ENtertainment 360');
        $subject    =   $request->input('subject');
        $body       =   $request->input('body');
        $receiverName       =   $request->input('recieverName');

        // dd($request->input());

        try {
            // Send email
            Mail::to('ojjiemeka@gmail.com')->send(
                new Mailer(
                    fromAddress: $this->mailFrom,
                    fromName: $fromName,
                    theSubject: $subject,
                    theMessage: new HtmlString($body),
                    recipientName: $receiverName
                )
            );
            
            // Email sent successfully, flash a success message
            Session::flash('success', 'Email sent successfully.');
        } catch (\Exception $e) {
            // Email sending failed, flash an error message
            Session::flash('error', 'Failed to send email. Please try again.');
        }
    
        // Redirect back
        return redirect()->back();
    }
}
