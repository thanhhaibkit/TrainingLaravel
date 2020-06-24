<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'code', 'name', 'active'
    ];

    public function buildings()
    {
        return $this->hasMany('App\Models\Building');
    }
}
