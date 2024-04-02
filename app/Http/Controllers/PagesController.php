<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutsuS()
    {
        return view('home.about');
    }

    public function contactUs()
    {
        return view('home.contactUs');
    }
}
