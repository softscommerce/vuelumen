import { reactive, readonly } from "vue"

const state = reactive({
    
})

const getters = {

}

const mutations = {

}

const actions = {
    
}

export default () => {
    return {
        state:readonly(state),
        ...getters,
        ...mutations,
        ...actions,
    }
}