<?php

namespace App\Http\Controllers;

use App\Models\FanCard;
use Illuminate\Http\Request;

class FanCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $fanInfo = $this->getFanInfo();

        // echo $prices;

        return view('pages.bookings', [
            'fanInfo'    =>  $fanInfo
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
        //
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