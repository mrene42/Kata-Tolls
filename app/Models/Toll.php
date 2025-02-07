<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toll extends Model
{
    protected $fillable = [
        "name",
        "city",
        "collection"
    ];

    public function vehicles ()
    {
        return $this->belongsToMany(Vehicle::class, 'vehicles_tolls');
    }
}
