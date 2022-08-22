// import router from '@/router';

const ServiceModules = () => import('./ServiceModules.vue');
const ServicePage = () => import('./page/ServicePage.vue');

const moduleRoute = {
    path: "/admin/service",
    component: ServiceModules,
  
    children:[
        {
            path: "/admin/service",
            component: ServicePage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  