<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function agency() {

        return $this->belongsTo(Agency::class, 'agent_id', 'id');
    }

    public function created_by_user() {

        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
