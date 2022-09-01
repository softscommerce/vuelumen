import { computed, reactive, readonly } from "vue";


const state = reactive({
    grid_list:false,
})

const getters = {
    grid_list : () => {
        return computed(() => { return state.grid_list });
    }
}

const mutations = {

}

const actions = {
    GridListClick : () => {
        state.grid_list =! state.grid_list;
    }
}

export default () => {
    return {
        state:readonly(state),
        ...getters,
        ...mutations,
        ...actions,
    }
}