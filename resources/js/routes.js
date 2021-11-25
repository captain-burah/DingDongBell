import VueRouter from "vue-router";

const routes = [
    
    // {
    //     path: "/",
    //     component: ComingLanding,
    //     name: "cominglanding",
    // },
];

const router = new VueRouter({
    routes, 
    mode: "history",
    // scrollBehavior (to, from, savedposition) {
    //     if (savedposition){
    //         return savedposition;
    //     } else {
    //         const position = {};
    //         if (to.hash) {
    //             position.selector = to.hash;
    //             if (document.querySelector(to.hash)) {
    //                 return position;
    //             }
    //         } else {
    //             return { x: 0, y: 0 };
    //         }
    //     }
    // }
});

export default router;