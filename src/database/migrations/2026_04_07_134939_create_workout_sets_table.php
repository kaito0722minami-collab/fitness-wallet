<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('workout_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained('workout_sessions')->cascadeOnDelete();
            $table->string('exercise_name');
            $table->float('weight_kg')->nullable();
            $table->integer('reps');
            $table->integer('set_order');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workout_sets');
    }
};