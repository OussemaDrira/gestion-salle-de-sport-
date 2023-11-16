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
        Schema::create('cours_entreneur', function (Blueprint $table) {
         
            $table->bigInteger('cour_entrenements_id')->unsigned();
            $table->bigInteger('entreneurs_id')->unsigned();
            $table->timestamps();
            $table->foreign('cour_entrenements_id')->references('id')->on('cour_entrenements');
            $table->foreign('entreneurs_id')->references('id')->on('entreneurs');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_entreneur');
    }
};
