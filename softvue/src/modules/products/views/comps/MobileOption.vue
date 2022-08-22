<template>
    <div class="moble_toolbar">
        <div class="tools">
            <div class="item">
                <router-link to="/products" class="link">
                    <div class="icon">
                        <img src="@/assets/icons/home.png" alt="Shop">
                    </div>
                    <div class="text">Shop</div>
                </router-link>
            </div>
            <div class="item">
                <router-link to="" class="link">
                    <div class="icon">
                        <img src="@/assets/icons/heart.png" alt="Wishlist">
                    </div>
                    <div class="text">Wishlist</div>
                </router-link>
            </div>
            <div class="item">
                <router-link to="/" class="link">
                    <div class="icon">
                        <img src="@/assets/icons/home.png" alt="Home">
                    </div>
                    <div class="text">Home</div>
                </router-link>
            </div>
            <div class="item">
                <router-link to="" class="link">
                    <div class="icon">
                        <img src="@/assets/icons/user.png" alt="Account">
                    </div>
                    <div class="text">My Account</div>
                </router-link>
            </div>
            <div class="item">
                <router-link to="" class="link">
                    <div class="icon">
                        <img src="@/assets/icons/search(3).png" alt="Search">
                    </div>
                    <div class="text">Search</div>
                </router-link>
            </div>
        </div>
    </div>
</template>
<style lang="scss" scoped>
.moble_toolbar {
    display: none;
}

$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    
}
@media (max-width: #{$tablet-width}) {
    .moble_toolbar {
        display: block;
        position: relative;
        .tools {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 70px;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.15);
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #fff;
            z-index: 999;
            .item {
                .link {
                    text-decoration: none;
                    padding: 4px;
                    .icon {
                        width: 20px;
                        height: 20px;
                        overflow: hidden;
                        margin: auto;
                        margin-bottom: 4px;
                        img {
                            width: 100%;
                            height: 100%;
                        }
                    }
                    .text {
                        font-size: 12px;
                        color: #444;
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