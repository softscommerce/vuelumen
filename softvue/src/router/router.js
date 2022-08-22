// import Home from "@/components/main/Home.vue";
const HomePage = () => import('@/components/main/HomePage.vue');

const router = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
    // meta: { requiresAuth: true }
  },


];
console.log(router);

export default router;