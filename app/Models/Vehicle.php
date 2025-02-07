<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        "type_id",
        "license",
        "total_expenses"
    ];

    public function type ()
    {
        return $this->belongsTo(Type::class, "type_id");
    }

    public function tolls ()
    {
        return $this->belongsToMany(Toll::class, 'vehicles_tolls');
    }
}
