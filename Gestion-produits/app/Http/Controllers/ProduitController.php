<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::with('categorie')->get();
        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data['photo'] = $name;
        }

        Produit::create($data);
        
        return redirect()->route('produits.index')
            ->with('success', 'Produit créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        $categories = Categorie::all();
        return view('produits.edit', compact('produit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne image si elle existe
            if ($produit->photo && file_exists(public_path('images/'.$produit->photo))) {
                unlink(public_path('images/'.$produit->photo));
            }
            
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data['photo'] = $name;
        }

        $produit->update($data);
        
        return redirect()->route('produits.index')
            ->with('success', 'Produit mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        // Supprimer l'image associée si elle existe
        if ($produit->photo && file_exists(public_path('images/'.$produit->photo))) {
            unlink(public_path('images/'.$produit->photo));
        }
        
        $produit->delete();
        
        return redirect()->route('produits.index')
            ->with('success', 'Produit supprimé avec succès');
    }
}
