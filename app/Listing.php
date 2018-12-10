<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    protected $fillable = [
    	'user_id', 'category_id', 'brand_id', 'title', 'slug', 'description', 'manufactured_year',
    	'hourly_price', 'daily_price', 'weekly_price', 'monthly_price', 'annual_price', 'blocked'
    ];

    public function category()
    {
    	return $this->belongsTo('\App\Category');
    }

    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
