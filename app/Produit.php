<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'CodeProduit';
    public $timestamps = false;

    public function quantite(){
    	dd('text');
    	return $this->belongsTo('App\Contenir', 'CodeProduit', 'CodeProduit');
    }
}
