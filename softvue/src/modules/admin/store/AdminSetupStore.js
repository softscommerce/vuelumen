import { computed, reactive, readonly } from "vue";

const state = reactive({
    SiteOverlay:false,
    aside_control:false,
    user_options_show:false,
})

const getters = {
    SiteOverlay : () => {
        return computed(() => { return state.SiteOverlay });
    },
    aside_control : () => {
        return computed(() => { return state.aside_control })
    },
    user_options_show : () => {
        return computed(() => { return state.user_options_show })
    },
}

const mutations = {

}

const actions = {
    SiteOverlayHideBtn : () => {
        state.SiteOverlay = false;

        state.aside_control = false;
    },
    AsideToggleClick : () => {
        state.SiteOverlay = true;
        state.aside_control =! state.aside_control;
    },
}

export default () => {
    return {
        state:readonly(state),
        ...getters,
        ...mutations,
        ...actions,
    }
}