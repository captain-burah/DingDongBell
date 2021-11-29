require('./bootstrap');

import { createApp } from "vue";
import router from "./routes";
import LoginComponent from './home/loginForm.vue';

createApp({
    components: {
        LoginComponent
    }
}).use(router).mount('#app')