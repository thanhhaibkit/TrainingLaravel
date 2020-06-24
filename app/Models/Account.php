<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'code', 'name', 'active'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function sites()
    {
        return $this->hasMany('App\Models\Site');
    }
}
