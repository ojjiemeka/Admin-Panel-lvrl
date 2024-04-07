<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home.celebrities');
    }

    public function vipSubscription()
    {
        return view('home.becomeAVip');
    }
}
