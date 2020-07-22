<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends  Model
{
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id','name','father_name','mother_name','roll_no','class','phone_no','dob','profile_pic','address'];

     
    
}
