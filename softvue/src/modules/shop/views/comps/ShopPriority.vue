<template>
    <div class="shop_priority">
        <div class="heading">
            <div class="left">
                <h4>Priority</h4>
            </div>
            <div class="right">
                <div class="icons">
                    <div class="_left icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <path class="st0" d="M45.09,0c-1.54,0.31-2.58,1.35-3.64,2.41c-8.67,8.72-17.36,17.42-26.05,26.12c-1.38,1.38-1.95,2.96-1.36,4.88
                                c0.23,0.76,0.68,1.37,1.23,1.92c9.04,9.06,18.07,18.13,27.12,27.18c2.38,2.38,5.99,1.83,7.38-1.13c0.73-1.55,0.54-3.08-0.45-4.49
                                c-0.24-0.34-0.53-0.64-0.83-0.93c-7.8-7.82-15.6-15.65-23.42-23.46c-0.38-0.38-0.43-0.58-0.02-0.99
                                c7.86-7.85,15.7-15.72,23.56-23.59c1.36-1.36,1.94-2.94,1.34-4.82c-0.46-1.44-1.44-2.39-2.88-2.88C46.87,0.16,46.62,0.2,46.46,0
                                C46,0,45.54,0,45.09,0z"/>
                        </svg>
                    </div>
                    <div class="_right icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <path class="st0" d="M18.91,0c1.54,0.31,2.58,1.35,3.64,2.41c8.67,8.72,17.36,17.42,26.05,26.12c1.38,1.38,1.95,2.96,1.36,4.88
                                c-0.23,0.76-0.68,1.37-1.23,1.92c-9.04,9.06-18.07,18.13-27.12,27.18c-2.38,2.38-5.99,1.83-7.38-1.13
                                c-0.73-1.55-0.54-3.08,0.45-4.49c0.24-0.34,0.53-0.64,0.83-0.93c7.8-7.82,15.6-15.65,23.42-23.46c0.38-0.38,0.43-0.58,0.02-0.99
                                c-7.86-7.85-15.7-15.72-23.56-23.59c-1.36-1.36-1.94-2.94-1.34-4.82c0.46-1.44,1.44-2.39,2.88-2.88c0.2-0.07,0.46-0.03,0.61-0.23
                                C18,0,18.46,0,18.91,0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <ul class="items">
            <li class="item">
                <router-link to="" class="link">
                    <div class="img">
                        <img src="@/assets/shop/cat/3.jpg" alt="Image">
                    </div>
                    <div class="txt">Men</div>
                </router-link>
            </li>
            <li class="item">
                <router-link to="" class="link">
                    <div class="img">
                        <img src="@/assets/shop/cat/2.jpg" alt="Image">
                    </div>
                    <div class="txt">Women</div>
                </router-link>
            </li>
            <li class="item">
                <router-link to="" class="link">
                    <div class="img">
                        <img src="@/assets/shop/cat/1.jpg" alt="Image">
                    </div>
                    <div class="txt">Accesories</div>
                </router-link>
            </li>
            <li class="item">
                <router-link to="" class="link">
                    <div class="img">
                        <img src="@/assets/shop/cat/3.jpg" alt="Image">
                    </div>
                    <div class="txt">Men</div>
                </router-link>
            </li>
            <li class="item">
                <router-link to="" class="link">
                    <div class="img">
                        <img src="@/assets/shop/cat/2.jpg" alt="Image">
                    </div>
                    <div class="txt">Women</div>
                </router-link>
            </li>
        </ul>
    </div>
</template>
<style lang="scss" scoped>




    .shop_priority {
        padding: 30px;
        .heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            .left {
                h4 {
                    font-size: 18px;
                    color: #444;
                }
            }
            .right {
                .icons {
                    display: flex;
                    column-gap: 12px;
                    .icon {
                        background-color: #fff;
                        border: 1px solid #ddd;
                        width: 24px;
                        height: 24px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                        &:hover {
                            background-color: #5492bc;
                        }
                        &:hover svg {
                            fill: #fff;
                        }
                        svg {
                            width: 12px;
                            fill: #444;
                            transition: all 0.3s ease 0s;
                            -webkit-transition: all 0.3s ease 0s;
                        }
                    }
                }
            }
        }
        .items {
            list-style: none;
            display: grid;
            height: auto;
            align-content: start;
            grid-template-columns: repeat(5, minmax(160px, 1fr));
            column-gap: 30px;
            .item {
                position: relative;
                overflow: hidden;
                .link {
                    position: relative;
                    transition: all 0.5s ease 0s;
                    -webkit-transition: all 0.5s ease 0s;
                    .img {
                        display: block;
                        &::before {
                            position: absolute;
                            content: '';
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background-color: rgba(0, 0, 0, 0.176);
                            visibility: hidden;
                            opacity: 0;
                            overflow: hidden;
                            z-index: 1;
                            transition: all 0.3s ease 0s;
                            -webkit-transition: all 0.3s ease 0s;
                        }
                        &:hover::before {
                            visibility: visible;
                            opacity: 1;
                            overflow: hidden;
                        }
                        &:hover img {
                            transform: scale(1.2);
                        }
                        img {
                            position: relative;
                            max-width: 100%;
                            display: block;
                            transition: all 0.5s ease 0s;
                            -webkit-transition: all 0.5s ease 0s;
                        }
                    }
                    .txt {
                        position: absolute;
                        bottom: 40px;
                        left: 0;
                        z-index: 2;
                        background-color: #fff;
                        padding: 6px 16px;
                        font-weight: 600;
                        color: #444;
                        text-transform: uppercase;
                        font-size: 12px;
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
        .shop_priority {
            .items {
                grid-template-columns: repeat(4, minmax(100px, 1fr));
                .item {
                    &:last-child {
                        display: none;
                    }
                    .link {
                        .txt {
                        }
                    }
                }
            }
        }
    }
    @media (max-width: #{$tablet-width}) {
        .shop_priority {
            .items {
                grid-template-columns: repeat(3, minmax(100px, 1fr));
                .item {
                    &:nth-child(4),
                    &:nth-child(5) {
                        display: none;
                    }
                    .link {
                        .txt {
                        }
                    }
                }
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
    }
    @media (max-width: #{$phone-width-small}) {
    }
</style>