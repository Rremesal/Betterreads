<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelf extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function books() {
        return $this->belongsToMany(book::class, 'position', 'shelf_id', 'book_id');
    }

    
}
