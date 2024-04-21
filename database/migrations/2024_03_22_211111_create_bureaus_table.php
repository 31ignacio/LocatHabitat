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
        Schema::create('bureaus', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->integer('nombreSalle');
            $table->string('climaVenilo');
            $table->string('wifi');
            $table->string('eau');
            $table->text('images');
            $table->string('toilette');
            $table->string('lieux');
            $table->string('bureauEquiper');
            $table->string('salleReunion');
            $table->float('prix');
            $table->text('emplacement');
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureaus');
    }
};
