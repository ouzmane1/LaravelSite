<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    // la methode index permet d'afficher la liste des categories à partir de la table categorie
    public function index()
    {
        $categories = Category::all(); //all() c'est une methode Eloquent qui correspond à select* from categorie
        return view("adminsites.categorie.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminsites.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Controle sur les champs
        $request->validate([
            'name'=>'required|max:100|unique:categories'
            // champ obligatoire, max = 100 et champ existant
        ]);
        // Insertion dans la base de donnees
        Category::create($request->all());

        return redirect()->route('categories.index')->with("message", "Nouvelle categorie ajoutée avec succees");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('adminsites.categorie.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Controle sur les champs
        $request->validate([
            'name'=>'required|max:100|unique:categories'
            // champ obligatoire, max = 100 et champ existant
        ]);
        // Mise a jour avec Eloquent
        $category->update($request->all());
        return redirect()->route('categories.index')->with("message", "Categorie modifiée avec succees");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with("message", "Une categorie est supprimée avec succees");
    }
}
