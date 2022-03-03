/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//---------------------------------------------- Login -----------------------------------

Vue.component('login', require('./components/login.vue').default);
//---------------------------------------------------------------------------------------------------
Vue.component('datos-administrativos', require('./components/cartaLlamada/DatosAdministrativos.vue').default);
Vue.component('datos-incidentes', require('./components/cartaLlamada/DatosIncidente.vue').default);
Vue.component('datos-personales', require('./components/cartaLlamada/DatosPersonales.vue').default);

//------------------------------------------- Expedientes --------------------------------

Vue.component('expedientes', require('./components/expedientes.vue').default);

//--------------------------------------------- Grafico ----------------------------------

Vue.component('grafico', require('./components/grafico.vue').default);

//----------------------------------------------- Home ------------------------------------

Vue.component('administrador', require('./components/home/administrador.vue').default);
Vue.component('operador', require('./components/home/operador.vue').default);
Vue.component('supervisor', require('./components/home/supervisor.vue').default);

//-----------------------------------------------------------------------------------------


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/*import App from './components/App.vue';
import vueAxios from 'vue-axios';
import axios from 'axios';

import VueRouter from 'vue-router';
import { router } from './routes';
import vue from 'vue';
import Vue from 'vue';
Vue.use(VueRouter);
Vue.use(VueAxios, axios);*/
