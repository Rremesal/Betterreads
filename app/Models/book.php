<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function authors() {
        return $this->belongsTo(user::class);
    }

    public function progress() {
        return $this->belongsToMany(User::class, 'progress', 'book_id','user_id');
    }

    public function ratings() {
        return $this->belongsToMany(User::class, 'rating', 'book_id', 'user_id');
    }

    public function positions() {
        return $this->belongsToMany(shelf::class, 'position', 'book_id', 'shelf_id');
    }

    public function genres() {
        return $this->belongsToMany(genre::class, 'bookgenre', 'book_id', 'genre_id');
    }

    public function series() {
        return $this->belongsTo(serie::class);
    }





}
