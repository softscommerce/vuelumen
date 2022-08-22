const ShopModule = () => import('./ShopModule.vue');
const ShopPage = () => import('./views/ShopPage.vue');


const moduleRoute = {
    path: "/shop",
    component: ShopModule,

    children:[{
        path: "/shop",
        component: ShopPage,
    }]
}

export default router => {
    router.addRoute(moduleRoute);
}