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
          Schema::create('info', function (Blueprint $table) {
            $table->id();
            $table->string('header1');
            $table->text('text1');
            $table->string('header2');
            $table->text('text2');
            $table->string('header3');
            $table->text('text3');
            $table->foreignId('cars_id')->constrained('cars')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info');
    }
};
