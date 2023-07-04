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
        Schema::create('detail_culture', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah_culture');
            $table->text('makna_culture');
            $table->text('ciri_culture');
            $table->string('video_culture');
            $table->string('audio_culture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_cultures');
    }
};
