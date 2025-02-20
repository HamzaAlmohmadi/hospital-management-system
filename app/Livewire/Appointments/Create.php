<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Section;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor ;
    public $section;

    // #[Validate('required', message: 'Please provide a post name')]
    public $name;
    public $email;
    public $phone;
    public $notes;
    // public $message= false;
    public $validated = false;

    public function mount(){

      $this->sections = Section::get();
      $this->doctors = collect();

    }

    public function render()
    {
        return view('livewire.appointments.create',
            [
                'sections' => Section::get()
            ]);
    }

    public function updatedSection($section_id){

       $this->doctors = Doctor::where('section_id',$section_id)->get();
    }

    public function store(){

        // dd($this->doctor);

        $this->validated = true; 
        $validated= $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'doctor'=>'required',
            'section'=>'required',
        ]);
        // dd($validated);

        $appointments = new Reservation($validated);
        $appointments->doctor_id = $this->doctor;
        $appointments->section_id = $this->section;
        $appointments->name = $this->name;
        $appointments->email = $this->email;
        $appointments->phone = $this->phone;
        $appointments->notes = $this->notes;
        $appointments->save();
        $this->reset(['name','email','phone','notes','doctor','section']);
        $this->validated = false; 
        $this->doctors = collect();
        toastr()->success('تم ارسال تفاصيل الحجز الي المستشفي وسيتم ارسال معلومات الموعد عبر الهاتف والبريد الالكتروني');
   
    }
}
