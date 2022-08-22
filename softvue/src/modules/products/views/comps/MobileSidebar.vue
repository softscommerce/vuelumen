<template>
    <div class="slide">
        <div class="header">
            <ul class="items">
                <li class="item category" :class="[isActive == 1 ? 'active':'']" @click="isActiveMenu('category')">Categories</li>
                <li class="item menu" :class="[isActive == 2 ? 'active':'']" @click="isActiveMenu('menu')">Menu</li>
            </ul>
        </div>
        <div class="body">
            <div class="cat_data" v-if="isActive == 1">
                <product-category></product-category>
            </div>
            <div class="menu_data" v-else>
                <ul class="items">
                    <li class="item">
                        <router-link to="" class="link">Shop Info</router-link>
                    </li>
                    <li class="item">
                        <router-link to="" class="link">Balance(200)</router-link>
                    </li>
                    <li class="item">
                        <router-link to="" class="link">Cart(0)</router-link>
                    </li>
                    <li class="item">
                        <router-link to="" class="link">Login</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import ProductCategory from './ProductCategory.vue'
export default {
    components: {
        ProductCategory,
    },
    setup() {
        
    },
    data(){
        return {
            isActive: 1,
        }
    },
    methods: {
        isActiveMenu(value){
            if(value == 'category'){
                this.isActive = 1;
            }else{
                this.isActive = 2;
            }
        }
    }
}
</script>
<style lang="scss" scoped>
.header {
    position: sticky;
    top: 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    .items {
        display: flex;
	    justify-content: space-around;
        list-style: none;
        .item {
            width: 100%;
            padding: 10px;
            text-align: center;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 600;
            color: #444;
            background-color: #f2f2f2;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease 0s;
            -webkit-transition: all 0.2s ease 0s;
            &::after {
                position: absolute;
                content: '';
                width: 0;
                height: 3px;
                border-bottom: 3px solid #f19024;
                bottom: 0;
                transition: all 0.2s ease 0s;
                -webkit-transition: all 0.2s ease 0s;
            }
            &:first-child::after {
                right: 0;
            }
            &:last-child::after {
                left: 0;
            }
            &.active::after {
                width: 100%;
            }
        }
    }
}
.body {
    .cat_data {
        overflow: auto;
        height: calc(100vh - 108px);
    }
    .cat_data, .menu_data {
        animation: fadeIn .2s;
        -webkit-animation: fadeIn .2s;
        -moz-animation: fadeIn .2s;
        -o-animation: fadeIn .2s;
        -ms-animation: fadeIn .2s;
    }
    .menu_data {
        padding: 12px 0;
        .items {
            list-style: none;
            .item {
                .link {
                    display: block;
                    padding: 8px 16px;
                    font-size: 14px;
                    color: #444;
                    text-decoration: none;
                    transition: all 0.3s ease 0s;
                    -webkit-transition: all 0.3s ease 0s;
                    &:hover {
                       color: #f19024;
                    }
                }
            }
        }
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @-moz-keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @-webkit-keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    @-o-keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    @-ms-keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
}



$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    
}
@media (max-width: #{$tablet-width}) {
    .cat_data {
        overflow: auto;
        height: calc(100vh - 108px);
    }
}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>