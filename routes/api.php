<?php

use App\Http\Controllers\Api\Appointments\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/index', [ReservationController::class, 'index'])->name('index');
// جلب الأقسام
Route::get('/sections', [ReservationController::class, 'getSections']);

// جلب الأطباء بناءً على القسم
Route::get('/sections/{section_id}/doctors', [ReservationController::class, 'getDoctorsBySection']);



// إنشاء حجز جديد
Route::post('/reservations', [ReservationController::class, 'createReservation']);