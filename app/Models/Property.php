<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function identity() {

        return $this->belongsTo(Identity::class, 'identity_id', 'id');
    }

    public function location() {

        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function photos() {

        return $this->morphMany(Photo::class, 'photoable');
    }

    public function comments() {

        return $this->morphMany(Comment::class, 'comentable');
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
