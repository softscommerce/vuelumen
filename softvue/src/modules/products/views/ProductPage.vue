<template>
<div class="pdt_page">

    <product-header></product-header>
    <product-category></product-category>
    <product-slider></product-slider>
    <div class="vue_product">
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
        <product-item></product-item>
    </div>

    <div class="mobile_sidebar" :class="[PdtCategorySlide ? 'active':'']">
        <mobile-sidebar></mobile-sidebar>
    </div>


</div>

<mobile-option></mobile-option>
<site-overlay></site-overlay>
</template>
<script>
import ProductHeader from "./comps/ProductHeader.vue";
import ProductCategory from "./comps/ProductCategory.vue";
import ProductSlider from "./comps/ProductSlider.vue";
import ProductItem from "./comps/ProductItem.vue";
import MobileOption from "./comps/MobileOption.vue";
import MobileSidebar from "./comps/MobileSidebar.vue";
import SiteOverlay from "../../../layout/base/SiteOverlay.vue"

import SiteOverlayStore from "../../../store/SiteOverlayStore.js"


export default {
    name: 'ProductPage',
    components:{
        ProductHeader,
        ProductCategory,
        ProductSlider,
        ProductItem,
        MobileOption,
        MobileSidebar,
        SiteOverlay
    },
    setup() {
        const {
            PdtCategorySlide,
        } = SiteOverlayStore();

        return {
            PdtCategorySlide:PdtCategorySlide(),
        }
    },
    
}
</script>

<style lang="scss" scoped>
    .pdt_page {
        margin: 0;
    }
    .pdt_category {
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        margin-bottom: 20px;
    }
    .slider {
        width: 98%;
        margin: auto;
        display: block;
    }

    .vue_product {
        display: grid;
        height: auto;
        align-content: start;
        grid-template-columns: repeat(5, minmax(160px, 1fr));
        gap: 30px;
        padding: 30px;
    }

    .mobile_sidebar {
        display: none;
    }




    $phone-width-small: 360px;
    $phone-width: 575px;
    $tablet-width: 767px;
    $desktop-width: 1023px;

    @media (max-width: #{$desktop-width}) {
        .vue_product {
            grid-template-columns: repeat(4, minmax(140px, 1fr));
        }
    }
    @media (max-width: #{$tablet-width}) {
        .pdt_page {
            padding-bottom: 70px;
        }
        .pdt_category {
            display: none;
        }
        .vue_product {
            grid-template-columns: repeat(3, minmax(120px, 1fr));
            row-gap: 20px;
            column-gap: 20px;
        }

        .mobile_sidebar {
            position: fixed;
            display: block;
            width: 0;
            height: calc(100vh - 70px);
            top: 0;
            left: 0;
            background-color: #fff;
            border-right: 1px solid #ddd;
            overflow: hidden;
            z-index: 998;
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            &.active {
                width: 240px;
            }
        }
    }

    @media (max-width: #{$phone-width}) {
        .vue_product {
            grid-template-columns: repeat(2, minmax(100px, 1fr));
        }
    }

    @media (max-width: #{$phone-width-small}) {
        .vue_product {
            grid-template-columns: repeat(1, minmax(100px, 1fr));
        }
    }
</style>