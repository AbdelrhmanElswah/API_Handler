/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './route';
import storeData from './store';
import MainApp from './components/MainApp';


Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode:'history'
});

const store = new Vuex.Store(storeData);
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = new Vue ({
    el:'#app',
    router,
    store,
    components:{
        MainApp
    }
});

