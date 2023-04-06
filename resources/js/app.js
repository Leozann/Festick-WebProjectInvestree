require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'

import router from './router/index'
import App from './src/App.vue'

import store from "./store"


Vue.use(VueRouter)

const app = new Vue({
  el: '#app',
  store,
  router,
  components: { App }
})
