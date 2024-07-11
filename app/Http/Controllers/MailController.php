<?php

namespace App\Http\Controllers;

use App\Mail\Invoice;
use App\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
class MailController extends Controller
{
    private $mailFrom = 'contact@entertainment360.live';

    public function mailform()
    {
        return view('mail');
    }

    public function sendMail(Request $request)
    {
        $fromName           =   env('APP_NAME', 'Entertainment 360');
        $subject            =   $request->input('subject');
        $body               =   $request->input('body');
        $receiverName       =   $request->input('recieverName');
        $receiver           =   $request->input('reciever');

        // dd($receiver);

        try {
            // Send email
            Mail::to($receiver)->send(
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
        return view('pages.createMail');
    }

    public function showInvoice(Request $request)
    {
        $data = $request->all();

        return view('pages.invoice', [
            'data' => $data
        ]);
    }

    public function sendInvoice(Request $request)
    {

         // Retrieve the JSON string from the request
    $invoiceDataJson = $request->input('data');

    // Decode the JSON string into an array
    $invoiceData = json_decode($invoiceDataJson, true);

    // Now you can use $invoiceData as your $data array

        $fromName           =   env('APP_NAME', 'Entertainment 360');
        $subject            =   "Invoice - Pending Payment";
        $body               =   $invoiceData;
        $recieverName       =   $invoiceData['recieverName'];
        $receiver           =   $invoiceData['reciever'];

    // To verify if the decoding was successful, you can output the data
    // dd($invoiceData);

   

        try {

            $message = $body instanceof HtmlString ? $body->__toString() : $body;
            // Send email
            Mail::to($receiver)->send(
                new Invoice(
                    fromAddress: $this->mailFrom,
                    fromName: $fromName,
                    theSubject: $subject,
                    theMessage: $message, // Pass the message variable directly
                    recipientName: $recieverName
                )
            );
            // Email sent successfully, flash a success message
            Session::flash('success', 'Invoice sent successfully.');
        } catch (\Exception $e) {
            // Log the error
        Log::error('Error sending invoice: ' . $e->getMessage());

        // Flash an error message
        Session::flash('error', 'Failed to send invoice. Please try again.');
            // Email sending failed, flash an error message
            // Session::flash('error', 'Failed to send invoice. Please try again.');
        }

        // return view('components.invoice', [
        //     'theMessage' => $body,
        //     'recipientName' => $recieverName
    
        // ]);

        

        // Redirect back
        return view('pages.createMail');
    }


}
