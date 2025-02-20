<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chatlist extends Component   
{

    public $conversations;
    public $auth_email;
    public $receviverUser;
    public $selected_conversation;
    protected $listeners = ['chatUserSelected', 'refresh' => '$refresh'];

    public function mount()
    {
        $this->auth_email = Auth::user()->email;
    }


    // public function getUsers(Conversation $conversation, $request)
    // {
    //     // dd($conversation->receiver_email);
    //     if ($conversation->sender_email == $this->auth_email) {
    //         //  dd($conversation->receiver_email);
    //         $this->receviverUser = Doctor::firstWhere('email', $conversation->receiver_email);
    //     } else {

    //         $this->receviverUser = Patient::firstWhere('email', $conversation->sender_email);
    //         // dd($conversation->sender_email);
    //     }
    //     // if (isset($request)) {
    //     //     return $this->receviverUser->$request;
    //     // }
    
    //     if ($this->receviverUser) {
    //         return $this->receviverUser->$request ?? null; // إرجاع null إذا لم توجد الخاصية
    //     }
    
    //     return "User not found"; // أو أي رسالة خطأ مناسبة
    // }
    




    public function getUsers(Conversation $conversation, $request)
    {

        if ($conversation->sender_email == $this->auth_email) {
            $this->receviverUser = Doctor::firstWhere('email', $conversation->receiver_email) ?? Patient::firstWhere('email', $conversation->receiver_email);
            // $this->receviverUser = Doctor::find($receiver_id) ?? Patient::find($receiver_id);
        } else {
            $this->receviverUser = Doctor::firstWhere('email', $conversation->sender_email) ?? Patient::firstWhere('email', $conversation->sender_email);
        //     $this->receviverUser = Doctor::firstWhere('email', $conversation->sender_email);
        }
    
        if ($this->receviverUser) {
            return $this->receviverUser->$request ?? null; // إرجاع null إذا لم توجد الخاصية
        }
    
        return "User not found"; // أو أي رسالة خطأ مناسبة
    }
    



    public function chatUserSelected(Conversation $conversation, $receiver_id)
    {
        // الخطا من هنا من id حق المستلم

        // dd( $receiver_id);
        $this->selected_conversation = $conversation;
        $this->receviverUser = Doctor::find($receiver_id);
        // $this->receviverUser = Doctor::find($receiver_id) ?? Patient::find($receiver_id);
      
    
        if (Auth::guard('patient')->check()) {
            // $this->dispatch('chat.chatbox', 'load_conversationDoctor', $this->selected_conversation, $this->receviverUser);
        //     $this->emitTo('chat.send-message', 'updateMessage', $this->selected_conversation, $this->receviverUser);
        // } else {
        //     $this->emitTo('chat.chatbox', 'load_conversationPatient', $this->selected_conversation, $this->receviverUser);
        //     $this->emitTo('chat.send-message', 'updateMessage2', $this->selected_conversation, $this->receviverUser);
        // }

        $this->dispatch('load_conversationDoctor', conversation: $this->selected_conversation, receiverUser: $this->receviverUser)
        ->to('chat.chatbox');
    
            $this->dispatch('updateMessage', conversation: $this->selected_conversation, receiverUser: $this->receviverUser)
            ->to('chat.send-message');
        } 
        else
        {
            $this->dispatch('load_conversationPatient', conversation: $this->selected_conversation, receiverUser: $this->receviverUser)
            ->to('chat.chatbox');
    
            $this->dispatch('updateMessage2', conversation: $this->selected_conversation, receiverUser: $this->receviverUser)
            ->to('chat.send-message');
        }
    

    }

    
    public function render()
    {


        // $this->conversations = Conversation::where('sender_email', $this->auth_email)->orwhere('receiver_email', $this->auth_email)->get();

        $this->conversations = Conversation::where('sender_email', $this->auth_email)->orwhere('receiver_email', $this->auth_email)
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('livewire.chat.chatlist');
    }
}
