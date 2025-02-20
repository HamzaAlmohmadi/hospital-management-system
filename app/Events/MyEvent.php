<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MyEvent implements ShouldBroadcast
{ 
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $invoice_id;
    public $patient_id;


    public function __construct($data)
    {
        $this->patient_id = $data ['patient_id'];
        $this->invoice_id = $data ['invoice_id'];
    }


    public function broadcastOn()
    {
        return ['my-channel'];
    }
  

    public function broadcastAs()
    {
        return 'my-event';
    }



}









// <?php

// namespace App\Events;

// use Illuminate\Broadcasting\Channel;
// use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
// use Illuminate\Foundation\Events\Dispatchable;
// use Illuminate\Queue\SerializesModels;
// use Illuminate\Support\Facades\Log;

// class MyEvent implements ShouldBroadcast
// {
//     use Dispatchable, InteractsWithSockets, SerializesModels;

//     public $message;

//     public function __construct($message)
//     {
//         $this->message = $message;
//         Log::info("MyEvent initialized with message: $message"); // تسجيل الرسالة
//     }

//     public function broadcastOn()
//     {
//         return new Channel('my-channel');
//     }

//     public function broadcastAs()
//     {
//         return 'my-event';
//     }
// }
