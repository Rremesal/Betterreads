<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function books() {
        return $this->belongsToMany(book::class, 'bookgenre', 'genre_id', 'book_id');
    }
    
} 
