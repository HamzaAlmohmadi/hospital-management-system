<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiptAccount extends Model
{
    
    // مودل سندات  القبض  
    
    protected $guarded=[];
    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
