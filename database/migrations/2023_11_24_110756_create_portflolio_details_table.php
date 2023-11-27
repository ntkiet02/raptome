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
        Schema::create('portflolio_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('protflolios_id')->constrained('protflolios');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('songs_id')->constrained('songs');
            $table->string('image')->nullable();
            $table->timestamps();
            $table-> engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portflolio_details');
    }
};
