<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable =['Employee_Id','Name','Account_no','Dpt_Id','Serial_no','No_plate','Start_date','Stop_date','Phone_no','Addres','Gender','Age'];


    public function department()
    {
    	return $this->belongsTo(department::class, 'Dpt_Id');
    }
    public function equipment_owner()
    {
    	return $this->hasMany(equipment_owner::class,'Serial_no');
    }
    public function car_owner()
    {
    	return $this->hasMany(car_owner::class,'No_plate');
    }
    public function bank()
    {
    	return $this->hasMany(bank::class'bank_id');
    }
}
