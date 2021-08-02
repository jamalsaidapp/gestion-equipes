require('./bootstrap');
// window.Vue = require('vue').default;
import Vue from 'vue';

Vue.config.productionTip = false;

// ANT JS
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';

Vue.use(Antd);

import {Form} from 'vform'

window.Form = Form
import {HasError} from 'vform/src/components/bootstrap5'

Vue.component(HasError.name, HasError)

// let user = document.getElementsByTagName('meta')['auth']?.content ;
// Vue.prototype.$user = user ? JSON.parse(user) : undefined;

import getUser from './user'
Vue.prototype.$getUser = getUser;
import Vuex from 'vuex'
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        user: []
    },
    mutations: {
        getUserData(state, data) {
            state.user.push(data)
            // Vue.set(state.user, data.id, data)
            // state.user = Object.values(data)
        }
    }
})


//Auth
Vue.component('Login', require('./components/Auth/login').default);
//Layouts-Extends
Vue.component('Layouts', require('./components/Layouts/Mise_en_page').default);
Vue.component('Sidebar', require('./components/Layouts/Extends/SideBar').default);
Vue.component('Navbar', require('./components/Layouts/Extends/NavBar').default);
Vue.component('Content', require('./components/Layouts/Extends/Content').default);
Vue.component('Footer', require('./components/Layouts/Extends/Footer').default);


const app = new Vue({
    el: '#app',
    store: store,
    mounted(){
        this.$getUser().then((res)=>{
            this.$store.commit('getUserData',res)
            console.log('from the app ',this.$store.state.user)
        })
    }
});
