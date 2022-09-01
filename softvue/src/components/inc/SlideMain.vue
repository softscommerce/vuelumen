<template>
    <div class="slider">
        <div class="items">
            <div class="item">
                <img src="https://rukminim1.flixcart.com/flap/1688/280/image/8d8c292a102363ce.jpg?q=50" alt="Slider Image">
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
            max-height: 300px;
            height: 100%;
            overflow: hidden;
            display: grid;
            img {
                width: 100%;
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
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>