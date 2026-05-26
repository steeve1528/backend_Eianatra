<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    // Fonction appelée par l'application Android
    public function getUserCommandes($userId)
    {
        $commandes = Commande::where('user_id', $userId)->get();
        return response()->json($commandes);
    }

    // Fonction pour créer une commande
    public function store(Request $request)
    {
        // Validation basique
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        $commande = Commande::create([
            'user_id' => $validated['user_id'],
            'total' => $validated['total'],
            'statut' => 'en attente',
        ]);

        return response()->json($commande, 201);
    }
}
