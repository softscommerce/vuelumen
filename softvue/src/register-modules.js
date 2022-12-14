import router from "./router/index";
import store from "./store/index";

const registerModule = (name, module) => {
  if (module.store) {
    store.registerModule(name, module.store);
  }

  if (module.router) {
    module.router(router);
  }
};

export const registerModules = modules => {
  Object.keys(modules).forEach(moduleKey => {
    const module = modules[moduleKey];
    // console.log(module)
    registerModule(moduleKey, module);
  });
};

