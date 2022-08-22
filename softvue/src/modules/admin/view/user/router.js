// import router from '@/router';

const UserModules = () => import('./UserModules.vue');
const UserPage = () => import('./page/UserPage.vue');

const moduleRoute = {
    path: "/admin/users",
    component: UserModules,
  
    children:[
        {
            path: "/admin/users",
            component: UserPage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  