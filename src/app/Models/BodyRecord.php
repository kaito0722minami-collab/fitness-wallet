<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'weight',
        'body_fat',
        'recorded_on',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}