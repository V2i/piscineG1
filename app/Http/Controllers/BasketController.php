<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panier;
use App\Produit;
use App\Contenir;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function afficherPanier(){
    	$panier = Auth::user()->basket;
    	return view('basket', ['panier'=>$panier]);
    }

    public function ajouterElement($CodeProduit){
		$produit=Produit::find($CodeProduit);
		$contenir = new Contenir();
		$contenir->CodeProduit = $produit->CodeProduit;
		$contenir->Quantite +=  1;
		return view('produit',['produit'=>$produit]);
	}
}
