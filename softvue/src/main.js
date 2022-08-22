require('./bootstrap');
import { createApp } from 'vue'
import App from './App.vue'
 
// import vueCountryRegionSelect from 'vue3-country-region-select'

import axios from 'axios'
import VueAxios from 'vue-axios'

import VueTelInput from 'vue3-tel-input'
import 'vue3-tel-input/dist/vue3-tel-input.css'

const VueTelInputOptions = {
  mode: "national",
  // onlyCountries: ['BD', 'US'],
  defaultCountry: 'BD',
  autocomplete:'on',
}

import upperFirst from "lodash/upperFirst";
import camelCase from "lodash/camelCase";
import router from './router/index.js';
import store from './store/index.js'
//Fronted module
import cartModule from './modules/cart/index.js';
import productsModule from './modules/products/index.js';
import shopModule from './modules/shop/index.js';

//Admin module
import AdminModule from './modules/admin/index.js';
import AdminServiceModule from './modules/admin/view/services/index.js';
import AdminUserModule from './modules/admin/view/user/index.js';
import AdminWorkStationModule from './modules/admin/view/workstation/index.js';
import AdminCategoriesModule from './modules/admin/view/category/index.js';
import AdminProductModule from './modules/admin/view/product/index.js';
import AdminFormModule from './modules/admin/view/form/index.js';



//User module
import UserModule from './modules/user/index.js';
import UserServiceModule from './modules/user/view/service/index.js';


import { registerModules } from './register-modules';
registerModules({
  products: productsModule,
  cart: cartModule,
  shop: shopModule,


    // Admin
    admin: AdminModule,
    adminservice:AdminServiceModule,
    adminuser:AdminUserModule,
    adminworkstation:AdminWorkStationModule,
    admincategories:AdminCategoriesModule,
    adminproduct:AdminProductModule,
    adminfomr:AdminFormModule,

   // User
   user: UserModule,
   userservice: UserServiceModule,
});




const requireComponent = require.context(
    "./layout/base/",
    false,
    /^\.\/.*$/,
    // /base-[\w-]+\.vue$/,
    "sync"
  );
axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
axios.defaults.baseURL = process.env.VUE_APP_API_URL;


import User from './middleware/User.js';
window.User = User;
const app = createApp(App);
app.use(router);
app.use(store);
app.use(VueAxios, axios);
app.use(VueTelInput, VueTelInputOptions);

requireComponent.keys().forEach((fileName) => {
    const componentConfig = requireComponent(fileName);
  
    // const componentName = upperFirst(
    //   camelCase(fileName.replace(/^\.\//, "").replace(/\.\w+$/, ""))
    // );

    const componentName = upperFirst(
        camelCase(fileName.replace(/^\.\//, ""))
      );
    app.component(componentName, componentConfig.default || componentConfig);
  });

// app.use(VueTelInput, options);
app.mount('#app');
