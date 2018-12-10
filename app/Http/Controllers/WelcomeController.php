<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Brand;
use App\Listing;

class WelcomeController extends Controller
{
    public function index()
    {
    	$brands = Brand::all();
    	$listings = Listing::all();
    	return view('welcome')
    		->with('brands',$brands)
    		->with('listings', $listings);
    }
}
