<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{

    use HasFactory,Translatable,Notifiable;
    

    public $translatedAttributes = ['name',];
    public $fillable= ['email','email_verified_at','password','phone','name','section_id','status'];

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
















    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // One To One get section of Doctor
    public function section()
    {
        return $this->belongsTo(Section::class);
    }


    // many To many get appointment of Doctor
    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }
}




