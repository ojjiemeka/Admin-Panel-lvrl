<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
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
        $prices = Price::where('desc', 'fancard')->get();
        // dd($prices);

        try {
            // Call the countries() function to get the country names
            $countries = countries();

            // Pass the $countries variable to the view
            return view('home.becomeAVip', [
                'prices'           => $prices,
                'countries'        => $countries,
                ]);
        } catch (Exception $e) {
            // Handle the exception and return a custom error message
            $errorMessage = $e->getMessage();
            return view('home.becomeAVip', [
                'prices'        => $prices,
                'countries'     => $countries,
                ]);
        }
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

    public function successPage()
    {
        return view('home.success');
    }

    public function orderNow( Request $request )
    {
        // Get the user's IP address
        $userIp = $request->ip();
        // Make a request to the ipinfo.io API
        $client = new Client();
        $response = $client->get("https://ipinfo.io/{$userIp}?token=c70030889cf941");
        // Parse the JSON response
        $data = json_decode($response->getBody());
        // Extract user information

        // $location = $data->loc;
        // $country = $data->country;

        // dd($country);

        return view('pages.orderNow', [
            // 'country' => $country
        ]);
    }

    public function buyBook( Request $request )
    {

        return view('pages.placeOrder', [
            // 'country' => $country
        ]);
    }

    public function payNow( Request $request )
    {

        return view('home.payNow', [
            // 'country' => $country
        ]);
    }
}
