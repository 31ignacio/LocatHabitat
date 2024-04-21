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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->integer('nombreSalon');
            $table->integer('nombreChambre');
            $table->string('packing');
            $table->string('negociable');
            $table->string('climaVenilo');
            $table->string('canal+');
            $table->string('securite');
            $table->string('cuisine');
            $table->string('ptiDejeuner');
            $table->string('wifi');
            $table->string('entretien');
            $table->string('terasse');
            $table->string('meuble');
            $table->text('description')->nullable();
            $table->text('lieux');
            $table->text('images');
            $table->float('prix');
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
        Schema::dropIfExists('appartements');
    }
};
