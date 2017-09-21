<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class purchase extends Model
{
    protected $fillable = [
    	"rawitem_id", "category_id", "supplier_id", "buyer", "price", "quantity", "unit", "debt", "total",
    ];

    public function category(){
    	return $this->belongsTo(category::class, "category_id");
    }  

    public function rawitem(){
    	return $this->belongsTo(rawitem::class, "rawitem_id");
    }

    public function supplier(){
    	return $this->belongsTo(supplier::class, "supplier_id");
    }
}
