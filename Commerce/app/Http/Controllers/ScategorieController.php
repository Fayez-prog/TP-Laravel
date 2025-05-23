<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use Illuminate\Http\Request;

class ScategorieController extends Controller
{
    public function index()
    {
        try {
            $scategories = Scategorie::with('categorie')->get();
            return response()->json($scategories, 200);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible {$e->getMessage()}");
        }
    }

    public function store(Request $request)
    {
        try {
            $scategorie = new Scategorie([
                "nomscategorie" => $request->input("nomscategorie"),
                "imagescategorie" => $request->input("imagescategorie"),
                "categorieID" => $request->input("categorieID")
            ]);
            $scategorie->save();
            return response()->json($scategorie);
        } catch (\Exception $e) {
            return response()->json("Insertion impossible ({$e->getMessage()})");
        }
    }

    public function show($id)
    {
        try {
            $scategorie = Scategorie::with('categorie')->findOrFail($id);
            return response()->json($scategorie);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible ({$e->getMessage()})");
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $scategorie = Scategorie::findOrFail($id);
            $scategorie->update($request->all());
            return response()->json($scategorie);
        } catch (\Exception $e) {
            return response()->json("Modification impossible ({$e->getMessage()})");
        }
    }

    public function destroy($id)
    {
        try {
            $scategorie = Scategorie::findOrFail($id);
            $scategorie->delete();
            return response()->json("Sous catégorie supprimée avec succès");
        } catch (\Exception $e) {
            return response()->json("Suppression impossible ({$e->getMessage()})");
        }
    }

    public function showScategorieByCAT($idcat)
    {
        try {
            $scategories = Scategorie::where('categorieID', $idcat)
                                   ->with('categorie')
                                   ->get();
            return response()->json($scategories);
        } catch (\Exception $e) {
            return response()->json("Sélection impossible ({$e->getMessage()})");
        }
    }
}