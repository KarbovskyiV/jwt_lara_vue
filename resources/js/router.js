import {createRouter, createWebHistory} from 'vue-router';
import Index from "./components/Fruit/Index.vue";
import Login from "./components/User/Login.vue";
import Registration from "./components/User/Registration.vue";

const routes = [
    {
        path: '/fruits', component: Index, name: 'fruit.index'
    },
    {
        path: '/users/login', component: Login, name: 'user.login'
    },
    {
        path: '/users/registration', component: Registration, name: 'user.registration'
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})

