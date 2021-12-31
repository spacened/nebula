<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;


    /*
     *  Get the parent model, either identity or a product
     */
    public function photoable() {

        return $this->morphTo();
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'uploaded_by', 'id');
    }
}
