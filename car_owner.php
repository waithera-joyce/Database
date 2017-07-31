<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car_owner extends Model
{
     protected $fillable =['Owner_id','No_plate','Employee_Id','Issue_date','Submit_date'];

      public function employee() {
     	return $this->hasOne(employee::class, 'Employee_Id');
     }
}
