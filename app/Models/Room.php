<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'building_id', 'block_id', 'code', 'name', 'active'
    ];
}
