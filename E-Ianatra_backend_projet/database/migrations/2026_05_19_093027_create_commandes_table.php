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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id(); // Identifiant unique de la commande
            // Clé étrangère : lie la commande à un utilisateur (Relation One To Many)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->decimal('total', 10, 2); // Montant total de la commande
            $table->string('statut')->default('En attente'); // Suivi de la commande
            $table->timestamps(); // Heure de commande et mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
