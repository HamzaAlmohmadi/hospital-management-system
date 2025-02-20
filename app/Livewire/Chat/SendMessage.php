<?php

namespace App\Livewire\Chat;

use App\Events\MassageSent;
use App\Events\MassageSent2;
use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SendMessage extends Component
{



    public $body;
    public $selected_conversation;
    public $receviverUser;
    public $auth_email;
    public $sender;
    public $createdMessage;
    protected $listeners = ['updateMessage','dispatchSentMassage','updateMessage2'];

    public function mount()
    {

        if (Auth::guard('patient')->check()) {
            $this->auth_email = Auth::guard('patient')->user()->email;
            $this->sender = Auth::guard('patient')->user();
        } else {
            $this->auth_email = Auth::guard('doctor')->user()->email;
            $this->sender = Auth::guard('doctor')->user();
        }
    }

    public function updateMessage(Conversation $conversation, Doctor $receiverUser)
    {
        $this->selected_conversation = $conversation;
        
        $this->receviverUser = $receiverUser;
        // dd($this->receviverUser->email);
    }

    public function updateMessage2(Conversation $conversation, Patient $receiverUser)
    {
        $this->selected_conversation = $conversation;
        $this->receviverUser = $receiverUser;

    }

    public function sendMessage()
    {
        // dd()
        if ($this->body == null) {
            return null;
        }

        // dd( $this->receviverUser->email);
        $this->createdMessage = Message::create([
            'conversation_id' => $this->selected_conversation->id,
            'sender_email' => $this->auth_email,
            'receiver_email' => $this->receviverUser->email,
            'body' => $this->body,
        ]);
        // $this->selected_conversation->last_time_message = $this->createdMessage->created_at;
        // $this->selected_conversation->save();
        // $this->reset('body');
        // $this->emitTo('chat.chatbox', 'pushMessage', $this->createdMessage->id);
        // $this->emitTo('chat.chatlist', 'refresh');
        // $this->emitSelf('dispatchSentMassage');

        $this->selected_conversation->last_time_message = $this->createdMessage->created_at;
        $this->selected_conversation->save();
        $this->reset('body');
        $this->dispatch('pushMessage', messageId: $this->createdMessage->id)
            ->to('chat.chatbox');
        $this->dispatch('refresh')
            ->to('chat.chatlist');
        $this->dispatch('dispatchSentMassage')->self();
        
    }
    public function dispatchSentMassage()
    {
        if (Auth::guard('patient')->check()) {
            broadcast(new MassageSent(
                $this->sender,
                $this->createdMessage,
                $this->selected_conversation,
                $this->receviverUser
            ));
        }
        else{
            broadcast(new MassageSent2(
                $this->sender,
                $this->createdMessage,
                $this->selected_conversation,
                $this->receviverUser
            ));
        }

    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}






// namespace App\Livewire\Chat;

// use App\Models\Conversation;
// use App\Models\Doctor;
// use App\Models\Message;
// use App\Models\Patient;
// use Illuminate\Support\Facades\Auth;
// use Livewire\Component;

// class SendMessage extends Component
// {
//     public $body;
//     public $selected_conversation;
//     public $receviverUser;
//     public $auth_email;
//     public $sender;
//     public $createdMessage;
//     protected $listeners = ['updateMessage', 'dispatchSentMassage', 'updateMessage2'];

//     public function mount()
//     {
//         if (Auth::guard('patient')->check()) {
//             $this->auth_email = Auth::guard('patient')->user()->email;
//             $this->sender = Auth::guard('patient')->user();
//         } else {
//             $this->auth_email = Auth::guard('doctor')->user()->email;
//             $this->sender = Auth::guard('doctor')->user();
//         }
//     }

//     public function updateMessage(Conversation $conversation, Doctor $receiver)
//     {
//         $this->selected_conversation = $conversation;
//         $this->receviverUser = $receiver;
//     }

//     public function updateMessage2(Conversation $conversation, Patient $receiver)
//     {
//         $this->selected_conversation = $conversation;
//         $this->receviverUser = $receiver;
//     }

//     public function sendMessage()
//     {
//         if ($this->body == null) {
//             return null;
//         }

//         // التحقق من وجود بريد المستلم
//         if (!$this->receviverUser || !$this->receviverUser->email) {
//             session()->flash('error', 'Could not find receiver email.');
//             return;
//         }

//         $this->createdMessage = Message::create([
//             'conversation_id' => $this->selected_conversation->id,
//             'sender_email' => $this->auth_email,
//             'receiver_email' => $this->receviverUser->email,
//             'body' => $this->body,
//         ]);
//         $this->selected_conversation->last_time_message = $this->createdMessage->created_at;
//         $this->selected_conversation->save();
//         $this->reset('body');
//         $this->emitTo('chat.chatbox', 'pushMessage', $this->createdMessage->id);
//         $this->emitTo('chat.chatlist', 'refresh');
//         $this->emitSelf('dispatchSentMassage');
//     }

//     public function dispatchSentMassage()
//     {
//         if (Auth::guard('patient')->check()) {
//             broadcast(new MassageSent(
//                 $this->sender,
//                 $this->createdMessage,
//                 $this->selected_conversation,
//                 $this->receviverUser
//             ));
//         } else {
//             broadcast(new MassageSent2(
//                 $this->sender,
//                 $this->createdMessage,
//                 $this->selected_conversation,
//                 $this->receviverUser
//             ));
//         }
//     }

//     public function render()
//     {
//         return view('livewire.chat.send-message');
//     }
// }
