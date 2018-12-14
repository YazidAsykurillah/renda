<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    protected $fillable = [
    	'user_id', 'category_id', 'brand_id', 'title', 'slug', 'description', 'manufactured_year', 'feature_image',
        'is_hourly', 'is_daily', 'is_weekly', 'is_monthly', 'is_annual',
    	'hourly_price', 'daily_price', 'weekly_price', 'monthly_price', 'annual_price',
        'blocked', 'booked'
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
