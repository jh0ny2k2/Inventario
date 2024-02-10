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
        Schema::create('localizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');
            $table->string('nombreEdificio');
            $table->string('direccionEdificio');
            $table->string('numeroSala');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localizaciones');
    }
};
