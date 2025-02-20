<?php

use App\Http\Controllers\Dashboard_Doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_Doctor\LaboratorieController;
use App\Http\Controllers\Dashboard_Doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_Doctor\RayController;
use App\Http\Controllers\doctor\InvoiceController;
use App\Livewire\Chat\Createchat;
use App\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...



    //################################ dashboard admin ########################################
        Route::get('/dashboard/doctor', function () {
            return view('Dashboard.doctor.dashboard'); 
        })->middleware(['auth:doctor'])->name('dashboard.doctor');
    //################################ end dashboard admin #####################################











    Route::middleware(['auth:doctor'])->group(function () 
    {

        Route::prefix('doctor')->group(function () {


            //############################# completedInvoices route ##########################################
            Route::get('completedInvoices',[ InvoiceController::class, 'completedInvoices'])->name('completedInvoices');
            //############################# end  completedInvoices  route ######################################


            //############################# completedInvoices route ##########################################
            Route::get('reviewInvoices',[ InvoiceController::class, 'reviewInvoices'])->name('reviewInvoices');
            //############################# end  completedInvoices  route ######################################

            //############################# invoices route ##########################################
            Route::resource('invoices', InvoiceController::class);
            //############################# end invoices route ######################################

            //############################# Diagnostics route ##########################################

            Route::resource('Diagnostics', DiagnosticController::class);

            //############################# end Diagnostics route ######################################

            //############################# review_invoices route ##########################################
            Route::post('add_review', [DiagnosticController::class,'addReview'])->name('add_review');
            //############################# end invoices route #############################################

            //############################# rays route ##########################################

            Route::resource('rays', RayController::class);

            //############################# end rays route ######################################


            //############################# Laboratories route ##########################################
            Route::resource('Laboratories', LaboratorieController::class);

            Route::get('show_laboratorie/{id}', [InvoiceController::class,'showLaboratorie'])->name('show.laboratorie');

            //############################# end Laboratories route ######################################


            
            //############################# rays route ##########################################

            Route::get('patient_details/{id}', [PatientDetailsController::class,'index'])->name('patient_details');

            //############################# end rays route ######################################

            



        });



        Route::get('/404', function () {
            return view('Dashboard.404');
        })->name('404');
        

    });




        require __DIR__.'/auth.php';
});





            //############################# Chat route ##########################################
            Route::get('list/patients',Createchat::class)->middleware(['auth:doctor'])->name('list.patients');
            Route::get('chat/patients',Main::class)->middleware(['auth:doctor'])->name('chat.patients');
            //############################# end Chat route ######################################