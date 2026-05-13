<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSet extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'exercise_name',
        'weight_kg',
        'reps',
        'set_order',
    ];

    public function workoutSession()
    {
        return $this->belongsTo(WorkoutSession::class, 'session_id');
    }
}