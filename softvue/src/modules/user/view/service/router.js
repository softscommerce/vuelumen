// import router from '@/router';

const ServiceModules = () => import('./ServiceModules.vue');
const ServicePage = () => import('./page/ServiceCreatePage.vue');

const moduleRoute = {
    path: "/mypanel/service",
    component: ServiceModules,
  
    children:[
        {
            path: "/mypanel/service",
            component: ServicePage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  