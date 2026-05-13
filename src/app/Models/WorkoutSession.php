<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trained_on',
        'memo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workoutSets()
    {
        return $this->hasMany(WorkoutSet::class, 'session_id');
    }
}