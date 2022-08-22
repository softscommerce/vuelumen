<template>
<div class="pdt_cat_page">
    <product-header></product-header>
    <product-category></product-category>
    <div class="pdt_filter">

        <div class="wrap">
            <filter-sidebar></filter-sidebar>

            <div class="filter_icon">
                <svg @click="PdtFilterlideShowBtn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <g>
                        <path class="st0" d="M37.66,12.51c1.53-1.99,0.67-4.73-1.66-5.35c-0.19-0.1-0.39-0.14-0.6-0.14c-1.13,0-2.27,0.01-3.4,0.01
                            c-1.67,0-3.33,0-5,0c-2.08,0-4.17,0-6.25,0c-2.58,0-5.17,0-7.75,0c-2,0-4,0-6,0C5.75,7.03,4.5,6.99,3.25,7.03
                            c-1.43,0.05-2.41,0.79-3,2.08C0.17,9.29,0.19,9.52,0,9.65c0,0.5,0,1,0,1.5c0.64,1.38,1.66,2.48,2.62,3.63
                            c0.27,0.36,0.54,0.74,0.82,1.09c1.26,1.57,2.52,3.13,3.79,4.7c1.22,1.68,2.55,3.27,3.88,4.86c0.42,0.55,0.85,1.11,1.27,1.66
                            c0.53,0.69,1.2,1.31,1.02,2.31c0,3.21,0,6.42,0,9.63c0,3.08,0,6.17,0,9.25c-0.01,2.2-0.02,4.39-0.01,6.59
                            c0,0.5,0.17,0.98,0.59,1.31c0.67,0.66,1.46,0.83,2.26,0.42c0.77-0.4,1.5-0.87,2.25-1.31c1.87-1.07,3.75-2.13,5.62-3.22
                            c0.57-0.33,0.9-0.87,0.91-1.55c0.01-2.16-0.01-4.32-0.02-6.49c0-3.46,0-6.92,0-10.38c0.01-1.58,0.03-3.16,0.03-4.74
                            c0-0.35,0.07-0.63,0.3-0.91c2.77-3.46,5.53-6.93,8.29-10.4C34.97,15.91,36.33,14.23,37.66,12.51z M6.34,13.12
                            c-0.46-0.64-0.98-1.23-1.48-1.84C4.77,11.12,4.77,11,5,10.99c2,0,4,0,6,0c2.58,0,5.17,0,7.75,0c2.13,0,4.25,0,6.38,0
                            c1.67,0,3.33,0,5,0c1.18,0.01,2.37,0.02,3.55,0.03c0.15-0.07,0.27-0.16,0.37-0.27c-0.1,0.11-0.22,0.2-0.37,0.27
                            c-0.03,0.1-0.06,0.19-0.1,0.29c0,0,0,0,0,0c-0.64,0.6-1.11,1.33-1.67,2c-0.21,0.25-0.41,0.35-0.73,0.34
                            c-1.1-0.01-2.2,0.01-3.31,0.02c-2.08,0-4.17,0-6.25,0c-1.92,0-3.83,0-5.75,0c-1.63,0-3.25,0-4.88,0c-1.23-0.01-2.45-0.05-3.68-0.01
                            C6.84,13.67,6.6,13.48,6.34,13.12z M17.42,51.34c-0.03-0.29-0.05-0.49-0.06-0.68c0-2.79,0-5.58,0-8.38c0-3.08,0-6.17,0-9.25
                            c0.01-1.83,0.03-3.65,0.01-5.48c-0.01-0.93-0.71-1.5-1.26-2.15c-0.91-1.22-1.85-2.41-2.84-3.56c-0.95-1.21-1.91-2.42-2.85-3.64
                            c-0.12-0.16-0.3-0.28-0.34-0.59c1.28,0,2.54,0,3.79,0c1.96,0,3.92,0,5.88,0c2.04,0,4.08,0,6.13,0c0.82,0,1.64,0,2.58,0
                            c-0.2,0.27-0.3,0.42-0.41,0.56c-2.11,2.66-4.22,5.31-6.34,7.96c-0.33,0.42-0.63,0.85-0.64,1.39c-0.02,1.79-0.07,3.58,0.02,5.37
                            c-0.09,2.21-0.05,4.42-0.02,6.62c-0.01,3.02-0.03,6.04-0.02,9.06c0,0.47-0.12,0.73-0.56,0.96C19.46,50.08,18.48,50.71,17.42,51.34z
                            "/>
                        <path class="st0" d="M62.03,45.04c-0.54-0.02-1.08-0.03-1.62,0c-0.42,0.02-0.65-0.1-0.84-0.51c-0.57-1.2-1.43-2.13-2.69-2.64
                            c-0.14-0.08-0.28-0.17-0.44-0.23c-2.77-1.04-5.88,0.18-7.16,2.87c-0.2,0.42-0.43,0.53-0.84,0.51c-0.56-0.02-1.12,0.01-1.68,0.01
                            c-2.25,0-4.5,0-6.75,0c-1.83,0-3.67,0-5.5,0c-1.23-0.01-2.45-0.04-3.68-0.01c-1.08,0.03-1.92,0.93-1.92,1.99
                            c0,1.08,0.87,1.97,1.98,1.99c0.54,0.01,1.08-0.01,1.62-0.02c1.83,0,3.67,0,5.5,0c2.29,0,4.58,0,6.87,0
                            c1.16,0.01,2.32,0.04,3.49,0.01c0.47-0.01,0.73,0.09,0.94,0.56c0.41,0.92,1.05,1.68,1.95,2.19c2.34,1.72,5.86,1.15,7.71-1.19
                            c0.39-0.5,0.45-1.32,1.06-1.51c0.61-0.19,1.32-0.03,1.98-0.05c1.12-0.02,1.99-0.89,1.99-1.98C64.01,45.97,63.15,45.09,62.03,45.04z
                            M56.12,47.37c-0.11,0.66-0.68,1.23-1.36,1.38c-0.6,0.13-1.11-0.13-1.63-0.37c-0.02-0.08-0.02-0.17-0.06-0.23
                            c-0.49-0.7-0.55-1.43-0.04-2.13c0.49-0.68,1.18-0.83,1.97-0.63C55.94,45.93,56.27,46.5,56.12,47.37z"/>
                        <path class="st0" d="M62.17,30.64c-2.89-0.02-5.78,0-8.67,0.01c-2.38,0-4.75,0-7.13,0c-0.56-0.01-1.12-0.05-1.68-0.02
                            c-0.47,0.03-0.73-0.1-0.94-0.56c-0.47-1.04-1.21-1.87-2.25-2.4c-1.81-1.04-3.64-1.09-5.5-0.13c-1.21,0.56-2.03,1.49-2.58,2.68
                            c-0.15,0.32-0.32,0.43-0.66,0.41c-0.6-0.03-1.21-0.02-1.81,0c-1.15,0.02-2.01,0.83-2.05,1.91c-0.04,1.06,0.8,1.98,1.92,2.07
                            c0.47,0.04,0.95-0.01,1.43-0.02c0.72-0.09,1.12,0.22,1.44,0.9c0.47,0.99,1.27,1.73,2.3,2.18c2.7,1.58,6.36,0.38,7.79-2.56
                            c0.16-0.34,0.35-0.53,0.72-0.52c0,0,0,0,0,0c2.33,0.07,4.67,0.06,7,0.01c0.08,0.01,0.16,0.03,0.25,0.03c3.37,0,6.74,0,10.11,0
                            c0.25,0,0.5-0.04,0.74-0.11c0.9-0.27,1.49-1.18,1.39-2.12C63.89,31.47,63.11,30.65,62.17,30.64z M40.1,33.53
                            c-0.47,0.77-1.26,0.97-2.35,0.62c-0.63-0.5-1.02-1.1-0.81-1.94c0.29-1.19,1.42-1.62,2.68-1.05C40.43,31.94,40.59,32.75,40.1,33.53z
                            "/>
                        <path class="st0" d="M37.81,18.21c0.02,1.12,0.89,1.94,2.07,1.96c0.25,0,0.5-0.01,0.75-0.02c1.28,0.01,2.57,0.01,3.85,0.02
                            c0.58,1.34,1.42,2.44,2.77,3.08c1.27,0.7,2.61,0.84,4.01,0.49c1.69-0.54,3.06-1.47,3.82-3.13c0.15-0.34,0.33-0.45,0.7-0.44
                            c2.04,0.02,4.08,0.01,6.12,0.01c1.19,0,2.07-0.83,2.09-1.94c0.03-1.11-0.83-2.03-2-2.05c-2.21-0.02-4.41,0.01-6.62,0.01
                            c-0.23-0.15-0.25-0.42-0.37-0.63c-0.52-0.9-1.1-1.74-2.12-2.16c-1.11-0.9-2.39-1.08-3.76-0.87c-1.61,0.15-3,0.87-3.76,2.23
                            c-0.67,1.2-1.48,1.61-2.74,1.44c-0.93-0.01-1.87-0.04-2.8-0.02C38.66,16.21,37.78,17.12,37.81,18.21z M49.63,16.46
                            c0.5-0.1,0.94,0.1,1.36,0.34c0.68,0.78,0.82,1.48,0.44,2.19c-0.46,0.85-1.31,1.11-2.41,0.72c-0.65-0.49-1.02-1.09-0.81-1.93
                            C48.39,17.03,48.89,16.61,49.63,16.46z"/>
                    </g>
                </svg>
            </div>

            <div class="pdt_body">
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
                </div>
            </div>
        </div>
    </div>

    
    <mobile-option></mobile-option>
    <site-overlay></site-overlay>
</div>
</template>

<script>
import ProductHeader from "./comps/ProductHeader.vue";
import ProductCategory from "./comps/ProductCategory.vue";
import ProductItem from "./comps/ProductItem.vue";
import FilterSidebar from "./comps/FilterSidebar.vue";
import MobileOption from "./comps/MobileOption.vue";
import SiteOverlay from "../../../layout/base/SiteOverlay.vue";

import SiteOverlayStore from "../../../store/SiteOverlayStore.js"

export default {
    components:{
        ProductHeader,
        ProductCategory,
        ProductItem,
        FilterSidebar,
        MobileOption,
        SiteOverlay
    },
    setup() {
        const { PdtFilterlideShowBtn } = SiteOverlayStore();

        return {
            PdtFilterlideShowBtn,
        }
    },
}
</script>
<style lang="scss" scoped>
.pdt_filter {
    position: relative;
    .wrap {
        position: relative;
        display: flex;
        .pdt_body {
            width: calc(100% - 260px);
        }
    }
}

.vue_product {
    display: grid;
    height: auto;
    align-content: start;
    grid-template-columns: repeat(4, minmax(160px, 1fr));
    gap: 30px;
    padding: 30px 20px;
}





$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    .vue_product {
        grid-template-columns: repeat(4, minmax(200px, 1fr));
    }
}
@media (max-width: #{$tablet-width}) {
    .vue_product {
        grid-template-columns: repeat(3, minmax(120px, 1fr));
        row-gap: 20px;
        column-gap: 20px;
    }
    .pdt_filter {
        .wrap {
            display: block;
            .pdt_body {
                width: 100%;
            }
            .filter_icon {
                padding: 0 16px;
                margin-top: 20px;
                svg {
                    width: 24px;
                    fill: #444;
                    cursor: pointer;
                    transition: all 0.3s ease 0s;
                    -webkit-transition: all 0.3s ease 0s;
                    &:hover {
                        fill: #f19027;
                    }
                }
            }
        }
    }
    .pdt_category {
        display: none;
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