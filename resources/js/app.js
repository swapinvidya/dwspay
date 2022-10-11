//require('./bootstrap');
require('sweetalert');
require( 'datatables.net' );
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
 
window.Pusher = Pusher;
 
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: "15dc5d4d02e813289a71",
    cluster: "ap2",
    forceTLS: true
});
