<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;
use App\Category;

class CarController extends Controller
{
	protected $listingBreadcrumb = 'Car';
	protected $categoryName = '';
	protected $category_id = 1;

	public function __construct(Request $request)
	{
		$this->categoryName = $request->segment(1);
    	$this->category_id = Category::where('name',$this->categoryName)->first()->id;
	}

    public function index(Request $request)
    {
    	$results = Listing::where('category_id', $this->category_id)->get();
    	return view('listing/index')
    		->with('listingBreadcrumb', $this->listingBreadcrumb)
    		->with('results', $results);
    }
}
