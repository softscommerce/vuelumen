import state from "./state";
import mutations from "./mutations";
import actions from "./actions";


export default {
    namespaced: true,
    state,
    getters: {
        data: state => state.data,
    },
    actions,
    mutations
}
