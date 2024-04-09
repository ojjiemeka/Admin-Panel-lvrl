<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CelebController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        // $countries = $this->countries();

        // echo $countries;
        // return "hello world";
        return view('pages.viewCeleb', [
            'countries', $countries
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
        // Validate the request data
        $validatedData = $request->validate([
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'category' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'bio' => 'required',
            // 'img' => 'required'
            // Add validation rules for other fields
        ]);

        // Check if the information already exists
        $existingRecord = Celebrity::where('acc_id', $validatedData['acc_id'])->first();

        if ($existingRecord) {
            // Information already exists, you can handle it as per your requirements
            // Alert::error('Error', 'User already has a balance');
            // return redirect()->route('balances.index');
            echo "User already has a balance";
        }

        // Create a new instance of your model and fill it with the validated data
        $model = new Celebrity();
        $model->fill($validatedData);

        // echo $this->message;
        dd($model);
        // $store = $model->save();

        // if (!$store) {
        // Alert::error('Error', 'Something went wrong');

        //     return redirect()->route('balances.index');
        // }

        // Alert::success('Success', 'Balance has been created!!');
        // return redirect()->route('balances.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
