// import router from '@/router';
const AdminModule = () => import('./AdminModule.vue');
const HomePage = () => import('./view/home/HomePage.vue');
const moduleRoute = {
    path: "/admin",
    component: AdminModule,
  
    children:[
       {
        path: "/admin",
        component: HomePage,
       },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  