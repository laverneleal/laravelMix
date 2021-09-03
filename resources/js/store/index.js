import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex);

export default new Vuex.Store({
    plugins: [
        createPersistedState({
            key: 'example',
            storage: localStorage
        })],
    state: {
        isLogged: false,
        drawer: false,
    },
    mutations: {
        loggedIn(state) {
            state.isLogged = true;
        },
        loggedOut(state) {
            state.isLogged = false;
        },
        toggleDrawer(state) {
            state.drawer = !state.drawer
        }
    }
});
