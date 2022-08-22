// import router from '@/router';

const ProductModule = () => import('./ProductModule.vue');
const ProductPage = () => import('./views/ProductPage.vue');
const ProductCategoryPage = () => import('./views/ProductCategoryPage.vue');
const ProductDetailsPage = () => import('./views/ProductDetailsPage.vue');

const moduleRoute = {
    path: "/products",
    component: ProductModule,
  
    children:[
       {
        path: "/products",
        component: ProductPage,
       },
       {
        path: "/products/category",
        component: ProductCategoryPage,
       },
       {
        path: "/products/details",
        component: ProductDetailsPage,
       }
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  