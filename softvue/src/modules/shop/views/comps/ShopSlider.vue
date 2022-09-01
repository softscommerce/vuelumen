<template>
    <div class="slider">
        <div class="items">
            <div class="item">
                <img src="@/assets/shop/slider-1.jpg" alt="Slider Image">
                <div class="content">
                    <div class="inner">
                        <h4>new collection</h4>
                        <h1>MEN’S FASHION</h1>
                        <h5>SAVE UP TO 40% OFF</h5>
                        <base-button small="boder_radius1 fs_1">Shop Now</base-button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide_arrow">
            <div class="arrow left">
                <img src="@/assets/icons/arrow_left.png" alt="Left Arrow">
            </div>
            <div class="arrow right">
                <img src="@/assets/icons/arrow_right.png" alt="Right Arror">
            </div>
        </div>
        <div class="slide_dots">
            <div class="dot active"></div>
            <div class="dot"></div>
        </div>
    </div>
</template>
<style lang="scss" scoped>
.slider {
    position: relative;
    // width: 100%;
    // margin: auto;
    // display: block;
    .items {
        width: 100%;
        .item {
            width: 100%;
            max-height: 550px;
            height: 100%;
            overflow: hidden;
            display: grid;
            img {
                width: 100%;
            }
            .content {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                display: flex;
                align-items: center;
                z-index: 1;
                .inner {
                    padding-left: 200px;
                    color: #fff;
                    h4 {
                        margin-bottom: 20px;
                        font-size: 24px;
                    }
                    h1 {
                        margin-bottom: 16px;
                        font-size: 40px;
                    }
                    h5 {
                        margin-bottom: 40px;
                        font-size: 16px;
                    }
                }
            }
        }
    }
    .slide_arrow {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        .arrow {
            position: absolute;
            top: 50%;
            width: 40px;
            height: 70px;
            transform: translateY(-50%);
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1;
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            &:hover {
                background-color: #eee;
            }
            &:hover img {
                transform: scale(1.2);
            }
            img {
                width: 24px;
                transition: all 0.8s ease 0s;
	            -webkit-transition: all 0.8s ease 0s;
            }
        }
        .left {
            left: 0;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .right {
            right: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
    }
    .slide_dots {
        position: absolute;
        left: 50%;
        bottom: 12px;
        transform: translateX(-50%);
        display: flex;
        column-gap: 12px;
        z-index: 1;
        .dot {
            width: 16px;
            height: 16px;
            background-color: #777;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            &:hover {
                background-color: #444;
            }
        }
        .active {
            background-color: #f19024;
            &:hover {
                background-color: #f19024;
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
    .slider {
        .items {
            .item {
                .content {
                    .inner {
                        padding-left: 80px;
                        h4 {
                            margin-bottom: 8px;
                            font-size: 16px;
                        }
                        h1 {
                            margin-bottom: 12px;
                            font-size: 28px;
                        }
                        h5 {
                            margin-bottom: 16px;
                            font-size: 13px;
                        }
                        button {
                            padding: 8px 16px;
                            font-size: 13px;
                        }
                    }
                }
            }
        }
        .slide_arrow {
            .arrow {
                width: 25px;
                height: 45px;
                img {
                    width: 15px;
                }
            }
        }
        .slide_dots {
            bottom: 4px;
            .dot {
                width: 10px;
                height: 10px;
            }
        }
    }
}

@media (max-width: #{$phone-width}) {
    .slider {
        .items {
            .item {
                .content {
                    .inner {
                        padding-left: 40px;
                        h4 {
                            margin-bottom: 8px;
                            font-size: 15px;
                        }
                        h1 {
                            margin-bottom: 4px;
                            font-size: 18px;
                        }
                        h5 {
                            margin-bottom: 12px;
                            font-size: 10px;
                        }
                        button {
                            padding: 4px 12px;
                            font-size: 12px;
                        }
                    }
                }
            }
        }
    }
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>