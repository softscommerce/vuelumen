// import router from '@/router';

const CategorIesModules = () => import('./CategorIesModules.vue');
const CategoriesPage = () => import('./page/CategoriesPage.vue');

const moduleRoute = {
    path: "/admin/categories",
    component: CategorIesModules,
  
    children:[
        {
            path: "/admin/categories",
            component: CategoriesPage,
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  