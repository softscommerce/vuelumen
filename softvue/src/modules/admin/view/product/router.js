// import router from '@/router';

const ProductModules = () => import('./ProductModules.vue');
const ProductsPage = () => import('./product/ProductsPage.vue');
const BrandPage = () => import('./brand/BrandPage.vue');
const BrandAddPage = () => import('./brand/BrandAddPage.vue');
const BrandEditPage = () => import('./brand/BrandEditPage.vue');
// const CategoryPage = () => import('./page/categories/CategoryPage.vue');
// const SubCatPage = () => import('./page/subcategories/SubCategoryPage.vue');

const moduleRoute = {
    path: "/admin/products",
    component: ProductModules,
  
    children:[
        {
            path: "/admin/products",
            component: ProductsPage,
        },
        {
            path: "/admin/products/brand",
            component: BrandPage,
        },
        {
            path: "/admin/products/brand-add",
            component: BrandAddPage,
        },
        {
            path: "/admin/products/brand-edit/:id",
            name:'admin-brand-edit',
            component: BrandEditPage,
        },
       
    ]
};
export default router => {
    router.addRoute(moduleRoute);
    // console.log(router.getRoutes());
  };
  