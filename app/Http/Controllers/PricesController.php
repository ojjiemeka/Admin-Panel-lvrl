<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PricesController extends Controller
{
    private function getPrices()
    {
        return Price::all();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prices = $this->getPrices();

        // echo $prices;

        return view('pages.pricing', [
            'prices'    =>  $prices
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
            'amount' => 'required',
            'desc' => 'required',
            // Add validation rules for other fields
        ]);

        $validatedData['status'] = 1;

        $model = new Price();
        $model->fill($validatedData);

        // dd($model);

        if ($model->save()) {
            // Model saved successfully, flash a success message
            Session::flash('success', 'Data has been successfully stored.');
            return redirect()->back();
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Failed to store data. Please try again.');
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
        $data = Price::find($id);

        $validatedData = $request->validate([
            'amount' => 'required',
            'desc' => 'required',
            // Add validation rules for other fields
        ]);

        // dd($validatedData);

        // Update the celebrity record with the validated data
        $data->update($validatedData);

        if ($data->update($validatedData)) {
            // Model saved successfully, flash a success message
            Session::flash('success', 'Price information has been successfully updated.');
            return redirect()->back();
        } else {
            // Model failed to save, flash an error message
            Session::flash('error', 'Failed to store data. Please try again.');
            return redirect()->back();
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Price::find($id);

        // dd($data);

        $data->delete();

        Session::flash('success', 'Price information has been successfully deleted.');
        return redirect()->back();
    }
}
