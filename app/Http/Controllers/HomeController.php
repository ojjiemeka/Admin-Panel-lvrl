<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;

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
        // echo $celebsList;
        $calculateAge = function ($dateOfBirth) {
            return Carbon::parse($dateOfBirth)->age;
        };

        $celebsList = $this->getAllCelebs();
        
        try {
            // Call the countries() function to get the country names
            $countries = countries();

            // Pass the $countries variable to the view
            return view('home', [
                'countries'     => $countries,
                'celebsList'    => $celebsList,
                'calculateAge'  => $calculateAge
            ]);
        } catch (Exception $e) {
            // Handle the exception and return a custom error message
            $errorMessage = $e->getMessage();
            return view('home', [
                'errorMessage' => $errorMessage,
                'celebsList'    => $celebsList,
                'calculateAge'  => $calculateAge
            ]);
        }
    }

    public function createMail()
    {
        return view('pages.createMail');
    }
}
