<?php

namespace App\Http\Controllers\Dashboard_Doctor;

use App\Http\Controllers\Controller;
use App\Models\Diagnostic;
use App\Models\Laboratorie;
use App\Models\Ray;
use Illuminate\Http\Request;

class PatientDetailsController extends Controller
{
    
    public function index($id){

        $data ['patient_records']       = Diagnostic::where('patient_id',$id)->get();
        $data ['patient_rays']          = Ray::where('patient_id',$id)->get();
        $data ['patient_Laboratories']  = Laboratorie::where('patient_id',$id)->get();


        return view('Dashboard.doctor.invoices.patient_details',$data);
    }
}
