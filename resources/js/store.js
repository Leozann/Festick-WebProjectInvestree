import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate';
import VueCookies from 'vue-cookies'

Vue.use(Vuex)
export default new Vuex.Store({
    plugins: [createPersistedState({
        storage: window.sessionStorage
    })],
    state: {
        hideClass: '',
        user: '',
        selectedTicket: '',
        memories: []
    },
    mutations: {
        ADD_DATA: (state, newData) => {
            state.memories.push(newData)
        },
        SEND_TICKET: (state, newTicket) => {
            state.selectedTicket = newTicket
        },
        CHANGE_USER: (state, setUser) => {
            state.user = setUser
            // VueCookies.set('name', setUser, "1h")
        },
        DELETE_USER: (state) => {
            state.user = ''
            state.memories = []
            state.selectedTicket = ''
        },
        DELETE_DATA: (state) => {
            state.memories = []
        },
        MANIPULATE_VIEW: (state, setClass) => {
            state.hideClass = setClass
        }
    },
    actions: {
        // removeLink: (context) => {
        //     context.commit("DELETE_USER")
        // }
    },
})