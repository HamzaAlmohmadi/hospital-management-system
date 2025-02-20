<?php

namespace App\Http\Controllers\Api\Appointments;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoctroResource;
use App\Http\Resources\SectionResource;
use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Section;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    
    /**
     * جلب جميع الأقسام
     */
    public function getSections()
    {
        $sections = Section::all(); // إرجاع الأعمدة المطلوبة فقط
        return  SectionResource::collection($sections);
    }

    /**
     * جلب الأطباء بناءً على القسم
     */

    public function getDoctorsBySection($section_id)
    {
 
        $doctors = Doctor::where('section_id', $section_id)->get();
        return DoctroResource::collection($doctors);

    }

    /**
     * إنشاء حجز جديد
     */
    public function createReservation(Request $request)
    {
        // التحقق من صحة البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'doctor_id' => 'required', // التحقق من وجود الطبيب
            'section_id' => 'required', // التحقق من وجود القسم
            'notes' => 'nullable|string',
        ]);

        // إنشاء الحجز
        $reservation = new Reservation();
        $reservation->name = $validated['name'];
        $reservation->email = $validated['email'];
        $reservation->phone = $validated['phone'];
        $reservation->doctor_id = $validated['doctor_id'];
        $reservation->section_id = $validated['section_id'];
        $reservation->notes = $validated['notes'] ?? null;
        $reservation->save();

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال الحجز بنجاح!',
            'data' => [
                'id' => $reservation->id,
                'name' => $reservation->name,
                'status' => 'في الانتضار',
                'doctor_name' => $reservation->doctor->name,
                'section_name' => $reservation->section->name,
                ]
                
        ], 201);
    }

}
