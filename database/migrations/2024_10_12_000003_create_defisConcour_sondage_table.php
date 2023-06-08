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
        Schema::create('defisConcour_sondage', function (Blueprint $table) {
            $table->bigIncrements('id');

            // clés étrangères
            $table->unsignedBigInteger('sondage_id');
            $table->foreign('sondage_id')->references('id')->on('sondages');
            $table->unsignedBigInteger('defisConcour_id');
            $table->foreign('defisConcour_id')->references('id')->on('defisConcours');

            // informations réponse
            $table->string('reponse');

            // table créé à et modifié à
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses');
    }
};