<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('body_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->float('weight')->nullable();
            $table->float('body_fat')->nullable();
            $table->date('recorded_on');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('body_records');
    }
};