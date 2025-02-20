<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    // مودل تشخيص حالة المريض 
    use HasFactory;

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
