<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    //controller pour la page produit
    public function afficherProduit($CodeProduit){
    	$produit=Produit::find($CodeProduit);
    	return view('produit',['produit'=>$produit]);
    }
}
