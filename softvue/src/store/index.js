import { createStore } from "vuex";
// import actions from './actions.js'
// import mutations from "./mutations.js";
// import getters from "./getters.js";

// import productStore from '@/modules/products/store/index.js'

// const moduleA = {
//   productStore
// }

const store = createStore({
  // modules: {
  //   products: moduleA,
  // }
  // actions,
  // mutations,
  // getters
  // productStore

  state() {
    return {
      notifications: [],
    };
  },
  mutations: {
    PUSH_NOTIFICATION(state, notification) {
      state.notifications.push({
        ...notification,
        id: (Math.random().toString(36) + Date.now().toString(36)).substr(2),
      });
    },

    REMOVE_NOTIFICATION(state, notificationToRemove){
      state.notifications = state.notifications.filter(notification =>{
        return notification.id != notificationToRemove.id;
      })
    }
  },

  actions: {
    addNotification({ commit }, notification) {
      commit("PUSH_NOTIFICATION", notification);
    },

    removeNotification({ commit }, notification) {
      commit("REMOVE_NOTIFICATION", notification);
    },
  },



});
export default store;