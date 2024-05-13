import './bootstrap';

import {createApp} from 'vue'

import App from './components/App.vue'
import router from "./routes.js";

createApp(App).use(router).mount("#app")
