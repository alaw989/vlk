import { createWebHistory, createRouter } from 'vue-router'; // Change to createWebHistory for non-memory history mode

// Import your components
import HomePage from './components/App.vue';
import Internal from './components/InternalHero.vue';

const routes = [
    { path: '/', name: 'home', }, // Add name for the home route
    { path: '/:slug', name: 'page', props: true } // Add name for the page route and use props: true to pass slug as a prop
];

const router = createRouter({
    history: createWebHistory(), // Change to createWebHistory for non-memory history mode
    routes
});

export default router;
