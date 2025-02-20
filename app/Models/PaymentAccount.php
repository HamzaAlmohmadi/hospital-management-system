<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    
    // مودل سند الصرف 
    public $guarded=[];
    
    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
