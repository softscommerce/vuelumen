<template>
    <div class="sidebar" :class="[PdtFilterSlide ? 'active' : '']">
        <div class="scroll">
            <aside class="aside">
                <h2 class="heading">Filters</h2>
                <div class="category">
                    <div class="title">Categories</div>
                    <ul class="items">
                        <li class="item tree" @click="catIsInvalid =! catIsInvalid">
                            <router-link to="" class="link">T-Shirts</router-link>
                            <ul class="items" v-if="catIsInvalid">
                                <li class="item">
                                    <router-link to="" class="link">Loafers</router-link>
                                </li>
                                <li class="item">
                                    <router-link to="" class="link">Jeans</router-link>
                                </li>
                                <li class="item">
                                    <router-link to="" class="link">Loafers</router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="item tree" @click="catIsInvalid =! catIsInvalid">
                            <router-link to="" class="link">Jeans</router-link>
                            <ul class="items" v-if="catIsInvalid">
                                <li class="item">
                                    <router-link to="" class="link">Jeans</router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="item">
                            <router-link to="" class="link">Loafers</router-link>
                        </li>
                    </ul>
                </div>

                <div class="price filter">
                    <div class="title">Price</div>
                    <div class="price_range">
                        <form class="form">
                            <input type="range" class="range_show" min="20" max="50">
                            <div class="range">
                                <input type="text" class="left" placeholder="Min">
                                <input type="text" class="right" placeholder="Max">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="gander filter" @click="ClickFilterShow('gander')">
                    <div class="title arrow" :class="[filter_value == 'gander' ? '_up':'']">Ganger</div>
                    <ul class="items" v-if="filter_value == 'gander'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Men</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Women</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Men & Women</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">T-Shirts</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Jeans</div>
                        </li>
                    </ul>
                </div>

                <div class="discount filter" @click="ClickFilterShow('discount')">
                    <div class="title arrow" :class="[filter_value == 'discount' ? '_up':'']">Discount</div>
                    <ul class="items" v-if="filter_value == 'discount'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">10%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">20%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">30%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">40%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">50%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">60%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">70%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">80%</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">90%</div>
                        </li>
                    </ul>
                </div>

                <div class="size filter" @click="ClickFilterShow('size')">
                    <div class="title arrow" :class="[filter_value == 'size' ? '_up':'']">Size</div>
                    <ul class="items" v-if="filter_value == 'size'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">S</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">M</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">L</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">XL</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">XXL</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">XXL</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Free</div>
                        </li>
                    </ul>
                </div>

                <div class="rating filter" @click="ClickFilterShow('rating')">
                    <div class="title arrow" :class="[filter_value == 'rating' ? '_up':'']">Customer Rating</div>
                    <ul class="items" v-if="filter_value == 'rating'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">4 <span class="star">&#9733;</span> & above</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">3 <span class="star">&#9733;</span> & above</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">2 <span class="star">&#9733;</span> & above</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">1 <span class="star">&#9733;</span> & above</div>
                        </li>
                    </ul>
                </div>

                <div class="color filter" @click="ClickFilterShow('color')">
                    <div class="title arrow" :class="[filter_value == 'color' ? '_up':'']">Color</div>
                    <ul class="items" v-if="filter_value == 'color'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text"><span class="_clr" style="background: black"></span> Block</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text"><span class="_clr" style="background: pink"></span> Pink</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text"><span class="_clr" style="background: green"></span> Green</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text"><span class="_clr" style="background: red"></span> Red</div>
                        </li>
                    </ul>
                </div>

                <div class="brand filter" @click="ClickFilterShow('brand')">
                    <div class="title arrow" :class="[filter_value == 'brand' ? '_up':'']">Brand</div>
                    <ul class="items" v-if="filter_value == 'brand'">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Allen Solly</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">CHEROKEE</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Dressberry</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">FLYING MACHINE</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">GINI & JONY</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">HERE&NOW</div>
                        </li>
                    </ul>
                </div>

                <div class="offer filter">
                    <div class="title">Offers</div>
                    <ul class="items">
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Buy More, Save More</div>
                        </li>
                        <li class="item">
                            <div class="checkbox">
                                <span class="box">&#9744;</span>
                                <span class="check">&check;</span>
                            </div>
                            <div class="text">Special Price</div>
                        </li>
                    </ul>
                </div>
                
            </aside>
        </div>
    </div>
</template>
<script>
import SiteOverlayStore from "../../../../store/SiteOverlayStore.js"
export default {
    name: 'FilterSidebar',
    setup() {
        const { PdtFilterSlide, } = SiteOverlayStore();
        return {
            PdtFilterSlide:PdtFilterSlide(),
        }
    },
    data() {
        return {
            filter_value:'',
            catIsInvalid:false,
        }
    },

    methods: {
        ClickFilterShow(value) {
            if(this.filter_value == ''){
                this.filter_value = value;
            }else if(this.filter_value != value){
                this.filter_value = value;
            }else{
                this.filter_value = '';
            }
            
        },
    }
}
</script>

<style lang="scss" scoped>
.sidebar {
    width: 240px;
    position: relative;
    border-right: 1px solid #ddd;
    .scroll {
        position: sticky;
        top: 0;
        height: calc(100vh - 0px);
        overflow-y: auto;
        scrollbar-width: none;
        transition: all 0.3s ease 0s;
        -webkit-transition: all 0.3s ease 0s;
        &:hover {
            scrollbar-width: thin;
        }
    }
    /* Chrome Scroll Support Css */
    .scroll::-webkit-scrollbar {
        height: 10px;
        width: 10px;
    }
    .scroll::-webkit-scrollbar-thumb {
        background: #b9b9b9;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        display: none;
        transition: all 0.3s ease 0s;
        -webkit-transition: all 0.3s ease 0s;
    }
    .scroll:hover::-webkit-scrollbar-thumb {
        display: block;
    }
    /* Buttons */
    .scroll:hover::-webkit-scrollbar-button:single-button {
        background-color: #d3d3d396;
        display: block;
        background-size: 10px;
        background-repeat: no-repeat;
    }
    /* Up */
    .scroll:hover::-webkit-scrollbar-button:single-button:vertical:decrement {
        height: 12px;
        width: 16px;
        background-position: center 4px;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='rgb(96, 96, 96)'><polygon points='50,00 0,50 100,50'/></svg>");
    }
    // Down
    .scroll:hover::-webkit-scrollbar-button:single-button:vertical:increment {
        height: 12px;
        width: 16px;
        background-position: center 2px;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='rgb(96, 96, 96)'><polygon points='0,0 100,0 50,50'/></svg>");
    }
}
.aside {
    padding: 0 8px;
    .heading {
        font-size: 18px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 8px;
        padding: 16px 16px 8px;
    }
    .category {
        padding: 12px 16px;
        .title {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
        }
        .items {
            list-style: none;
            .item {
                line-height: 24px;
                .link {
                    font-size: 13px;
                    color: #777;
                    padding: 2px 12px;
                    cursor: pointer;
                }
            }
        }
        .item.tree {
            .items {
                .item {
                    .link {
                        padding: 0 24px;
                    }
                }
            }
        }

        .item.tree > .link {
            position: relative;
        }
        .item.tree > .link::before {
            position: absolute;
            content: '';
            background-image: url('@/assets/icons/arrow_right.png');
            background-repeat: no-repeat;
            background-size: 10px;
            width: 12px;
            height: 12px;
            right: -12px;
            bottom: 2px;
        }
    }
    // Price Range
    .price {
        .price_range {
            width: 100%;
            .range_show {
                width:100%;
            }
            .range {
                width: 100%;
                display: flex;
                justify-content: space-between;
                column-gap: 50px;
                margin-top: 8px;
                input {
                    width: 60px;
                    height: 30px;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    outline: none;
                    padding: 6px;
                    &:focus {
                        box-shadow: none;
                    }
                }
            }
        }
    }
    // Gander / Discount
    .filter {
        padding: 12px 16px;
        .title {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            cursor: pointer;
        }
        .title.arrow {
            position: relative;
            &::after {
                position: absolute;
                content: '';
                background-image: url('@/assets/icons/arrow_down.png');
                background-repeat: no-repeat;
                background-size: 10px;
                width: 12px;
                height: 12px;
                bottom: 0;
                right: 0;
                margin-left: 6px;
            }
            &._up::after {
                position: absolute;
                content: '';
                background-image: url('@/assets/icons/arrow_up.png');
            }
        }
        .items {
            list-style: none;
            .item {
                display: flex;
                column-gap: 8px;
                align-items: center;
                font-size: 13px;
                color: #777;
                cursor: pointer;
                margin-bottom: 4px;
                &:hover .checkbox .check {
                    display: block;
                    visibility: visible;
                    opacity: 1;
                }
                .checkbox {
                    position: relative;
                    .box {
                        font-size: 20px;
                    }
                    .check {
                        font-size: 20px;
                        position: absolute;
                        left: 3px;
                        top: -3px;
                        color: #f19024;
                        visibility: hidden;
                        opacity: 0;
                        transition: all 0.1s ease-in 0.1s;
                        -webkit-transition: all 0.1s ease-in 0.1s;
                    }
                }
                .text {
                    display: flex;
                    align-items: center;
                    column-gap: 6px;
                    .star {
                        color: #f19024;
                    }
                    ._clr {
                        width: 16px;
                        height: 16px;
                        border-radius: 50px;
                        display: inline-block;
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
    .sidebar {
        position: fixed;
        display: block;
        width: 0;
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
        .scroll {
            height: calc(100vh - 70px);
        }
    }


}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>