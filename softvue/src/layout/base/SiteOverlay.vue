<template>
    <div id="site_overlay" @click="SiteOverlayHideBtn" :class="[SiteOverlay ? 'show' : '']"></div>
</template>
<script>
import SiteOverlayStore from "../../store/SiteOverlayStore.js"
export default {
    setup() {
        const { SiteOverlay, SiteOverlayHideBtn } = SiteOverlayStore();

        return {
            SiteOverlay:SiteOverlay(),
            SiteOverlayHideBtn,
        }
    },
}
</script>
<style lang="scss" scoped>
#site_overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all 0.2s ease 0s;
    -webkit-transition: all 0.2s ease 0s;
    &.show {
        background-color: rgba(0, 0, 0, 0.25);
        z-index: 950;
    }
}
</style>