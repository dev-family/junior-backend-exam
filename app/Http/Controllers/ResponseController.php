<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ResponseClass\ResponseClass;

class ResponseController extends Controller
{
    public function __invoke(Request $request)
    {
        return new ResponseClass();
    }
}
