<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{

	protected $fillable = [
        'code', 'name', 'image','category_id','price','active',
    ];

    public function category(){
    	return $this->belongsTo(category::class, 'category_id');
    }
}
