<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function getAllCelebs()
    {
        return Celebrity::all();
    }
}
