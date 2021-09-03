import Vue from 'vue'
import Router from 'vue-router'
import Main from '../components/pages/Main'
import Test from '../components/pages/Test'
import Store from '../store/index.js'

Vue.use(Router)

const routes = [
    {
        path: '/',
        name: 'Main',
        component: Main,
        meta: {
            isPublic: true
        }
    },
    {
        path: '/test',
        name: 'Test',
        component: Test,
        meta: {
            isPublic: true
        }
    },
];

const router = new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(page => page.meta.isPublic || Store.state.isLogged)) {
        next()
    } else {
        next('/login')
    }
});

export default router
