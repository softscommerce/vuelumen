import { computed, reactive, readonly } from "vue"

const state = reactive({
    SiteOverlay:false,

    PdtCategorySlide:false,
    PdtFilterSlide:false,
})

const getters = {
    SiteOverlay : () => {
        return computed(() => { return state.SiteOverlay });
    },

    PdtCategorySlide : () => {
        return computed(() => { return state.PdtCategorySlide });
    },
    PdtFilterSlide : () => {
        return computed(() => { return state.PdtFilterSlide });
    },
}

const mutations = {
    SiteOverlayShow : () => {
        state.SiteOverlay = true;
    },
    SiteOverlayHide : () => {
        state.SiteOverlay = false;
    },
}

const actions = {
    SiteOverlayHideBtn : () => {
        state.SiteOverlay = false;

        state.PdtCategorySlide = false;
        state.PdtFilterSlide = false;
    },

    // Produt Category Slide Show
    PdtCategorySlideShowBtn : () => {
        state.PdtCategorySlide = true;
        mutations.SiteOverlayShow();
    },
    // Product Filter Slide Show
    PdtFilterlideShowBtn : () => {
        state.PdtFilterSlide = true;
        mutations.SiteOverlayShow();
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