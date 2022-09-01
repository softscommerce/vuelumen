import auth from '@/middleware/auth.js';
import admin from '@/middleware/admin';
const CategorIesModules = () => import('./CategorIesModules.vue');
const CategoriesPage = () => import('./page/CategoriesPage.vue');

const moduleRoute = {
    path: "/admin/categories",
    component: CategorIesModules,
    meta:{
        middleware:[auth, admin],
      },
  
    children:[
        {
            path: "/admin/categories",
            component: CategoriesPage,
            meta:{
                middleware:[auth, admin],
              },
        },
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  