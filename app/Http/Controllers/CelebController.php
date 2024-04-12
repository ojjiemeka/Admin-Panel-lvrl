<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Exception;
use Carbon\Carbon;
use Illuminate\Contracts\Support\ValidatedData;

class CelebController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $calculateAge = function ($dateOfBirth) {
            return Carbon::parse($dateOfBirth)->age;
        };

        $celebsList = $this->getAllCelebs();

        try {
            // Call the countries() function to get the country names
            $countries = countries();

            // Pass the $countries variable to the view
            return view('pages.viewCeleb', [
                'countries'     => $countries,
                'celebsList'    => $celebsList,
                'calculateAge'  => $calculateAge
            ]);
        } catch (Exception $e) {
            // Handle the exception and return a custom error message
            $errorMessage = $e->getMessage();
            return view('pages.viewCeleb', [
                'errorMessage' => $errorMessage,
                'celebsList'    => $celebsList,
                'calculateAge'  => $calculateAge
            ]);
        }
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
        // Validate the request data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'date_of_birth' => 'required',
            'category' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'bio' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for the image
            // Add validation rules for other fields
        ]);

        // dd($validatedData);

        // Manually add the 'status' field with value 1
        $validatedData['status'] = 1;

        // Handle image upload using the helper function
        $imagePath = uploadImage($request->file('img'));

        // Check if the information already exists
        $existingRecord = Celebrity::where('fullname', $validatedData['fullname'])->first();

        if ($existingRecord) {
            // Information already exists, you can handle it as per your requirements
            return redirect()->back()->with('error', 'Celeb already exists.');
        }

        // Create a new instance of your model and fill it with the validated data
        $model = new Celebrity();
        $model->fill($validatedData);
        $model->img = $imagePath;

        if ($model->save()) {
            // Model saved successfully, flash a success message
            Session::flash('success', 'Data has been successfully stored.');
            return redirect()->back();
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Failed to store data. Please try again.');
            return redirect()->back();
        }
        // echo $this->message;
        // dd($model);
        // $store = $model->save();

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
        $data = Celebrity::find($id);
        
        //  Validate the request data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'date_of_birth' => 'required',
            'category' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'bio' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for the image
            // Add validation rules for other fields
        ]);
        
        // dd($validatedData);

        // dd($validatedData);
        if ($request->hasFile('img')) {
            // Dump and die the image name before saving
            // dd($request->file('img')->getClientOriginalName());
            
            $imagePath = uploadImage($request->file('img'));
            $validatedData['img'] = $imagePath;
        }

        // Update the celebrity record with the validated data
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

        // Redirect back
        return redirect()->back();

        // Flash a success message and redirect back


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Celebrity::find($id);

        // dd($data);

        $data->delete();

        Session::flash('success', 'Celebrity information has been successfully deleted.');
        return redirect()->back();
    }
}
