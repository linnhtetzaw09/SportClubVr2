<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name',
        'date',
        'time',
        'location',
        'age_group',
        'description',
        'activities',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user');
    }

    public function registrations()
    {
        return $this->hasMany(EventUser::class);
    }
}
