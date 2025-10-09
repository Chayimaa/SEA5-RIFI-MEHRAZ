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
        Schema::create('depots_tournee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournee_id')->constrained()->onDelete('cascade');
            $table->foreignId('depots_id')->constrained('depots')->onDelete('cascade');
            $table->integer('ordre')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depots_tournee');
    }
};
