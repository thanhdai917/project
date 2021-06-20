<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;

class ValidateController extends Controller
{
    public function show()
    {
        return view('request');
    }

    public function validateCustom(ValidationRequest $request)
    {

    }
}
