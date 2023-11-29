import {createRouter, createWebHistory} from 'vue-router';
import Index from "./components/Fruit/Index.vue";

const routes = [
    {
        path: '/fruits', component: Index, name: 'fruit.index'
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})

