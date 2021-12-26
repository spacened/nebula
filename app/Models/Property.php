<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function agency() {

        return $this->belongsTo(Agency::class, 'agent_id', 'id');
    }

    public function location() {

        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function photos() {

        return $this->hasMany(Photo::class, 'property_id', 'id');
    }

    public function comments() {

        return $this->hasMany(Comment::class, 'property_id', 'id');
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
