var Vue = require('vue');
var VueResource = require('vue-resource');

Vue.use(VueResource);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

import Alert from './components/Alert.vue';
import Notificator from './components/Notificator.vue';
import Projects from './components/widgets/Projects.vue';

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
        Notificator,
        Projects
    },
    ready() {
        //alert('Ready to go');
    }
});

