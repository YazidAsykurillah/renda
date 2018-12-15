<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'province_id', 'name',
    ];

    public $timestamp = false;

    /** Eloquent Relations */
    public function province()
    {
        return $this->hasOne('App\Province', 'id', 'province_id')->withDefault();
    }

    public function districts()
    {
        return $this->hasMany('App\District', 'city_id', 'id');
    }

}
