// import VueRouter from "vue-router";
import { createWebHistory, createRouter } from "vue-router";
import AdminLogin from './admin/login.vue';
import StudentLogin from './students/login.vue';
import AdminPanel from './admin/panel.vue';
import Dashboard from './admin/dashboard/index.vue';
import CourseMgt from './admin/course/index.vue';

const routes = [
    
    {
        path: "/admin",
        components: {
            admin: AdminLogin
        },
        name: "admin-login",
    },

    {
        path: "/students",
        components: {
            students: StudentLogin
        },
        name: "student-login",
    },

    { path: '/admin/panel/',
        components: {
            admin: AdminPanel
        },
        children: [
            {
                path: '', 
                components: {
                    adminchild: Dashboard
                },
                name: "admin-dashboard",
            },
            {
                path: 'course',
                components: {
                    adminchild: CourseMgt
                },
                name: "admin-course",
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


// const router = new VueRouter({
//     history: createWebHistory(),
//     routes, 
//     //mode: "history",
//     // scrollBehavior (to, from, savedposition) {
//     //     if (savedposition){
//     //         return savedposition;
//     //     } else {
//     //         const position = {};
//     //         if (to.hash) {
//     //             position.selector = to.hash;
//     //             if (document.querySelector(to.hash)) {
//     //                 return position;
//     //             }
//     //         } else {
//     //             return { x: 0, y: 0 };
//     //         }
//     //     }
//     // }
// });

export default router;