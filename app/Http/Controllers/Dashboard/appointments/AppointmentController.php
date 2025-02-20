<?php

namespace App\Http\Controllers\Dashboard\appointments;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Reservation;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){

        $appointments = Reservation::where('status','في الانتضار')->get();
        return view('Dashboard.appointments.index',compact('appointments'));
    }

    public function indexapproval(){

        $appointments = Reservation::where('status','تم التأكيد')->get();
        return view('Dashboard.appointments.indexapproval',compact('appointments'));
    }

    public function approval(Request $request,$id){

        // dd($id);

        $appointment = Reservation::findorFail($id);
        $appointment->update([
            'status'=>'تم التأكيد',
            'reservation'=>$request->appointment
        ]);



    //     // send email
    //     Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment->name,$appointment->appointment));

    //     // send message mob
    //     $receiverNumber = $appointment->phone;
    //     $message = "عزيزي المريض" . " " . $appointment->name . " " . "تم حجز موعدك بتاريخ " . $appointment->appointment;

    //     $account_sid = getenv("TWILIO_SID");
    //     $auth_token = getenv("TWILIO_TOKEN");
    //     $twilio_number = getenv("TWILIO_FROM");
    //     $client = new Client($account_sid, $auth_token);
    //     $client->messages->create($receiverNumber,[
    //         'from' => $twilio_number,
    //         'body' => $message
    //     ]);
    //     session()->flash('add');
    toastr()->success('تم تاكيد الموعد بنجاح ');
        return back();
    }
}
