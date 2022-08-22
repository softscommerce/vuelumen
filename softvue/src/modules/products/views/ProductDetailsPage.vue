<template>
<div class="pdt_details_page">

    <product-header></product-header>
    <product-category></product-category>
    <product-details></product-details>

    <section class="pdt_section">
        <h4>Product Relateds</h4>
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
        </div>
    </section>
</div>

<mobile-option></mobile-option>
</template>
<script>
import {ref} from 'vue';
import ProductHeader from "./comps/ProductHeader.vue";
import ProductCategory from "./comps/ProductCategory.vue";
import ProductDetails from "./comps/ProductDetails.vue";
import ProductItem from "./comps/ProductItem.vue";
import MobileOption from "./comps/MobileOption.vue";

export default {
    components:{
        ProductHeader,
        ProductCategory,
        ProductDetails,
        ProductItem,
        MobileOption,
    },
    setup() {
        const isOpen = ref(false);
        return {
            isOpen
        }
    },
    name: 'App',
    data(){
        return {
        servicesIsInvalid:false,
        }
    },
    methods:{
        confirmError(){
        this.servicesIsInvalid = false;
        }
    },
}
</script>
<style lang="scss" scoped>
    .pdt_category {
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        margin-bottom: 20px;
    }
    .pdt_details {
        padding: 0 30px;
    }

    .pdt_section {
        padding: 30px;
        & > h4 {
            margin-bottom: 12px;
            margin-top: 30px;
        }
    }
    .vue_product {
        display: grid;
        height: auto;
        align-content: start;
        grid-template-columns: repeat(5, minmax(200px, 1fr));
        gap: 30px;
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
            row-gap: 60px;
            column-gap: 20px;
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