<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'CodeProduit';
    public $timestamps = false;
}
