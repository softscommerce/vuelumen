// import router from '@/router';
import auth from '@/middleware/auth.js';
const UserModule = () => import('./UserModule.vue');
const HomePage = () => import('./view/home/HomePage.vue');
const moduleRoute = {
    path: "/mypanel",
    component: UserModule,
    meta:{
        middleware:[auth],
      },
  
    children:[
       {
        path: "/mypanel",
        component: HomePage,
        meta:{
            middleware:[auth],
          }
       },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  