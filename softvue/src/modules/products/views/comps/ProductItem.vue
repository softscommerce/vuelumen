<template>
    <div class="pdt_item">
        <div class="thumb">
            <router-link to="/products/details" class="link"><img src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Product Image"></router-link>
            <div class="offer"><router-link to="#Offer" class="link">39%</router-link></div>
            <div class="inner">
                <div class="cart_view">
                    <router-link to="/products/details" class="cart link">Add To Cart</router-link>
                    <router-link to="/products/details" class="view link">Quick View</router-link>
                </div>
                <div class="wishlist">
                    <router-link to="#Wishlist" class="link"><i class="fa-solid fa-heart"></i></router-link>
                </div>
                <!-- <ul class="size">
                    <li>S</li>
                    <li>M</li>
                    <li>L</li>
                </ul> -->
                <router-link to="/products/details" class="link"></router-link>
            </div>
        </div>
        <div class="content">
            <div class="title"><router-link to="/products/details" class="link">Cluse La Boheme Rose Gold</router-link></div>
            <div class="price">
                <span class="symbol">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                        <path class="st0" d="M53.75,21.39c-6.98,0.02-13.96,0-20.93,0.03c-0.77,0-0.91-0.22-0.9-0.88c0.04-3.2,0.01-6.4,0.02-9.6
                            c0-1.01-0.13-2.01-0.4-2.98c-1.37-4.93-6.6-8.35-12-7.86C14.01,0.61,9.55,4.88,9.2,9.96c-0.04,0.59,0.05,0.82,0.77,0.8
                            c2.02-0.05,4.04-0.03,6.06-0.01c0.53,0.01,0.71-0.09,0.82-0.63c0.38-1.9,2.15-3.11,4.1-2.92c1.96,0.19,3.38,1.7,3.39,3.65
                            c0.02,3.29-0.02,6.58,0.02,9.86c0.01,0.63-0.23,0.71-0.8,0.7c-2.02-0.03-4.04,0.01-6.06-0.02c-0.55-0.01-0.76,0.08-0.75,0.66
                            c0.05,1.92,0.05,3.85,0,5.78c-0.02,0.64,0.25,0.7,0.81,0.69c1.96-0.03,3.92,0.02,5.87-0.03c0.71-0.02,0.95,0.12,0.94,0.85
                            c-0.05,3.52-0.02,7.05-0.02,10.57c0,0,0,0,0.01,0c0,3.44-0.04,6.87,0.01,10.31c0.11,7.44,6.81,13.7,14.73,13.83
                            c8.12,0.13,14.78-5.47,15.53-13.05c0.42-4.19-2.15-7.58-6.43-8.15c-2.75-0.37-5.55-0.07-8.32-0.12c-0.48-0.01-0.36,0.31-0.36,0.55
                            c-0.01,1.98,0.02,3.97-0.02,5.95c-0.01,0.53,0.18,0.63,0.7,0.62c1.7-0.03,3.41-0.01,5.11-0.01c2.08,0,2.08,0,1.48,1.94
                            c-1.04,3.36-4.59,5.59-8.17,5.13c-3.85-0.5-6.66-3.41-6.68-7.03c-0.03-6.84,0-13.69-0.03-20.53c0-0.71,0.22-0.85,0.93-0.85
                            c6.98,0.03,13.96,0,20.93,0.03c0.76,0,0.92-0.2,0.91-0.88c-0.05-1.81-0.06-3.61,0-5.42C54.71,21.52,54.46,21.39,53.75,21.39z"/>
                        </svg>
                </span>
                <span class="amount">10.00</span>
            </div>
        </div>
    </div>
</template>
<style lang="scss" scoped>
.pdt_item {
    background-color: #fff;
    border: 1px solid #f1f1f1;
    border-radius: 4px;
    transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
    &:hover {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
    }
    &:hover img {
        transform: scale(1.1);
    }
    &:hover .thumb .inner {
        visibility: visible;
        opacity: 1;
    }
    &:hover .thumb .inner .cart_view {
        top: 50%;
        visibility: visible;
        opacity: 1;
    }
    .thumb {
        overflow: hidden;
        position: relative;
        max-height: fit-content;
        height: auto;
        .link {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            img {
                max-width: 100%;
                cursor: pointer;
                transition: all 0.8s ease 0s;
                -webkit-transition: all 0.8s ease 0s;
            }
        }
        .offer {
            position: absolute;
            max-width: 100%;
            top: 20px;
            right: 20px;
            z-index: 1;
            .link {
                width: 40px;
                height: 40px;
                background-color: #f19024;
                border-radius: 50%;
                display: inline-block;
                text-align: center;
                line-height: 40px;
                font-size: 14px;
                color: #fff;
                cursor: default;
                text-decoration: none;
            }
        }
        .inner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0000003b;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            .cart_view, .wishlist, .size {
                position: absolute;
                max-width: 100%;
            }
            .cart_view {
                padding: 0 5px;
                top: 40%;
                left: 50%;
                -webkit-transform: translate(-50%,-50%);
                transform: translate(-50%,-50%);
                z-index: 50;
                white-space: nowrap;
                visibility: hidden;
                opacity: 0;
                transition: all 0.5s ease 0s;
                -webkit-transition: all 0.5s ease 0s;
                .link {
                    display: block;
                    background-color: #f19024;
                    color: #fff;
                    margin-bottom: 10px;
                    padding: 6px 16px;
                    font-weight: 600;
                    border-radius: 30px;
                    font-size: 13px;
                    letter-spacing: 1px;
                    text-decoration: none;
                    cursor: pointer;
                    transition: all 0.5s ease 0s;
                    -webkit-transition: all 0.5s ease 0s;
                    &:last-child {
                        margin-bottom: 0;
                    }
                    &:hover {
                        background-color: #f19024;
                        text-decoration: underline;
                    }
                }
            }
            .wishlist {
                left: 10px;
                top: 10px;
                z-index: 1;
                .link {
                    color: #fff;
                    font-size: 20px;
                    transition: all 0.5s ease 0s;
                    -webkit-transition: all 0.5s ease 0s;
                    &:hover {
                        color: #f19024;
                    }
                }
            }
            .size {
                left: 50%;
                bottom: 10px;
                transform: translateX(-50%);
                display: flex;
                li {
                    padding: 0 5px;
                    font-size: 14px;
                    position: relative;
                    color: #fff;
                    background-color: #f19024;
                    margin: 2px;
                    border-radius: 2px;
                    display: inline-block;
                    &::after {
                        position: absolute;
                        content: ',';
                        right: 0;
                    }
                    &:last-child::after {
                        content: '';
                    }
                }
            }
        }
    }
    .content {
        padding: 16px 8px;
        .title .link {
            text-decoration: none;
            color: #444;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.5s ease 0s;
            -webkit-transition: all 0.5s ease 0s;
            &:hover {
                color: #5492bc;
            }
        }
        .price {
            font-size: 22px;
            font-weight: 600;
            color: #f19024;
            margin-top: 8px;
            .symbol {
                svg {
                    width: 20px;
                    fill: #f19024;
                    margin-right: 2px;
                    font-weight: 600;
                }
            }
        }
        .description {
            display: none;
        }
        .cart_view {
            display: none;
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
    .pdt_item .thumb .offer {
        top: 12px;
        right: 12px;
    }
    .pdt_item .thumb .offer .link {
        width: 34px;
        height: 34px;
        line-height: 34px;
        font-size: 11px;
    }
    .pdt_item .content .title .link {
        font-size: 13px;
    }
    .pdt_item .content .price .symbol svg {
        width: 18px;
    }
    .pdt_item .content .price {
        font-size: 18px;
    }
}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    .pdt_item .thumb {
        height: auto;
        max-height: fit-content;
    }
}
</style>