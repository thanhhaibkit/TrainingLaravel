<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = [
        'building_id', 'code', 'name', 'active'
    ];

    public function building()
    {
        return $this->belongsTo('App\Models\Building');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }
}
