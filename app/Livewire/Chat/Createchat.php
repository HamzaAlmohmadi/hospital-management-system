<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use Brian2694\Toastr\Facades\Toastr;

class Createchat extends Component
{
    public $users;
    public $auth_email;
    // public $receiver_email;

    public function mount()
    {
        $this->auth_email = Auth::user()->email;
    }



    public function createConversation($receiver_email)
    {
        // dd($receiver_email);
        $chek_Conversation = Conversation::chekConversation($this->auth_email, $receiver_email)->get();
        if ($chek_Conversation->isEmpty()) {
            DB::beginTransaction();
            try {
                // $createConversation
                $createConversation = Conversation::create([
                    'sender_email' => $this->auth_email,
                    'receiver_email' => $receiver_email,
                    'last_time_message' => null,
                ]);
                // create message
                Message::create([
                    'conversation_id' => $createConversation->id,
                    'sender_email' => $this->auth_email,
                    'receiver_email' => $receiver_email,
                    'body' => 'السلام عليكم',
                ]);
                DB::commit();
                $this->emitSelf('render');
            } catch (Exception $e) {
                DB::rollBack();
            }
        } else {
            toastr()->success('لقد تم انشاء محادثة بينكم من قبل ');
       
        }
    }


    public function render()
    {

        if(Auth::guard('patient')->check())
        {
    
            $this->users = Doctor::all();
        }
        else
        {
            $this->users = Patient::all();
    
        }
        // dd($this->users);

        return view('livewire.chat.createchat')->extends('Dashboard.layouts.master');
    }
}
