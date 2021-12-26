<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function property() {

        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'uploaded_by', 'id');
    }
}
