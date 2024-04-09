<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            // Call the countries() function to get the country names
            $countries = countries();
    
            // Pass the $countries variable to the view
            return view('home', [
                'countries' => $countries
            ]);
        } catch (Exception $e) {
            // Handle the exception and return a custom error message
            $errorMessage = $e->getMessage();
            return view('error', ['errorMessage' => $errorMessage]);
        }
    }

    public function createMail()
    {
        return view('pages.createMail');
    }
}
