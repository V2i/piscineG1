<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenir extends Model
{
    protected $table = 'contenir';
    public $timestamps = false;

    public function panier(){
    	return $this->hasOne('App\Panier');
    }
}
