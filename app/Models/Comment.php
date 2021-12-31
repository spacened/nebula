<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable() {

        return $this->morphTo();
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
