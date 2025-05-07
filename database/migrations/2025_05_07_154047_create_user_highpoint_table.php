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
        Schema::create('highpoint_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('highpoint_id')->constrained()->onDelete('cascade');
            $table->boolean('completed')->default(false);
            $table->date('completion_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            // Ensure a user can only complete a highpoint once
            $table->unique(['user_id', 'highpoint_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highpoint_user');
    }
};
