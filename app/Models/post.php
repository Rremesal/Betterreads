<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users() {
        return $this->belongsTo(user::class);
    }

    public function postcomments() {
        return $this->hasMany(postcomment::class);
    }
}
