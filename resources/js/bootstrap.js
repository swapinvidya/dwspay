window._ = require('lodash');

try {
    require('overlayscrollbars');
    require('bootstrap');
    require('../../vendor/almasaeed2010/adminlte/dist/js/adminlte');
} catch (e) {}



/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */



// import EchoLibrary from "laravel-echo";
// import Pusher from "pusher-js";

// window.Echo = new EchoLibrary({
//     broadcaster: 'pusher',
//     key: "15dc5d4d02e813289a71"
// });

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
 
window.Pusher = Pusher;
 
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: "15dc5d4d02e813289a71",
    cluster: "ap2",
    forceTLS: true
});


