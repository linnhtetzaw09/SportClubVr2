<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'name',
        'email',
        'password',
        'preferred_sport',
        'skill_level',
    ];

    // Hidden attributes (not exposed in arrays or JSON)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast attributes to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define a many-to-many relationship with the Event model.
     */
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_user'); // Assumes pivot table is named 'event_user'
    }
}
