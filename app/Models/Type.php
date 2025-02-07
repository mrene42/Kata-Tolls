<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        "name",
        "price"
    ];

    public function vehicles ()
    {
        return $this->hasMany(Vehicle::class, "type_id");
    }
}
