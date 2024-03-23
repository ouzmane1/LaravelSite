<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); //all() c'est une methode Eloquent qui correspond à select* from categorie
        return view("adminsites.product.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('adminsites.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Controle sur les champs
        $request->validate([
            'name'=>'required|max:100|unique:categories', // champ obligatoire, max = 100 et champ existant
            'description'=>'required',
            'price'=>'numeric|required',
            'photo1'=>'image|required|mimes:jpeg,png,jpg,gif|max:2048',
            'photo2'=>'image|required|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id'=>'required|numeric'
        ]);

        //On stock les valeurs dans $inputs
        $inputs=$request->all();
        // Traitement des fichiers photos

        if($photo1=$request->file("photo1")){
            $newfile1=time().".".$photo1->getClientOriginalExtension();
            $photo1->move('images/products/',$newfile1);
            $inputs['photo1']=$newfile1;
        }

        if($photo2=$request->file("photo2")){
            $newfile2=time().time().".".$photo2->getClientOriginalExtension();
            $photo2->move('images/products/',$newfile2);
            $inputs['photo2']=$newfile2;
        }

        // Insertion dans la base de donnees
        Product::create($inputs);

        return redirect()->route('products.index')->with("message", "Produit ajouté avec succees");

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('adminsites.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Controle sur les champs
        $request->validate([
            'name'=>'required|max:100', // champ obligatoire, max = 100 et champ existant
            'description'=>'required',
            'price'=>'numeric',
            'photo1'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo2'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id'=>'required'
        ]);

        $inputs=$request->all();
        // Traitement des fichiers photos

        if($photo1=$request->file("photo1")){
            $newfile1=time().".".$photo1->getClientOriginalExtension();
            //ecrase l'ancien photo
            if(file_exists("images/products/".$product->photo1)){
                unlink('images/products/'.$product->photo1);
            }
            $photo1->move('images/products/',$newfile1);
            $inputs['photo1']=$newfile1;
        }

        if($photo2=$request->file("photo2")){
            $newfile2=time().time().".".$photo2->getClientOriginalExtension();
            //ecrase l'ancien photo
            if(file_exists("images/products/".$product->photo2)){
                unlink('images/products/'.$product->photo2);
            }
            $photo2->move('images/products/',$newfile2);
            $inputs['photo2']=$newfile2;
        }

        // Insertion dans la base de donnees
        $product->update($inputs);

        return redirect()->route('products.index')->with("message", "Produit modifié avec succees");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(file_exists("images/products/".$product->photo1)){
            unlink('images/products/'.$product->photo1);
        }
        if(file_exists("images/products/".$product->photo2)){
            unlink('images/products/'.$product->photo2);
        }
        $product->delete();
        return redirect()->route('products.index')->with("message", "Produit supprimé avec succees");;

    }
}
