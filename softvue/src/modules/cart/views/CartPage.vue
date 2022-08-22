<template>
<div class="cart_page">
    <div>
        <h3>Cart home ok {{cart.data}}</h3>
        <button @click="jokeData"> Submit</button>
    </div>
    <product-header></product-header>
    <product-category></product-category>

    <div class="vue_pdt_cart">
        <h4>Your Cart</h4>
        <div class="pdt_cart">
            <div class="left">
                <div class="cart_items">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Proudct</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <CartItem></CartItem>
                            <CartItem></CartItem>
                            <CartItem></CartItem>
                            <CartItem></CartItem>
                            <CartItem></CartItem>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right">
                <div class="coupon_code">
                    <form>
                        <input type="text" class="form-control" placeholder="Coupon code">
                        <button type="submit">Aply Coupon</button>
                    </form>
                </div>
                <div class="cart_details">
                    <h4 class="heading">Cart Totals</h4>
                    <ul class="items">
                        <li class="item">
                            <div class="_left">Subtotal</div>
                            <div class="_right">$20.00</div>
                        </li>
                        <li class="item">
                            <div class="_left">Shipping</div>
                            <div class="_right">$2.00</div>
                        </li>
                        <li class="item">
                            <div class="_left"><b>Total</b></div>
                            <div class="_right"><b>$22.00</b></div>
                        </li>
                    </ul>
                    <button type="button">
                        <router-link to="checkout.html" class="link">Checkout</router-link>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import ProductHeader from "../../products/views/comps/ProductHeader.vue";
import ProductCategory from "../../products/views/comps/ProductCategory.vue";
import CartItem from "./comps/CartItem.vue";

import { mapState } from "vuex";

export default {
    name: 'App',
    components:{
        ProductHeader,
        ProductCategory,
        CartItem,
    },
    computed: {
        ...mapState(["cart"]),
    },
    methods: {
        jokeData() {
            this.$store.dispatch("cart/getData");
        },
    },
}
</script>
<style lang="scss" scoped>
    .pdt_category {
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        margin-bottom: 20px;
    }
        
    .vue_pdt_cart {
        padding: 30px;
        width: 100%;
    }
    .vue_pdt_cart > h4 {
        font-size: 20px;
        margin-bottom: 20px;
    }
    .pdt_cart {
        display: flex;
        column-gap: 20px;
        .left {
            width: 65%;
            .cart_items {
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                padding: 20px;
            }
        }
        .right {
            width: 35%;
            .cart_details {
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                padding: 20px;
            }
        }
    }

    

    .table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #d7d7d7;
        }
        tbody {
            tr {
                border-bottom: 1px solid #ddd;
                &:last-child {
                    border-bottom: none;
                }
            }
        }
        td, th {
            padding: 8px;
        }
        td {
            padding: 12px 8px;
        }
        td, td * {
            vertical-align: top;
            text-align: left;
        }
    }

    /* Right Css */
    .coupon_code {
        padding: 20px 16px;
        border-radius: 4px;
        box-shadow: 0 2px 4px #ddd;
    }
    .cart_details {
        .heading {
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
            font-size: 24px;
        }
        .items {
            list-style: none;
            .item {
                display: flex;
                justify-content: space-between;
                line-height: 36px;
                font-weight: 600;
                color: #444;
                &:last-child{
                    color: #000;
                }
            }
        }

    }


    .cart_details {
        .items {
            .item {
                ._right {
                    text-align: right;
                }
            }
        }
    }
    .cart_details {
        button {
            width: 100%;
            margin-top: 20px;
            background-color: #5492bc;
            height: 36px;
            border: none;
            padding: 8px 14px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            &:hover {
                background-color: #49aaeb;
            }
            .link {
                color: var(--white-color);
                display: block;
            }
        }
    }
    .coupon_code {
        margin-bottom: 20px;
        form {
            display: flex;
            column-gap: 10px;
            input {
                flex-basis: 60%;
                border-radius: 30px;
                border: 1px solid #ddd;
                outline: none;
                padding: 4px 16px;
                &:focus {
                    border: 1px solid #5492bc;
                }
            }
            button {
                flex-basis: 40%;
                background-color: #5492bc;
                height: 36px;
                border: none;
                padding: 8px 14px;
                font-weight: 600;
                color: #fff;
                text-transform: uppercase;
                font-size: 14px;
                border-radius: 30px;
                cursor: pointer;
                transition: all 0.3s ease 0s;
                -webkit-transition: all 0.3s ease 0s;
                &:hover {
                    background-color: #49aaeb;
                }
            }
        }
    }




    $phone-width-small: 360px;
    $phone-width: 575px;
    $tablet-width: 767px;
    $desktop-width: 1023px;

    @media (max-width: #{$desktop-width}) {

    }
    @media (max-width: #{$tablet-width}) {
        .pdt_category {
            display: none;
        }
        .pdt_cart {
            display: block;
            .left {
                width: 100%;
                .cart_items {
                    overflow-x: auto;
                }
            }
            .right {
                width: 100%;
                margin-top: 40px;
                .coupon_code {
                    form {
                        button {
                            padding: 8px 10px;
                            font-size: 12px;
                        }
                    }
                }
            }
        }
    }

    @media (max-width: #{$phone-width}) {
        
    }

    @media (max-width: #{$phone-width-small}) {
        .pdt_cart {
            .right {
                .items {
                    
                }
            }
        }
    }
</style>