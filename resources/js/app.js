require('./bootstrap');
window.Vue = require('vue').default;
Vue.config.productionTip = false;

// ANT JS
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
Vue.use(Antd);


Vue.component('Login', require('./components/Auth/login').default);
// Vue.component('Layouts', require('./components/Layouts/Mise_en_page').default);


const app = new Vue({
    el: '#app',
});
