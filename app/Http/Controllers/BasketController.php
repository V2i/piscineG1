<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panier;
use App\Produit;

class BasketController extends Controller
{
    public function afficherPanier(){
    	return view('basket');
    }

    public function ajouterElement($CodeProduit){
		$produit=Produit::find($CodeProduit);
		return view('basket', ['produit'=>$produit]);
	}
}
