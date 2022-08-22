// import router from '@/router';

const WorkStationModules = () => import('./WorkStationModules.vue');
const WorkStationPage = () => import('./page/WorkStationPage.vue');

const moduleRoute = {
    path: "/admin/work-station",
    component: WorkStationModules,
  
    children:[
        {
            path: "/admin/work-station",
            component: WorkStationPage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  