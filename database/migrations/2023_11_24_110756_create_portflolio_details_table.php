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
        Schema::create('portflolio_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('protflolio_id')->constrained('protflolio');
            $table->foreignId('user_id')->constrained('user');
            $table->foreignId('songs_id')->constrained('song');
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
