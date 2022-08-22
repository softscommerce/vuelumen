// import router from '@/router';
const UserModule = () => import('./UserModule.vue');
const HomePage = () => import('./view/home/HomePage.vue');
const moduleRoute = {
    path: "/mypanel",
    component: UserModule,
  
    children:[
       {
        path: "/mypanel",
        component: HomePage,
       },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  