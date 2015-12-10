var Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

import Alert from './components/Alert.vue';
import Notificator from './components/Notificator.vue';

new Vue({
    el: 'body',
    http: {
        root: '/root',
        headers: {
            Authorization: 'Basic YXBpOnBhc3N3b3Jk'
        }
    },
    components: {
        Alert,
        Notificator
    },
    ready() {
        //alert('Ready to go');
    }
});

