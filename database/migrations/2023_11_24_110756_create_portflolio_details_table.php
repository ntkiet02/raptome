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
            $table->foreignId('portflolio_id')->constrained('portflolio');
            $table->foreignId('songs_id')->constrained('songs');
            $table->string('image');
            $table->timestamps();
            $table-> engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portflolio_detail');
    }
};
