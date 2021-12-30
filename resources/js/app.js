require('./bootstrap');

import { createApp } from "vue";
import router from "./routes";
import VueCookie from "vue-cookie";

import AdminIndex from './admin/index.vue';

//-------------- Vue SweetAlert v2-------------------------------------------------->
import swal from 'sweetalert2';
window.swal = swal;

const Toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', swal.stopTimer)
    toast.addEventListener('mouseleave', swal.resumeTimer)
  }
});
window.Toast = Toast;
//-------------- Vue SweetAlert v2-------------------------------------------------->


const app = createApp({
    components: {
        AdminIndex,
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