<div>
    <div class="main-chat-list" id="ChatList">

        @foreach ($conversations as $conversation)
            <div class="media new"
            
                wire:click="chatUserSelected({{ $conversation }},'{{ $this->getUsers($conversation, $name = 'id') }}')">

                <img src="{{ asset('Dashboard/img/doctor_default.png') }}" height="50px" width="50px" alt="">
                <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{ $this->getUsers($conversation, $name = 'name') }}</span>
                        <span>{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                        {{-- <span>{{ $conversation->sender_email}}</span> --}}
                    </div>
                    <p>{{ $conversation->messages->last()->body }}</p>
                </div>
            </div>
        @endforeach
    </div><!-- main-chat-list -->
</div>




{{-- 
 <div>
    <div class="main-chat-list" id="ChatList">
        @foreach ($conversations as $conversation)
            <div class="media new"
                 wire:click="chatUserSelected({{ $conversation }}, '{{ $this->getUsers($conversation, 'id') }}')">
               
                 <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{ $this->getUsers($conversation, 'name') }}</span>
                        <span>{{ $conversation->messages->last()->created_at->shortAbsoluteDiffForHumans() }}</span>
                    </div>
                    <p>{{ $conversation->messages->last()->body }}</p>
                </div>
            </div>
        @endforeach
    </div><!-- main-chat-list -->
</div> --}}
