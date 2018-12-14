<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Brand;
use App\Listing;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
    	$limit = $request->has('limit') ? $request->limit : 3;
    	$brands = Brand::all();
    	$listings = Listing::paginate($limit);
    	return view('welcome')
    		->with('brands',$brands)
    		->with('listings', $listings);
    }
}
