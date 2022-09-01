// import router from '@/router';

const ServiceModules = () => import('./ServiceModules.vue');
const ServicePageCrate = () => import('./page/ServiceCreatePage.vue');
const ServicePage = () => import('./page/ServicePage.vue');

const moduleRoute = {
    path: "/mypanel/service",
    component: ServiceModules,
  
    children:[
        {
            path: "/mypanel/service/create",
            component: ServicePageCrate,
        },
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
  