<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'city_id', 'name', 'longitude', 'latitude',
    ];

    public $timestamp = false;

    /** Eloquent Relations */
    public function city()
    {
        return $this->hasOne('App\City', 'id', 'city_id')->withDefault();
    }

    
}
