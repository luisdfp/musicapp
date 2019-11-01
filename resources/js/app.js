import './bootstrap';
import Vue from 'vue'
window.Vue = require('vue');
import MusicApp from "./components/MusicApp";

const app = new Vue({
    el: '#app',
    components: {
        MusicApp
    },
    render: h => h(MusicApp)
});
