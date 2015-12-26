var Vue = require('vue');
var VueResource = require('vue-resource');

Vue.use(VueResource);

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

import Alert from './components/Alert.vue';
import Engines from './components/Engines.vue';
import Messenger from './components/Messenger.vue';
import Notificator from './components/Notificator.vue';
import Parts from './components/Parts.vue';
import Projects from './components/widgets/Projects.vue';

Vue.filter('percentage', function(value, decimals) {
    if(!value) {
        value = 0;
    }

    if(!decimals) {
        decimals = 0;
    }

    value = value * 100;
    value = Math.round(value * Math.pow(10, decimals)) / Math.pow(10, decimals);
    value = value + '%';
    return value;
});

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
        Engines,
        Messenger,
        Notificator,
        Parts,
        Projects
    },
    ready() {
        //alert('Ready to go');
    }
});

