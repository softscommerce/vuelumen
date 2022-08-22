<template>
    <div class="pdt_details">
        <div class="left">
            <div class="view">
                <div class="main_img">
                    <img class="img" src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Main Image">
                </div>
                <div class="slider">
                    <ul class="items">
                        <li class="item">
                            <img class="img" src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Slide Image">
                        </li>
                        <li class="item">
                            <img class="img" src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Slide Image">
                        </li>
                        <li class="item">
                            <img class="img" src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Slide Image">
                        </li>
                        <li class="item">
                            <img class="img" src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Slide Image">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="details">
                <h1 class="title">I-Phone 14 Max Pro Version of America</h1>
                <div class="pdt_rating">
                    <div class="rating">
                        <div class="bottom">
                            <div class="top"></div>
                        </div>
                        <div class="point">( 4.7 )</div>
                    </div>
                </div>
                <div class="des">
                    Go sporty this summer with this vintage navy and white striped v-neck t-shirt from the Nike. Perfect for pairing with denim and white kicks for a stylish sporty vibe.
                </div>
                <div class="price">$590.00</div>
                <div class="color _dtls">
                    <div class="title">Color: </div>
                    <ul class="items">
                        <li class="item" style="background:black"></li>
                        <li class="item" style="background:pink"></li>
                        <li class="item" style="background:green"></li>
                        <li class="item" style="background:red"></li>
                    </ul>
                </div>
                <div class="quantity _dtls">
                    <div class="title">Quantity: </div>
                    <div class="qty">
                        <form>
                            <button type="button" class="minus" @click="count--">&minus;</button>
                            <input type="text" :value="count">
                            <button type="button" class="plus" @click="count++">&plus;</button>
                        </form>
                    </div>
                </div>
                <div class="actions">
                    <form class="add_to_cart">
                        <button type="button">Add To Cart</button>
                    </form>
                </div>
                <!-- <div class="com_wish">
                    <router-link to="" class="link"><span>&#8652;</span> Compare</router-link>
                    <router-link to="" class="link"><span>&#10084;</span> Add To Wishlist</router-link>
                </div> -->
                <div class="sku _dtls">
                    <div class="title">SKU: </div>
                    <div class="code">SE-56546</div>
                </div>
                <div class="category _dtls">
                    <div class="title">Category: </div>
                    <div class="name">Phones</div>
                </div>
                <div class="social _dtls">
                    <div class="title">Share: </div>
                    <ul class="items">
                        <li class="item">
                            <router-link to="" class="link facebook"></router-link>
                        </li>
                        <li class="item">
                            <router-link to="" class="link twitter"></router-link>
                        </li>
                        <li class="item">
                            <router-link to="" class="link instagram"></router-link>
                        </li>
                        <li class="item">
                            <router-link to="" class="link linkedin"></router-link>
                        </li>
                        <li class="item">
                            <router-link to="" class="link pinterest"></router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            count: 1,
        }
    },
}
</script>
<style lang="scss" scoped>
.pdt_details {
    position: relative;
    display: flex;
    column-gap: 20px;
    .left {
        width: 40%;
        .view {
            display: flex;
            flex-direction: column;
            row-gap: 16px;
            .slider {
                width: 100%;
                .items {
                    list-style: none;
                    display: flex;
                    column-gap: 10px;
                    .item {
                        width: 100px;
                        height: 100px;
                        overflow: hidden;
                        .img {
                            width: 100%;
                        }
                    }
                }
            }
            .main_img {
                width: 100%;
                .img {
                    width: 100%;
                }
            }
        }
    }
    .right {
        width: 60%;
        .details {
            .title {
                font-size: 24px;
                color: #444;
                font-weight: 500;
                margin-bottom: 8px;
            }
            .pdt_rating {
                margin-bottom: 20px;
                .rating {
                    display: flex;
                    column-gap: 12px;
                    .bottom {
                        position: relative;
                        background-image: url('@/assets/icons/star.png');
                        background-repeat: repeat-x;
                        background-size: contain;
                        width: 80px;
                        height: 16px;
                        fill: #777777;
                        display: block;
                        .top {
                            position: absolute;
                            background-image: url('@/assets/icons/star(1).png');
                            background-repeat: repeat-x;
                            background-size: contain;
                            width: 87%;
                            height: 16px;
                            fill: #f19024;
                            display: block;
                        }
                    }
                    .point {
                        font-size: 14px;
                        color: #777777;
                    }
                }
            }
            .des {
                font-size: 14px;
                color: #777;
                line-height: 28px;
                margin-bottom: 12px;
            }
            .price {
                font-size: 24px;
                color: #f19024;
                font-weight: 600;
                margin-bottom: 20px;
            }
            ._dtls {
                display: flex;
                column-gap: 16px;
                align-items: center;
                .title {
                    font-size: 15px;
                    font-weight: 600;
                    margin-bottom: 0;
                }
            }
            .color {
                margin-bottom: 30px;
                .items {
                    list-style: none;
                    display: flex;
                    column-gap: 8px;
                    .item {
                        width: 24px;
                        height: 24px;
                        border-radius: 50%;
                        display: inline-block;
                        cursor: pointer;
                    }
                }
            }
            .quantity {
                margin-bottom: 24px;
                .qty {
                    form {
                        display: flex;
                        height: 36px;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        overflow: hidden;
                        button {
                            width:24px;
                            border: none;
                            font-size: 18px;
                            cursor: pointer;
                            &:hover {
                                background-color: #5492bc;
                                color: #fff;
                            }
                        }
                        input {
                            width: 50px;
                            border: none;
                            outline: none;
                            pointer-events: none;
                            padding: 4px;
                            text-align: center;
                            font-size: 18px;
                            &:focus {
                                box-shadow: none;
                            }
                        }
                    }
                }
            }
            .actions {
                margin-bottom: 30px;
                .add_to_cart {
                    button {
                        border: none;
                        outline: none;
                        background: #f19024;
                        color: #fff;
                        padding: 12px 24px;
                        font-size: 16px;
                        letter-spacing: 1px;
                        border-radius: 4px;
                        cursor: pointer;
                        box-shadow: 0 5px 35px rgba(0,0,0,0.30);
                        &:hover {
                            background: #b96709;
                        }
                    }
                }
            }
            .com_wish {
                display: flex;
                column-gap: 30px;
                border-bottom: 1px solid #ddd;
                padding-bottom: 8px;
                margin-bottom: 30px;
                .link {
                    color: #777;
                    font-size: 14px;
                    span {
                        color: #f19024;
                        padding-right: 4px;
                        font-size: 16px;
                    }
                }
            }
            .sku {
                margin-bottom: 24px;
                border-top: 1px solid #ddd;
                padding-top: 20px;
                .code {
                    font-size: 14px;
                    color: #777777;
                }
            }
            .category {
                margin-bottom: 24px;
                .name {
                    font-size: 14px;
                    color: #777777;
                }
            }
            .social {
                .items {
                    list-style: none;
                    display: flex;
                    column-gap: 12px;
                    .item {
                        .link {
                            background-size: contain;
                            background-position: center;
                            background-repeat: no-repeat;
                            width: 14px;
                            height: 14px;
                            cursor: pointer;
                            display: inline-block;
                            overflow: hidden;
                            transition: all 0.3s ease 0s;
                            -webkit-transition: all 0.3s ease 0s;
                        }
                        .facebook {
                            background-image: url('@/assets/icons/social/facebook.png');
                            &:hover {
                                background-image: url('@/assets/icons/social/facebook(1).png');
                            }
                        }
                        .twitter {
                            background-image: url('@/assets/icons/social/twitter.png');
                            &:hover {
                                background-image: url('@/assets/icons/social/twitter(1).png');
                            }
                        }
                        .instagram {
                            background-image: url('@/assets/icons/social/instagram.png');
                            &:hover {
                                background-image: url('@/assets/icons/social/instagram(1).png');
                            }
                        }
                        .linkedin {
                            background-image: url('@/assets/icons/social/linkedin.png');
                            &:hover {
                                background-image: url('@/assets/icons/social/linkedin(1).png');
                            }
                        }
                        .pinterest {
                            background-image: url('@/assets/icons/social/pinterest.png');
                            &:hover {
                                background-image: url('@/assets/icons/social/pinterest(1).png');
                            }
                        }
                    }
                }
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
    .pdt_details {
        display: block;
    }
    .pdt_details .left {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 40px;
    }
    .pdt_details .right {
        width: 100%;
    }
    .pdt_details .right .details .title {
        font-size: 20px;
    }
    .pdt_details .right .details ._dtls .title {
        font-size: 14px;
    }
    .pdt_details .left .view .slider .items .item .img {
        border: 1px solid #ddd;
    }
    .pdt_details .right .details .actions .add_to_cart button {
        padding: 8px 24px;
        font-size: 15px;
    }
}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>