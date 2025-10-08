<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tournees', function (Blueprint $table) {
        $table->id();
        $table->string('nom'); // Nom de la tournée
        $table->date('date_tournee'); // Date de la tournée
        $table->time('heure_depart')->nullable(); // Heure de départ
        $table->string('statut')->default('planifiée'); // planifiée, en cours, terminée
        $table->text('remarques')->nullable(); // Notes supplémentaires
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournees');
    }
};
