// import router from '@/router';
import auth from '@/middleware/auth.js';
import admin from '@/middleware/admin';
const ProductModules = () => import('./ProductModules.vue');
const ProductsPage = () => import('./product/ProductsPage.vue');
const ProductsAddPage = () => import('./product/ProductsAddPage.vue');
const ProductsEditPage = () => import('./product/ProductsEditPage.vue');
const BrandPage = () => import('./brand/BrandPage.vue');
const BrandAddPage = () => import('./brand/BrandAddPage.vue');
const BrandEditPage = () => import('./brand/BrandEditPage.vue');
// const CategoryPage = () => import('./page/categories/CategoryPage.vue');
// const SubCatPage = () => import('./page/subcategories/SubCategoryPage.vue');

const moduleRoute = {
    path: "/admin/products",
    component: ProductModules,
    meta:{
        middleware:[auth, admin],
      },
  
    children:[
        {
            path: "/admin/products",
            component: ProductsPage,
            meta:{
                middleware:[auth, admin],
              },
        },
        {
            path: "/admin/products/add",
            component: ProductsAddPage,
            meta:{
                middleware:[auth, admin],
              },
        },

        {
            path: "/admin/products/edit_product/:id",
            component: ProductsEditPage,
            meta:{
                middleware:[auth, admin],
              },
        },
        {
            path: "/admin/products/brand",
            component: BrandPage,
            meta:{
                middleware:[auth, admin],
              },
        },
        {
            path: "/admin/products/brand-add",
            component: BrandAddPage,
            meta:{
                middleware:[auth, admin],
              },
        },
        {
            path: "/admin/products/brand-edit/:id",
            name:'admin-brand-edit',
            component: BrandEditPage,
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
  