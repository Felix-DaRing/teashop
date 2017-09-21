<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

 	protected $fillable = [
        'code','name',
    ];

   public function menu(){
   	return $this->hasMany(menu::class, 'menu_id');
   }
   
   public function purchase(){
    	return $this->hasMany(purchase::class, 'purchase_id');
    }
}
