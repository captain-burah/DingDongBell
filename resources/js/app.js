require('./bootstrap');

import { createApp } from "vue";
import router from "./routes";
import LoginComponent from './admin/login.vue';

createApp({
    components: {
        LoginComponent
    }
}).use(router).mount('#app')