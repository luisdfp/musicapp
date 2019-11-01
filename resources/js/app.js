import './bootstrap';
import Vue from 'vue';
import MusicApp from "./MusicApp";
import router from './router';

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    router,
    render: h => h(MusicApp)
});
