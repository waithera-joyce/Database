<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment_owner extends Model
{
    
    protected $fillable =['Owner_id','Serial_no','Employee_Id','ISSUE_date','Submit_date'];

    public function department() {
     	return $this->hasOne(department::class, 'Dpt_id');
     }
     public function employee()
     {
     	return $this->hasOne(employee::class,'Account_no');
     }
}

