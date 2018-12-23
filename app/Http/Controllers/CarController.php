<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

class CarController extends Controller
{
    public function index()
    {
    	return view('listing/index');
    }
}
