import { createMemoryHistory, createRouter } from 'vue-router'

// Import your components
import HomePage from './components/App.vue'
import Internal from './components/Internal.vue';

const routes = [
    { path: '/', component: HomePage },
    { path: '/:slug', component: Internal }
];

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router;
