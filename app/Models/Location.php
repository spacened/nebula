<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function agents() {

        return $this->hasMany(Agent::class, 'location_id', 'id');
    }

    public function properties() {

        return $this->hasMany(Property::class, 'location_id', 'id');
    }
}
