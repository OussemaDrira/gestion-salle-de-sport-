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
        Schema::create('entreneurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('prenom');
            $table->string('adresse');
            $table->integer('telephone');
            $table->string('sepecialite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreneurs');
    }
};
