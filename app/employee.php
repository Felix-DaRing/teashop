<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
      'name', 'father', 'nrc', 'dob', 'marry','role', 'sex', 'ward', 'city', 'state', 'phone', 'salary', 'joindate',
    ];
    public function loan(){
    	return $this->hasMany(Loan::class, 'loan_id');
    }
}
