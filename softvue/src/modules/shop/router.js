const ShopModule = () => import('./ShopModule.vue');
const ShopPage = () => import('./views/ShopPage.vue');
const ShopPage1 = () => import('./views/ShopPage1.vue');

import auth from '@/middleware/auth.js';
const ProductsPage = () => import('./views/product/product/ProductsPage.vue');
const ProductsAddPage = () => import('./views/product/product/ProductsAddPage.vue');
const ProductsEditPage = () => import('./views/product/product/ProductsEditPage.vue');
const BrandPage = () => import('./views/product/brand/BrandPage.vue');
const BrandAddPage = () => import('./views/product/brand/BrandAddPage.vue');
const BrandEditPage = () => import('./views/product/brand/BrandEditPage.vue');


//archive product list
const ArchiveProduct = () => import('./views/product/archive/ArchiveProductList.vue');

//Offers product list
const OffersProduct = () => import('./views/product/offer/OfferProductPage.vue');



const moduleRoute = {
    path: "/mypanel/service/profile/:pid",
    component: ShopModule,

    children:[
        {
            path: "/mypanel/service/profile/:pid",
            component: ShopPage1,
        },
        {
            path: "/mypanel/service/profile/:pid/products",
            component: ProductsPage,
            meta:{
                middleware:[auth],
              },
              
        },
        {
            path: "/mypanel/service/profile/:pid/products/add",
            component: ProductsAddPage,
            meta:{
                middleware:[auth],
              },
        },

        {
            path: "/mypanel/service/profile/:pid/products/edit_product/:id",
            component: ProductsEditPage,
            meta:{
                middleware:[auth],
              },
        },
        {
            path: "/mypanel/service/profile/:pid/products/brand",
            component: BrandPage,
            meta:{
                middleware:[auth],
              },
        },
        {
            path: "/mypanel/service/profile/:pid/products/brand-add",
            component: BrandAddPage,
            meta:{
                middleware:[auth],
              },
        },
        {
            path: "/mypanel/service/profile/:pid/products/brand-edit/:id",
            name:'user-brand-edit',
            component: BrandEditPage,
            meta:{
                middleware:[auth],
              },
        },


        //archive product route

        {
          path: "/mypanel/service/profile/:pid/products/archive-products",
          component: ArchiveProduct,
          meta:{
              middleware:[auth],
            },
        },
      
        {
          path: "/mypanel/service/profile/:pid/products/offer",
          component: OffersProduct,
          meta:{
              middleware:[auth],
            },
        },
      
    ]
}

export default router => {
    router.addRoute(moduleRoute);
}