// import router from '@/router';

const FormModules = () => import('./FormModules.vue');
const FormPage = () => import('./page/FormPage.vue');

const moduleRoute = {
    path: "/admin/form",
    component: FormModules,
  
    children:[
        {
            path: "/admin/form",
            component: FormPage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  