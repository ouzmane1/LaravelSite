<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class WebsiteController extends Controller
{
    public function Accueil(){
        return view("websites.accueil");
    }


    public function About(){
        return view("websites.presentation");
    }

    public function Produit(){
        // dd(session()->get("panier"));
        // $q = request()->input("q");
        // $products = Product::where('name', 'like',"$q");
        $products = Product::all();
        $productCount = $products->count();
        return view("websites.produit",compact("products","productCount"));
    }

    public function search(Request $request){
        $search = $request->search;

        $products = Product::where(function($query) use ($search){

            $query->where('name', 'like', "%$search%");
        })
        ->get();
        return view('websites.produit', compact('products', 'search'));
    }

    public function Contact(){
        return view("websites.contact");
    }

    public function Checkout(){
        $products = session()->get("panier");
        return view("websites.checkout",compact('products'));
    }

    // public function DetailProduit(){
    //     $products= Product::all();
    //     return view('websites.product-detail',compact("products"));
    // }

    public function Inscription(){
        return view('websites.register');
    }

    public function Connecter(){
        return view('websites.login');
    }
    public function Account(){
        return view('websites.account');
    }

    //si votre methode reçoit des parametres à partir d'un formulaire
    //Vous devez passer un parametre de la fonction un objet de type Request
    public function save(Request $request){

        //dd($request); //dd() pour afficher le contenu des variables

//passer tous les parametres reçu à partir du formulaire vers la vue

//comment faire passer un ou plusieurs parametres vers la vue ?
//avec la methode conpact("nomvar1","nomvar2")
        return view("websites.save",compact("request"));
    }
}
