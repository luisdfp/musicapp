import Vue from 'vue';
import VueRouter from 'vue-router';
import Main from "./components/Main";
import Artist from "./components/Artist";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/', component: Main },
        { path: '/artist/:id', component: Artist, props: true }
    ]
})
