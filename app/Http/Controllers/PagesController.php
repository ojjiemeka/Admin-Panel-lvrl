<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;


class PagesController extends Controller
{
    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contactUs');
    }

    public function celebrities()
    {
        $celebs =   $this->getAllCelebs();

        return view('home.celebrities', [
            'celebs'    =>  $celebs
        ]);
    }

    public function vipSubscription()
    {
        return view('home.becomeAVip');
    }

    public function booking(string $id)
    {
        $data = Celebrity::find($id);

        // dd($data);
        try {
            // Call the countries() function to get the country names
            $countries = countries();

            // Pass the $countries variable to the view
            return view('home.bookings', [
                'data'          => $data,
                 'countries'        => $countries,
                ]);
        } catch (Exception $e) {
            // Handle the exception and return a custom error message
            $errorMessage = $e->getMessage();
            return view('home.bookings', [
                'data'          => $data,
                'countries'     => $countries,
                ]);
        }
    }
}
