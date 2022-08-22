<template>
    <div class="header">
        <div class="left">
            <div class="logo">
                <router-link to="/" class="home_link">
                    <img src="@/assets/soft.png" alt="Logo">
                </router-link>
            </div>
        </div>
        <div class="middle">
            <div class="search">
                <form>
                    <input type="text" placeholder="Search Product...">
                    <button type="button">
                        <img src="@/assets/icons/search.svg" alt="Search">
                    </button>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="balance">
                <router-link to="" class="link">
                    <img src="@/assets/icons/balance.svg" alt="Balance">
                    <div class="join">(200)</div>
                </router-link>
            </div>
            <div class="cart">
                <router-link to="/cart" class="link">
                    <img src="@/assets/icons/cart.svg" alt="Cart">
                    <div class="join">(0)</div>
                </router-link>
            </div>
            <div class="shop_info">
                <router-link to="" class="link">
                    Shop Info
                </router-link>
            </div>
        </div>
    </div>

    <div class="mobile_header">
        <div class="nav">
            <div class="left">
                <div class="toggle" @click="PdtCategorySlideShowBtn">
                    <span class="toggle_btn"></span>
                </div>
            </div>
            <div class="middle">
                <div class="logo">
                    <router-link to="/" class="link">
                        <img src="@/assets/soft.png" alt="logo">
                    </router-link>
                </div>
            </div>
            <div class="right">
                <div class="search">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M62.52,55.58c-3.49-3.57-7.02-7.09-10.55-10.62c-0.91-0.91-2.01-1.44-3.32-1.46
                                c-0.29-0.01-0.46-0.17-0.64-0.34c-1.29-1.3-2.6-2.58-3.87-3.91c-0.41-0.43-0.6-0.5-1,0.03c-1.11,1.49-2.42,2.81-3.89,3.95
                                c-0.42,0.33-0.32,0.48-0.01,0.79c1.34,1.31,2.64,2.66,3.97,3.98c0.22,0.22,0.34,0.43,0.36,0.76c0.08,1.22,0.55,2.29,1.42,3.16
                                c3.59,3.59,7.17,7.18,10.76,10.77c0.91,0.91,2.04,1.29,3.21,1.33c2.03,0,3.83-1.14,4.58-2.94C64.39,59.03,64.05,57.14,62.52,55.58z
                                "/>
                            <path class="st0" d="M46,23.12C46,10.35,35.7,0,23,0C10.3,0,0,10.35,0,23.12s10.3,23.11,23,23.11C35.7,46.23,46,35.88,46,23.12z
                                M22.96,41.46C12.84,41.44,4.67,33.2,4.7,23.05C4.74,12.85,12.89,4.7,23.03,4.71c10.13,0.01,18.28,8.23,18.26,18.4
                                C41.28,33.28,33.08,41.49,22.96,41.46z"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import SiteOverlayStore from "../../../../store/SiteOverlayStore.js"
 
export default {
    name: 'ProductHeader',
    setup() {
       const {
            PdtCategorySlideShowBtn,
        } = SiteOverlayStore();

        return {
            PdtCategorySlideShowBtn,
        }       
    },
}
</script>
<style lang="scss" scoped>
.header {
    display: flex;
    align-items: center;
    column-gap: 12px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    margin-bottom: 20px;
    padding: 16px;
    .left,.right {
        width: 25%;
    }
    .left {
        .logo {
            height: 40px;
            img {
                max-height: 100%;
            }
        }
    }
    .middle {
        width: 50%;
        .search {
            display: flex;
            justify-content: center;
            form {
                display: flex;
                border: 1px solid #ddd;
                box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                width: fit-content;
                height: 40px;
                border-radius: 8px;
                overflow: hidden;
                input {
                    width: 450px;
                    border: none;
                    outline: none;
                    padding: 4px 12px;
                    font-size: 16px;
                    color: #444;
                    letter-spacing: 1px;
                    &::placeholder {
                        color: #aaa;
                    }
                }
                button {
                    border: none;
                    outline: none;
                    width: 40px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    background: #f2f2f2;
                    &:hover {
                        background: #ccc;
                    }
                    img {
                        width: 20px;
                    }
                }
            }
        }
    }
    .right {
        display: flex;
        align-items: center;
        justify-content: end;
        column-gap: 16px;
        .balance, .cart {
            display: inline-block;
            .link {
                display: flex;
                column-gap: 4px;
                cursor: pointer;
                img {
                    width: 24px;
                    height: 24px;
                }
                .join {
                    font-size: 12px;
                    color: #444;
                }
            }
        }
        .shop_info {
            .link {
                background-color: #f19024;
                padding: 8px 16px;
                border-radius: 8px;
                color: #fff;
                letter-spacing: 1px;
                font-size: 14px;
                cursor: pointer;
                &:hover {
                    background: #b96709;
                }
            }
        }
    }
}

.mobile_header {
    display: none;
}


$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    
}
@media (max-width: #{$tablet-width}) {
    .header {
        display: none;
    }
    .mobile_header {
        display: block;
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        padding: 16px;
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            column-gap: 20px;
            .left, .right {
                width: 25%;
            }
            .left {
                .toggle {
                    position: relative;
                    display: block;
                    width: 24px;
                    height: 2px;
                    cursor: pointer;
                    background-color: #444;
                    &::before, 
                    &::after {
                        position: absolute;
                        content: '';
                        height: 2px;
                        background-color: #444;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                    }
                    &::before {
                        width: 16px;
                        top: -7px;
                    }
                    &::after {
                        width: 8px;
                        bottom: -7px;
                    }
                    &:hover {
                        background-color: #f19024;
                    }
                    &:hover::before,
                    &:hover::after {
                        width: 24px;
                        background-color: #f19024;
                    }
                    .toggle_btn {
                        position: absolute;
                        width: 30px;
                        height: 24px;
                        display: block;
                        margin-top: -11px;
                        margin-left: -3px;
                        cursor: pointer;
                    }
                }
            }
            .middle {
                width: 50%;
                .logo {
                    display: flex;
                    justify-content: center;
                    .link {
                        height: 60px;
                        cursor: pointer;
                        img {
                            height: 100%;
                        }
                    }
                }
            }
            .right {
                .search {
                    width: 20px;
                    height: 20px;
                    margin-left: auto;
                    cursor: pointer;
                    svg {
                        width: 100%;
                        height: 100%;
                        fill: #444;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                        &:hover {
                            fill: #f19024;
                        }
                    }
                }
            }
        }
    }
}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>