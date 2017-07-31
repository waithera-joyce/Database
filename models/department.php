<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
     protected $fillable =['Dpt_Id','Name','Serial_no'];

     public function employees() {
     	return $this->hasMany(employee::class, 'Dpt_Id');
     }

     public function equipment_owner() {
     	return $this->hasOne(equipment_owner::class, 'Serial_no');
     }
}
