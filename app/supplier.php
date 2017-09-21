<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable = [
    	"code", "name", "type", "phone", "address",
    ];

    public function purchase(){
    	return $this->hasMany(purchase::class, 'purchase_id');
    }
}
