<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name'];
    public $fillable= ['name'];


    // public $fillable= ['name','email','phone','notes','doctor_id','section_id','type','appointment'];


}
