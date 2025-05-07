<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('highpoints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('state', 2);
            $table->integer('elevation');
            $table->enum('difficulty', ['easy', 'moderate', 'challenging', 'difficult', 'extreme']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highpoints');
    }
};
