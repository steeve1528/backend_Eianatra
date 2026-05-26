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
        Schema::create('plats', function (Blueprint $table) {
            $table->id(); // Identifiant unique du plat
            $table->string('nom'); // Nom du plat (ex: Compose Tsena)
            $table->text('description')->nullable(); // Ingrédients ou détails
            $table->decimal('prix', 10, 2); // Prix du plat (en Ariary)
            $table->boolean('disponible')->default(true); // Gérer les ruptures de stock
            $table->timestamps(); // Date de création et mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
