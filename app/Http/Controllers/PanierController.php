<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier(){
        // session()->put('panier',[]);

        // on recupere les produits à partir de la session
        $products=[];
        if(session()->has('panier')){
            $products = session()->get("panier");
        }
        // $panierCount = count($products);
        return view("websites.panier", compact('products'));
    }

    public function supProPanier($indice){

        $products = session()->get("panier");
        //supprime un produit du tableau
        unset($products[$indice]);

        session()->put("panier",$products);
        return redirect()->back()->with('message', 'produit supprimé avec success' );
    }

    public function viderPanier(){
        session()->put('panier',[]);
        return redirect()->back();
    }

    public function addToCard(Request $request){
        // recuperer les infos du produit
        $id=$request->id;
        $name=$request->name;
        $price=$request->price;
        $photo1=$request->photo1;
        $qte=$request->qte;


        // on verifie la variable panier existe dans la session
        if(!session()->has("panier")){
            session()->put("panier",[]);
        }
         // ajouter un produit dans la session
        session()->push("panier",["id"=>$id,"name"=>$name,"price"=>$price,"photo1"=>$photo1,"qte"=>$qte]);

        return redirect()->back()->with("success","un nouveau produit est ajoutée dans le panier");
    }


}
