<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Patient extends Authenticatable
{
    // مودل    حسابات الامريض 
    
    use Translatable,Notifiable,HasFactory;

    public $translatedAttributes = ['name','Address'];
    public $fillable= ['email','password','Date_Birth','Phone','Gender','Blood_Group'];


    public function patient_account()
    {
        return $this->hasMany(PatientAccount::class, 'patient_id');
    }



     protected $hidden = [
         'password',
         'remember_token',
     ];
 

     protected function casts(): array
     {
         return [
             'email_verified_at' => 'datetime',
             'password' => 'hashed',
         ];
     }
}
