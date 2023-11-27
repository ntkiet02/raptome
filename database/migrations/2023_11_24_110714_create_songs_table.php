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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('typebeats_id')->constrained('type_beats');
            $table->foreignId('musicians_id')->constrained('musicians');
            $table->string('songname');
            $table->string('songname_slug');
            $table->integer('time');
            $table->string('recording')->nullable();
            $table->text('lyric')->nullable();;
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
