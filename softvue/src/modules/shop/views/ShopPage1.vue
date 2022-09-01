<template>
<div class="shop_page">
    <shop-slider></shop-slider>

    <shop-offers></shop-offers>
    <shop-priority></shop-priority>
    <shop-package></shop-package>

    <div class="vue_products">
        <div class="heading">
            <div class="left">
                <h4>Products</h4>
            </div>
            <div class="right">
                <div class="filter">
                    <base-select label="Shorting" :options="communities" :default="'Select'"
                        class="select w_200 w_400" @input="displayToCommunity($event)">
                    </base-select>
                </div>
                <div class="show_action">
                    <div class="grid" @click="GridListClick" v-if="grid_list">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                            style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path class="st0"
                                    d="M31.5-0.03c0.33,0,0.67,0,1,0c0.04,0.04,0.07,0.1,0.12,0.12c4.85,1.61,9.7,3.22,14.55,4.83
                                c1.4,0.47,1.72,0.95,1.72,2.44c0,6.71,0.01,13.43-0.01,20.14c0,0.52,0.16,0.7,0.63,0.86c4.28,1.41,8.56,2.84,12.84,4.27
                                c1.17,0.39,1.56,0.95,1.56,2.17c0,7.36,0,14.72,0,22.08c0,1.17-0.42,1.76-1.54,2.13c-4.79,1.6-9.58,3.19-14.37,4.8
                                c-0.66,0.22-1.27,0.23-1.94,0c-4.47-1.51-8.95-2.98-13.42-4.49c-0.44-0.15-0.82-0.13-1.26,0.01c-4.47,1.5-8.95,2.98-13.42,4.48
                                c-0.67,0.22-1.27,0.22-1.94-0.01c-4.77-1.61-9.54-3.19-14.31-4.78c-1.2-0.4-1.6-0.95-1.6-2.21c0-7.34,0-14.68,0-22.02
                                c0-1.22,0.41-1.79,1.56-2.17c4.28-1.42,8.56-2.86,12.84-4.26c0.47-0.16,0.62-0.36,0.62-0.87c-0.02-6.78-0.01-13.55-0.01-20.33
                                c0-1.26,0.4-1.8,1.61-2.2c3.53-1.17,7.06-2.34,10.59-3.53C28.71,0.96,30.14,0.58,31.5-0.03z M30.1,31.88
                                c0.01-0.13,0.02-0.21,0.02-0.29c0-5.98,0-11.97,0.01-17.95c0-0.38-0.15-0.49-0.47-0.59c-2.11-0.69-4.22-1.39-6.33-2.1
                                c-1.47-0.49-2.95-0.99-4.42-1.48c-0.02,0.09-0.04,0.13-0.04,0.17c0,6.05,0,12.09-0.01,18.14c0,0.32,0.12,0.41,0.41,0.5
                                c1.31,0.42,2.6,0.87,3.9,1.3C25.47,30.34,27.77,31.1,30.1,31.88z M33.88,31.88c0.15-0.04,0.22-0.07,0.3-0.09
                                c3.47-1.15,6.94-2.32,10.42-3.45c0.44-0.14,0.55-0.35,0.55-0.79c-0.01-5.84-0.01-11.67-0.01-17.51c0-0.18,0.06-0.36-0.07-0.56
                                c-3.63,1.21-7.25,2.42-10.88,3.61c-0.34,0.11-0.31,0.33-0.31,0.57c0,1.61,0,3.21,0,4.82C33.88,22.92,33.88,27.36,33.88,31.88z
                                M15.09,59.53c0.01-0.14,0.02-0.2,0.02-0.27c0-5.98,0-11.97,0.01-17.95c0-0.41-0.16-0.52-0.5-0.63c-2.84-0.93-5.68-1.88-8.52-2.83
                                c-0.74-0.24-1.47-0.49-2.25-0.75c0,4.17,0,8.26,0,12.34c0,1.96,0,3.92,0,5.88c0,0.25-0.03,0.46,0.31,0.57
                                C7.79,57.09,11.42,58.3,15.09,59.53z M30.12,37.11c-3.62,1.2-7.16,2.4-10.71,3.55c-0.45,0.15-0.56,0.34-0.55,0.78
                                c0.01,5.84,0.01,11.67,0.01,17.51c0,0.18,0,0.36,0,0.59c3.7-1.23,7.32-2.45,10.95-3.64c0.34-0.11,0.31-0.33,0.31-0.57
                                c0-1.73,0-3.46,0-5.19C30.12,45.82,30.12,41.5,30.12,37.11z M45.13,59.54c0-6.16,0-12.23,0.01-18.3c0-0.3-0.1-0.43-0.39-0.52
                                c-1.05-0.33-2.09-0.7-3.13-1.04c-2.56-0.85-5.12-1.7-7.67-2.55c-0.03,0.05-0.05,0.06-0.05,0.07c-0.01,6.09-0.01,12.17-0.02,18.26
                                c0,0.25,0.08,0.36,0.33,0.44c0.7,0.21,1.38,0.45,2.07,0.68C39.2,57.55,42.14,58.53,45.13,59.54z M48.89,59.53
                                c0.15-0.04,0.22-0.07,0.3-0.09c3.47-1.15,6.94-2.32,10.42-3.45c0.44-0.14,0.55-0.35,0.55-0.79c-0.01-5.84-0.01-11.67-0.01-17.51
                                c0-0.18,0.06-0.36-0.07-0.56c-3.63,1.21-7.25,2.42-10.88,3.61c-0.34,0.11-0.31,0.33-0.31,0.57c0,1.61,0,3.21,0,4.82
                                C48.89,50.57,48.89,55.01,48.89,59.53z M40.89,6.91c0-0.04-0.01-0.09-0.01-0.13c-2.86-0.95-5.72-1.9-8.57-2.86
                                c-0.27-0.09-0.48-0.03-0.72,0.05c-1.58,0.52-3.15,1.04-4.73,1.57c-1.25,0.42-2.49,0.84-3.89,1.31c0.26,0.09,0.35,0.12,0.44,0.15
                                c2.46,0.83,4.93,1.62,7.38,2.49c0.88,0.31,1.66,0.34,2.5-0.03c0.59-0.26,1.22-0.42,1.83-0.62C37.04,8.2,38.97,7.55,40.89,6.91z
                                M26.05,34.5c-0.27-0.09-0.37-0.13-0.46-0.16c-2.56-0.86-5.13-1.7-7.68-2.59c-0.65-0.23-1.22-0.22-1.85,0.01
                                c-0.97,0.36-1.97,0.66-2.95,0.99c-1.66,0.56-3.33,1.12-5,1.68c0.05,0.08,0.06,0.13,0.09,0.14c2.86,0.96,5.71,1.91,8.57,2.86
                                c0.17,0.06,0.32,0.05,0.48-0.01C20.12,36.48,23,35.52,26.05,34.5z M55.89,34.56c0-0.04,0-0.09,0-0.13
                                c-2.89-0.97-5.78-1.93-8.67-2.9c-0.23-0.08-0.41,0.02-0.6,0.08c-1.64,0.54-3.27,1.09-4.91,1.63c-1.19,0.4-2.38,0.8-3.6,1.2
                                c0.16,0.23,0.37,0.23,0.53,0.28c2.5,0.84,5.01,1.66,7.5,2.52c0.59,0.2,1.12,0.22,1.73,0.01C50.54,36.33,53.22,35.45,55.89,34.56z" />
                            </g>
                        </svg>
                    </div>
                    <div class="list" @click="GridListClick" v-if="grid_list==false">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
                            style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <g>
                                <path class="st0" d="M32.88,0c0.42,0.1,0.85,0.18,1.27,0.3c2.04,0.59,3.52,1.84,4.36,3.8c0.15,0.36,0.33,0.5,0.73,0.49
                                c1.23-0.03,2.46-0.02,3.69-0.01c0.33,0,0.67,0.02,0.99,0.1c0.74,0.18,1.04,0.58,1.05,1.34c0.01,0.76,0,1.53,0,2.35
                                c1.84,0,3.6-0.02,5.37,0.01c0.72,0.02,1.46,0.08,2.16,0.27c2.68,0.72,4.64,3.27,4.65,6.05c0.01,14.48,0.01,28.95,0,43.43
                                c0,2.86-2.17,5.27-5.12,5.73c-0.51,0.08-1.03,0.12-1.55,0.12C38.15,64,25.84,63.99,13.53,64c-1.43,0-2.77-0.31-3.97-1.09
                                c-1.77-1.16-2.7-2.77-2.7-4.91c0.01-6.41,0-12.83,0-19.24c0-7.89,0-15.79,0-23.68c0-3.89,2.79-6.68,6.69-6.69
                                c1.6-0.01,3.21,0,4.81,0c0.2,0,0.41-0.02,0.67-0.03c0-0.74,0-1.44,0-2.15c0-1.09,0.42-1.57,1.53-1.6c1.35-0.04,2.71-0.03,4.06-0.01
                                c0.36,0,0.54-0.11,0.7-0.45c1.02-2.22,2.73-3.56,5.13-4.03c0.1-0.02,0.19-0.07,0.28-0.11C31.46,0,32.17,0,32.88,0z M45.03,11.48
                                c-0.03,0.08-0.06,0.11-0.06,0.15c-0.01,1.02-0.01,2.04-0.01,3.06c0,1.49-0.58,2.06-2.09,2.06c-7.27,0-14.54,0-21.81,0
                                c-1.48,0-2.02-0.55-2.03-2.04c0-1.08,0-2.15,0-3.24c-0.2-0.02-0.32-0.05-0.45-0.05c-1.87,0.01-3.75-0.05-5.62,0.05
                                c-1.81,0.1-3.08,1.6-3.08,3.47c0,14.31,0,28.62,0,42.92c0,1.44,0.68,2.42,2.06,2.85c0.55,0.17,1.15,0.23,1.72,0.23
                                c12.2,0.01,24.41,0.01,36.61,0.01c0.31,0,0.63-0.01,0.93-0.05c1.92-0.24,2.88-1.33,2.88-3.25c0-14.14,0-28.28,0-42.42
                                c0-0.17,0-0.33,0-0.5c-0.06-1.65-1.3-3.13-2.92-3.22C49.15,11.4,47.1,11.48,45.03,11.48z M22.13,13.68c6.62,0,13.17,0,19.72,0
                                c0-2.03,0-4.02,0-6.06c-1.29,0-2.53,0-3.78,0c-1.29,0-1.74-0.34-2.09-1.59c-0.56-2-2.39-3.33-4.39-3.18
                                c-1.81,0.13-3.32,1.44-3.85,3.33c-0.29,1.04-0.81,1.43-1.89,1.44c-0.4,0-0.79,0-1.19,0c-0.85,0-1.69,0-2.54,0
                                C22.13,9.69,22.13,11.66,22.13,13.68z" />
                                <path class="st0"
                                    d="M39.23,25.14c2.85,0,5.7,0,8.55,0c0.88,0,1.48,0.41,1.68,1.12c0.24,0.85-0.3,1.72-1.17,1.88
                                c-0.26,0.05-0.54,0.05-0.81,0.05c-5.49,0-10.99,0-16.48,0c-0.21,0-0.42,0-0.62-0.02c-0.86-0.09-1.42-0.7-1.41-1.53
                                c0.01-0.81,0.6-1.44,1.46-1.49c0.54-0.03,1.08-0.01,1.62-0.01C34.44,25.14,36.84,25.14,39.23,25.14z" />
                                <path class="st0" d="M39.18,52.58c-2.81,0-5.62,0.01-8.43,0c-1.05,0-1.7-0.52-1.78-1.37c-0.07-0.81,0.4-1.47,1.2-1.65
                                c0.16-0.04,0.33-0.04,0.5-0.04c5.7,0,11.4,0,17.1,0c1.01,0,1.67,0.57,1.72,1.43c0.04,0.78-0.44,1.43-1.21,1.58
                                c-0.26,0.05-0.54,0.06-0.81,0.06C44.72,52.58,41.95,52.58,39.18,52.58z" />
                                <path class="st0" d="M39.18,40.38c-2.85,0-5.7,0-8.55,0c-1.02,0-1.67-0.63-1.66-1.54c0.01-0.78,0.56-1.38,1.33-1.47
                                c0.12-0.01,0.25-0.02,0.37-0.02c5.7,0,11.4,0,17.1,0c0.98,0,1.61,0.49,1.71,1.29c0.13,0.98-0.56,1.74-1.64,1.74
                                c-2.31,0.01-4.62,0-6.93,0C40.35,40.38,39.76,40.38,39.18,40.38z" />
                                <path class="st0" d="M19.26,38.5c1.44-1.37,2.95-2.83,4.48-4.26c0.28-0.26,0.63-0.5,0.99-0.6c0.66-0.19,1.35,0.18,1.68,0.78
                                c0.34,0.62,0.25,1.25-0.33,1.81c-1.71,1.64-3.43,3.27-5.15,4.9c-0.27,0.26-0.53,0.53-0.82,0.76c-0.66,0.54-1.43,0.53-2.03-0.06
                                c-1.06-1.05-2.11-2.12-3.14-3.22c-0.62-0.66-0.59-1.63,0.01-2.2c0.61-0.58,1.48-0.52,2.18,0.13C17.81,37.19,18.5,37.82,19.26,38.5z
                                " />
                                <path class="st0"
                                    d="M19.22,26.35c1.33-1.26,2.71-2.58,4.09-3.9c0.23-0.22,0.44-0.44,0.68-0.64c0.69-0.59,1.57-0.55,2.18,0.1
                                c0.6,0.63,0.59,1.47-0.07,2.11c-1.96,1.89-3.94,3.76-5.93,5.62c-0.7,0.65-1.48,0.61-2.16-0.06c-1-1-1.99-2.01-2.96-3.03
                                c-0.71-0.74-0.73-1.73-0.08-2.33c0.62-0.57,1.54-0.46,2.27,0.26C17.87,25.1,18.53,25.7,19.22,26.35z" />
                                <path class="st0" d="M19.22,50.72c1.52-1.45,3.07-2.93,4.63-4.4c0.63-0.6,1.28-0.71,1.92-0.34c0.92,0.52,1.13,1.63,0.37,2.37
                                c-1.98,1.93-4,3.83-6.02,5.71c-0.67,0.62-1.46,0.56-2.11-0.09c-1-1-1.99-2.01-2.97-3.03c-0.71-0.74-0.74-1.73-0.09-2.33
                                c0.62-0.58,1.54-0.47,2.27,0.25C17.87,49.47,18.53,50.07,19.22,50.72z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="vue_product" :class="{'show_list':grid_list}">
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
            <shop-item></shop-item>
        </div>
    </div>

    <mobile-option></mobile-option>
    <site-overlay></site-overlay>
    <cart-sidebar></cart-sidebar>
</div>

</template>
<script>
// import AsideSlide from './comps/AsideSlide.vue';
// import ShopHeader from "./comps/ShopHeader.vue";
import ShopSlider from "./comps/ShopSlider.vue";
import ShopOffers from "./comps/ShopOffers.vue";
import ShopPriority from "./comps/ShopPriority.vue";
import ShopPackage from "./comps/ShopPackage.vue";
import ShopItem from "./comps/ShopItem.vue";
import MobileOption from "../../products/views/comps/MobileOption.vue";
// import MobileSidebar from "../../products/views/comps/MobileSidebar.vue";
import SiteOverlay from "../../../layout/base/SiteOverlay.vue"
import CartSidebar from "../../../components/inc/CartSidebar.vue"

import ShopStore from "../store/ShopStore.js";
import SetupStore from "../store/SetupStore.js";


export default {
    name: 'ProductPage',
    components:{
        // AsideSlide,
        // ShopHeader,
        ShopSlider,
        ShopOffers,
        ShopPriority,
        ShopPackage,
        ShopItem,
        MobileOption,
        // MobileSidebar,
        SiteOverlay,
        CartSidebar
    },
    setup() {
        const displayToCommunity = (event) => {
            console.log(event)
        }
        const { GridListClick, grid_list, } = ShopStore();
        const { aside_control } = SetupStore();

        return {
            displayToCommunity,
            GridListClick,
            grid_list:grid_list(),

            aside_control
        }
    },

    data() {
        return {
            communities: []
        }
    },
}
</script>

<style lang="scss" scoped>
    .pdt_page {
        margin: 0;
    }
    .slider {
        width: 98%;
        margin: auto;
        display: block;
    }

    .vue_products {
        .heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            .left {
                h4 {
                    font-size: 18px;
                    color: #444;
                }
            }
            .right {
                display: flex;
                align-items: center;
                column-gap: 16px;
                .filter {
                    .gap {
                        column-gap: 8px;
                    }
                }
                .show_action {
                    display: flex;
                    align-items: center;
                    column-gap: 4px;
                    svg {
                        fill: #f19024;
                        width: 20px;
                        cursor: pointer;
                    }
                   
                }
            }
        }
        .vue_product {
            display: grid;
            height: auto;
            align-content: start;
            grid-template-columns: repeat(5, minmax(160px, 1fr));
            gap: 30px;
            padding: 20px 30px;
        }
        .vue_product.show_list {
            display: grid;
            height: auto;
            align-content: start;
            grid-template-columns: 1fr;
            row-gap: 30px;
            padding: 20px 30px;
        }
    }

    .mobile_sidebar {
        display: none;
    }

    




    $phone-width-small: 360px;
    $phone-width: 575px;
    $tablet-width: 767px;
    $desktop-width: 1023px;

    @media (max-width: #{$desktop-width}) {
        .vue_products {
            .vue_product {
                grid-template-columns: repeat(4, minmax(140px, 1fr));
            }
        }
    }
    @media (max-width: #{$tablet-width}) {
        .pdt_page {
            padding-bottom: 70px;
        }
        .pdt_category {
            display: none;
        }
        .vue_products {
            .vue_product {
                grid-template-columns: repeat(3, minmax(120px, 1fr));
                row-gap: 20px;
                column-gap: 20px;
            }
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
        .shop_category {
            .items {
                grid-template-columns: repeat(2, minmax(100px, 1fr));
                .item {
                    &:last-child {
                        display: none;
                    }
                    .link {
                        .txt {
                            bottom: 12px;
                            padding: 6px 20px;
                            font-size: 10px;
                        }
                    }
                }
            }
        }
        .vue_products {
            .vue_product {
                grid-template-columns: repeat(2, minmax(100px, 1fr));
            }
        }
    }

    @media (max-width: #{$phone-width-small}) {
        .vue_products {
            .vue_product {
                grid-template-columns: repeat(1, minmax(100px, 1fr));
            }
        }
    }
</style>