<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';
    public $timestamps = false;
    protected $primaryKey = 'NumPanier';

    public function contenir() {
        return $this->hasMany('App\Contenir', 'NumClient', 'NumPanier');
    }

    public function products(){
    	return $this->belongsToMany('App\Produit', 'contenir', 'NumPanier', 'CodeProduit');
    }
}