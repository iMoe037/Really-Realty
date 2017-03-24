
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Add extensions to Vue
Vue.use(require('vee-validate'));

// Vue.component('example', require('./components/Example.vue'));
Vue.component('footerAccordion', require('./components/FooterAccordion.vue'));
Vue.component('hero', require('./components/Hero.vue'));
Vue.component('agent-card', require('./components/Agent-Card.vue'));
Vue.component('agents', require('./components/Agents.vue'));
Vue.component('sell-form', require('./components/Sell-Form.vue'));
Vue.component('neighborhood-card', require('./components/Neighborhood-Card.vue'));
Vue.component('main-neighborhoods', require('./components/Main-Neighborhoods.vue'));

const app = new Vue({
    el: '#app'
});
