<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rawitem extends Model
{
    protected $fillable = [
    	'code', 'name',
    ];

    public function purchase(){
    	return $this->hasMany(purchase::class, 'purchase_id');
    }
}
