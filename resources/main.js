/*!

=========================================================
* Vue Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/vue-argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/vue-argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
import Vue from 'vue'
import App from './App.vue'
import router from './router'
import ArgonDashboard from './plugins/argon-dashboard'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vue-search-select/dist/VueSearchSelect.css'
import VuePassword from 'vue-password';
import CKEditor from 'ckeditor4-vue';
import Vuelidate from 'vuelidate'
import VueRouter from 'vue-router'
Vue.use(Vuelidate)
Vue.config.productionTip = false

Vue.use(VuePassword)
// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use( CKEditor )
Vue.use(Vuelidate)
Vue.use(ArgonDashboard)

import store from './store'
import Axios from 'axios'

Vue.prototype.$http = Axios;
const remember_token = localStorage.getItem('remember_token')
if (remember_token) {
  Vue.prototype.$http.defaults.headers.common['Authorization'] = remember_token
}

new Vue({
  router,
  el: '#app',
  render: h => h(App),
  store: store,
})
