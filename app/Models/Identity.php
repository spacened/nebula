<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    public function properties() {

        return $this->hasMany(Property::class, 'identity_id');
    }

    public function location() {

        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function photos() {

        return $this->morphMany(Photo::class, 'photoable');
    }

    /*
     * Get all the users that have a role assigned with the identity
     */
    public function users() {

        return $this->hasMany(Role::class, 'agent_id', 'id');
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }

}
