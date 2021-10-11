import Vue from 'vue'

require('./bootstrap');

require('alpinejs');

//Main pages
// import Example from './components/example.vue'
import navbar from './components/navbar.vue'


const app = new Vue({
    el: '#app',
    components: {
        navbar
    }
});
