require('./bootstrap');

import { createApp } from "vue";
import router from "./routes";
import VueCookie from "vue-cookie";

import LoginComponent from './admin/login.vue';

const app = createApp({
    components: {
        LoginComponent
    }
});
app.use(VueCookie);
app.use(router);
app.provide('cookies', app.config.globalProperties.$cookies);
app.mount('#app');

// createApp({
//     components: {
//         LoginComponent
//     }
// }).use({router, VueCookie}).provide('cookies', createApp.config.globalProperties.$cookies).mount('#app')