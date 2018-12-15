<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'name',
    ];

    public $timestamp = false;

    /** Eloquent Relations */
    public function cities()
    {
        return $this->hasMany('App\City', 'province_id', 'id');
    }

    public function requisition()
    {
        return $this->hasMany('App\Requisition', 'province_id', 'id');
    }
}
