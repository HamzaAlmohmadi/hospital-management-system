import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({

    broadcaster: 'pusher',
    key: '09a59ed2e58763155ba0',
    cluster: 'mt1',
    forceTLS: true,

});


console.log('Echo Loaded:', window.Echo);




