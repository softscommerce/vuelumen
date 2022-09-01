<template>
    <div class="our_services">
        <div class="item">
            <router-link to="/products" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>Products</h4>
            </router-link>
        </div>
        <div class="item">
            <router-link to="" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>Services</h4>
            </router-link>
        </div>
        <div class="item">
            <router-link to="" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>Soft Market</h4>
            </router-link>
        </div>
        <div class="item">
            <router-link to="" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>Course</h4>
            </router-link>
        </div>
        <div class="item">
            <router-link to="" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>Apply</h4>
            </router-link>
        </div>
        <div class="item">
            <router-link to="" class="link">
                <div class="thumb">
                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                </div>
                <h4>My Account</h4>
            </router-link>
        </div>
    </div>
</template>
<style lang="scss" scoped>

.our_services {
    display: grid;
    height: auto;
    align-content: start;
    grid-template-columns: repeat(3, minmax(200px, 1fr));
    gap: 30px;
    padding: 30px;
    .item {
        // background-color: #2980b9;
        // background-image: radial-gradient(#95d5ff, #212b91);
        // background-image: radial-gradient(#d61326, #161515);
        background: linear-gradient(306deg, #d61326 0, #161515 100%);
        text-align: center;
        border-radius: 8px;
        transition: all 0.4s ease 0s;
        -webkit-transition: all 0.4s ease 0s;
        &:hover {
            box-shadow: 0 3px 16px rgba(0, 0, 0, 0.55);
            img {
                transform: scale(1.1, 1.1);
                transition: all .4s ease 0s;
                -webkit-transition: .4s;
            }
        }
        .link {
            cursor: pointer;
            padding: 30px;
            display: block;
            text-decoration: none;
            .thumb {
                display: inline-block;
                border-radius: 50%;
                width: 90px;
                height: 90px;
                line-height: 90px;
                text-align: center;
                // background-color: #2980b9;
                // background: linear-gradient(#2980b9, #171e6a);
                background-image: radial-gradient(#d61326, #161515);
                box-shadow: 0 3px 12px rgba(0, 0, 0, 0.3);
                img {
                    max-width: 100%;
                    padding: 25px;
                    transition: all .5s ease 0s;
                    -webkit-transition: .5s;
                }
            }
            h4 {
                color: #fff;
                margin-top: 20px;
            }
        }
    }
}


$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    .our_services {
        grid-template-columns: repeat(2, minmax(200px, 1fr));
    }
}
@media (max-width: #{$tablet-width}) {
    .our_services {
        grid-template-columns: repeat(2, minmax(200px, 1fr));
        row-gap: 60px;
        column-gap: 20px;
        .item {
            background-color: transparent;
            background-image: none;
            border-radius: 0;
            &:hover {
                box-shadow: none;
            }
            .link {
                padding: 0;
                .thumb {
                    width: 70px;
                    height: 70px;
                    line-height: 70px;
                    border-radius: 20px;
                    img {
                        padding: 20px;
                    }
                }
                h4 {
                    color: #444;
                    margin-top: 12px;
                    font-size: 12px;
                }
            }
        }
    }
}

@media (max-width: #{$phone-width}) {
    .our_services {
        grid-template-columns: repeat(3, minmax(80px, 1fr));
        row-gap: 40px;
    }
}


</style>