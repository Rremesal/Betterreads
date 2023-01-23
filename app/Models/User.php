<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    public function friends() {
        return $this->belongsToMany(User::class, 'friend', 'user_id', 'connection_id');
    }

    public function books(){
        return $this->hasMany(book::class);
    }

    public function progress() {
        return $this->belongsToMany(book::class, 'progress', 'user_id', 'book_id');
    }

    public function ratings() {
        return $this->belongsToMany(book::class, 'rating', 'user_id', 'book_id');
    }

    public function shelves() {
        return $this->hasMany(shelf::class);
    }

    public function posts() {
        return $this->hasMany(post::class);
    }

    public function usercomments() {
        return $this->hasMany(usercomment::class);
    }

    public function postcomments() {
        return $this->hasMany(postcomment::class);
    }
}

