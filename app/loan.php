<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = ['employee_id', 'type', 'amount'];

    public function employee(){
      return $this->belongsTo(Employee::class, 'employee_id');
    }
}
