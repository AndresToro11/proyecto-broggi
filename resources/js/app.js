/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

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

Vue.component('vista-login', require('./components/login.vue').default); //Acabado

//----------------------------------------------- Home ------------------------------------

Vue.component('administrador', require('./components/home/administrador.vue').default); //Acabado
Vue.component('operador', require('./components/home/operador.vue').default); //Acabado
Vue.component('supervisor', require('./components/home/supervisor.vue').default); //Acabado

//----------------------------------------------- Llamada ----------------------------------------------------

Vue.component('enviar-datos', require('./components/cartaLlamada/Boton.vue').default); //Acabado
Vue.component('datos-administrativos', require('./components/cartaLlamada/DatosAdministrativos.vue').default);
Vue.component('datos-incidentes', require('./components/cartaLlamada/DatosIncidente.vue').default); //Acabado
Vue.component('datos-personales', require('./components/cartaLlamada/DatosPersonales.vue').default); //Acabado
Vue.component('expedientes-relacionados', require('./components/cartaLlamada/ExpedientesRelacionados.vue').default);
Vue.component('mapa', require('./components/mapa.vue').default);

//------------------------------------------- Expedientes --------------------------------

Vue.component('expedientes', require('./components/expedientes.vue').default);

//--------------------------------------------- Grafico ----------------------------------

Vue.component('grafico', require('./components/grafico.vue').default); //Andres

//--------------------------------------------- Perfil ----------------------------------

Vue.component('perfil-editar', require('./components/editar-perfil.vue').default);

Vue.component('perfil', require('./components/perfil.vue').default);

//---------------------------------------------------- Admin -------------------------------------

Vue.component('admin', require('./components/administracion/admin.vue').default);
Vue.component('nuevousuario', require('./components/administracion/nuevoUsuario.vue').default);

//-------------------------------------------------------------------------------------------------
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
