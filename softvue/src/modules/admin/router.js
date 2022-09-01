// import router from '@/router';
const AdminModule = () => import('./AdminModule.vue');
const HomePage = () => import('./view/home/HomePage.vue');
import auth from '@/middleware/auth.js';
import admin from '@/middleware/admin';
const moduleRoute = {
    path: "/admin",
    component: AdminModule,
    meta:{
        middleware:[auth, admin],
      },
  
    children:[
       {
        path: "/admin",
        component: HomePage,
        meta:{
            middleware:[auth, admin],
          },
       },
      
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  