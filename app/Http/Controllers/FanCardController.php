<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\Bookings;
use App\Models\FanCard;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class FanCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function getBookingInfo(){
        return Bookings::all();
    }
    
    private function getFanInfo()
    {
        return FanCard::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $bookingsInfo = $this->getBookingInfo();
    $fanInfo = $this->getFanInfo();

    $bookingsInfo = Bookings::with('fan')->get();

    $fullName = ''; // Initialize $fullName here

    if ($bookingsInfo->isEmpty() || $bookingsInfo->count() < 1) {
        // If $bookingsInfo is empty or has less than 1 item
        $isEmpty = true; // Variable to indicate it's empty
    } else {
        foreach ($bookingsInfo as $booking) {
            // Access the fan relation
            $fanCard = $booking->fan;

            // Check if the fan relation exists and if it's an instance of FanCard
            if ($fanCard instanceof FanCard) {
                // Access the full_name attribute of the FanCard model
                $fullName = $fanCard->full_name;

                // Do something with the full name...
            }
        }
        $isEmpty = false; // Variable to indicate it's not empty
    }

    return view('pages.bookings', [
        'fanInfo' => $fanInfo,
        'bookingsInfo' => $bookingsInfo,
        'fullName' => $fullName,
        'isEmpty' => $isEmpty // Pass the variable to the view
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input());
        
        $validatedData = $request->validate([
            'full_name' => 'required',
            'job_title' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'street_address' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'amount' => 'required',
            // Add validation rules for other fields
        ]);
        
        $viewInstance               = view('components.fanCardMail');

        $mailFrom                   = 'info@entertainment360.live';
        $fromName                   =   env('APP_NAME', 'ENtertainment 360');
        $subject                    =   'Welcome to Entertainment360';
        $body                       = $viewInstance->render();
        $receiverName               =   $validatedData['full_name'];
        $receiverEmail               =   $validatedData['email'];

        $randomNumber               = Str::random(8);
        $validatedData['fanID']     = $randomNumber;

        $validatedData['status'] = 1;

        // dd($receiverName, $receiverEmail);
       
        $model = new FanCard();
        $model->fill($validatedData);

        // dd($model);

        if ($model->save()) {
            Mail::to($receiverEmail)->send(
                new Mailer(
                    fromAddress: $mailFrom,
                    fromName: $fromName,
                    theSubject: $subject,
                    theMessage: new HtmlString($body),
                    recipientName: $receiverName
                )
            );
            // Model saved successfully, flash a success message
            Session::flash('success', 'An email will be sent to you shortly.');
            return view('home.success');
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Something went wrong Please try again.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = FanCard::find($id);

        $validatedData = $request->validate([
            'full_name' => 'required',
            'job_title' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'street_address' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'amount' => 'required',
            // Add validation rules for other fields
        ]);

        $data->update($validatedData);

        if ($data->update($validatedData)) {
            // Model saved successfully, flash a success message
            Session::flash('success', 'Celebrity information has been successfully updated.');
            return redirect()->back();
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Failed to store data. Please try again.');
            return redirect()->back();
        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = FanCard::find($id);

        // dd($data);

        $data->delete();

        Session::flash('success', 'Fan Card information has been successfully deleted.');
        return redirect()->back();
    }
}
