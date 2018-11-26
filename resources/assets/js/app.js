
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import GameComponent from './components/GameComponent.vue'
import CategoriesComponent from './components/CategoriesComponent.vue'
// Vue.component('game-component', require('./components/GameComponent.vue'));
// Vue.component('categories-component', require('./components/CategoriesComponent.vue'));
import NavbarComponent from './components/NavbarComponent.vue'
// import StopwatchComponent from './components/StopwatchComponent.vue'

const app = new Vue({
    el: '#app',
    components:{
        GameComponent,
         CategoriesComponent, NavbarComponent
        //  StopwatchComponent
        }
});


// const app1 = new Vue({
//     el: '#app1',
   
// });



