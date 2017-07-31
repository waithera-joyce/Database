<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
     protected $fillable =['Bank_Id','Employee_Id','Account_no','Name'];

     public function employee(){
     	return $this->hasmany(employee::class, 'Employee_Id')
     }
}
