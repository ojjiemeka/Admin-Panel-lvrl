<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\Bookings;
use App\Models\FanCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function getAllBookings()
    {
        return Bookings::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'fanID' => [
                'required',
                Rule::exists('fanCardSubscription', 'fanID'), // Assuming 'fans' is the table name and 'fanID' is the column name
            ],
            'celebrity_name' => 'required',
            'event_date' => 'required',
            'approx_budget' => 'required',
            'event_type' => 'required',
            'location' => 'required',
            'additional_info' => 'required',
            'nearest_airport' => 'required',
            // Add validation rules for other fields
        ]);

        $fanID = $validatedData['fanID'];

        // Retrieve the FanCard record associated with the provided fanID
        $fanCard = FanCard::where('fanID', $fanID)->first();

        // dd();

        // Render the view with the necessary data, including celebrity_name
        $viewInstance = view('components.meetGreet', [
            'celebrity_name' => $validatedData['celebrity_name'],
        ]);

        $mailFrom                   = 'info@entertainment360.live';
        $fromName                   =   env('APP_NAME', 'Entertainment 360');
        $subject                    =   'Entertainment360 Meet & Greet';
        $body                       = $viewInstance->render();
        $receiverName               =   $fanCard['full_name'];
        $receiverEmail              =   $fanCard['email'];

        // dd($receiverName, $receiverEmail);


        $model = new Bookings();
        $model->fill($validatedData);

        // // dd($model);

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
            // return redirect()->back()->with('success', 'Form submitted. We will reach out to you shortly.');
            Session::flash('success', 'An email will be sent to you shortly.');
            return view('home.success');
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Something went wrong Please try again.');
            return redirect()->back();
        }

        return redirect()->back()->withInput();
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
        $validatedData = $request->validate([
            'fanID' => [
                'required',
                Rule::exists('fanCardSubscription', 'fanID'), // Assuming 'fans' is the table name and 'fanID' is the column name
            ],
            'celebrity_name' => 'required',
            'event_date' => 'required',
            'approx_budget' => 'required',
            'event_type' => 'required',
            'location' => 'required',
            'additional_info' => 'required',
            'nearest_airport' => 'required',
            // Add validation rules for other fields
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Bookings::find($id);

        // dd($data);

        $data->delete();

        Session::flash('success', 'Booking information has been successfully deleted.');
        return redirect()->back();
    }
}
