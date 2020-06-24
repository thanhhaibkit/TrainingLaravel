<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'site_id', 'code', 'name', 'active', 'has_block'
    ];

    public function site()
    {
        return $this->belongsTo('App\Models\Site');
    }

    public function blocks()
    {
        return $this->hasMany('App\Models\Block');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }
}
