<template>
    <div class="header_main">
        <div class="wrap">
            <div class="left">
                <div class="toggle" @click="AsideToggleClick">
                    <span class="_line"></span>
                </div>
            </div>
            <div class="middle">
                <div class="logo">
                    <img class="img" src="../../assets/soft.png" alt="Logo">
                </div>
            </div>
            <div class="right">
                <div class="_left">
                    <div class="logo">
                        <img class="img" src="../../assets/soft.png" alt="Logo">
                    </div>
                </div>
                <div class="_middle">
                    <div class="search">
                        <form>
                            <input type="text" placeholder="Search Product...">
                            <button type="button">
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
                            </button>
                        </form>
                    </div>
                </div>
                <div class="_right">
                    <div class="user_options">
                        <ul class="items">
                            <li class="item noti">
                                <router-link to="" class="link">
                                    <svg class="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <g>
                                            <path class="st1" d="M54.46,13.39c-1.08-0.01-2.16-0.02-3.25,0.01c-0.43,0.01-0.58-0.12-0.57-0.56c0.03-1.08,0.01-2.16,0.01-3.25
                                                c0-0.41-0.05-0.8-0.35-1.1c-0.4-0.4-0.87-0.55-1.42-0.34c-0.6,0.23-0.86,0.7-0.87,1.31c-0.02,1.12-0.02,2.25,0,3.37
                                                c0.01,0.43-0.1,0.58-0.55,0.57c-1.06-0.03-2.12-0.01-3.18-0.01c-0.29,0-0.58,0-0.85,0.14c-0.54,0.27-0.81,0.83-0.69,1.46
                                                c0.12,0.62,0.61,1.04,1.35,1.05c1.16,0.02,2.33,0.02,3.5,0c0.32,0,0.44,0.09,0.43,0.42C47.98,17.03,48,17.62,48,18.2
                                                c0,0.54-0.01,1.08,0,1.62c0.02,0.93,0.51,1.51,1.3,1.52c0.82,0.02,1.34-0.55,1.35-1.52c0.01-1.1,0.02-2.21-0.01-3.31
                                                c-0.01-0.39,0.12-0.5,0.5-0.49c1.1,0.02,2.21,0.02,3.31,0.01c0.94-0.01,1.56-0.57,1.54-1.36C55.97,13.91,55.38,13.4,54.46,13.39z"
                                                />
                                            <path class="st0" d="M12.2,14.21c-0.05-0.26-0.09-0.53-0.14-0.8c-0.44-2.17-0.88-4.35-1.32-6.52c-0.23-1.17-0.63-1.5-1.82-1.5
                                                c-2.35,0-4.69,0.02-7.04-0.01C1.06,5.36,0.42,5.55,0,6.29c0,0.29,0,0.58,0,0.88c0.47,0.72,1.14,0.91,1.98,0.89
                                                c1.89-0.04,3.79,0,5.69-0.02c0.43-0.01,0.61,0.09,0.7,0.54c2.08,10.51,4.19,21.01,6.27,31.51c0.97,4.9,4.65,7.96,9.65,7.96
                                                c9.96,0,19.92,0,29.87,0c0.31,0,0.62,0.01,0.93-0.09c0.57-0.2,0.96-0.77,0.9-1.35c-0.06-0.61-0.51-1.1-1.11-1.18
                                                c-0.27-0.04-0.54-0.03-0.81-0.03c-9.9,0-19.79,0-29.69,0c-2.41,0-4.43-0.82-5.89-2.82c-1.13-1.55-1.3-3.38-1.62-5.18
                                                c-0.42-2.01-0.84-4.02-1.24-6.03C14.48,25.64,13.34,19.92,12.2,14.21z"/>
                                            <path class="st0" d="M20.53,51.06c-2.56,0.88-4.4,3.3-4.52,5.94c-0.15,3.21,1.88,5.97,5,6.82c0.16,0.04,0.39,0.01,0.48,0.22
                                                c0.75,0,1.5,0,2.25,0c0.1-0.22,0.33-0.15,0.49-0.19c4.9-1.29,6.69-6.96,3.43-10.84C25.95,50.97,23.07,50.18,20.53,51.06z
                                                M28.06,59.1c-0.59,1.88-2.08,3.25-4.08,3.78c-0.25,0.01-0.45,0.07-0.61,0.15h-1.49c-0.24-0.14-0.48-0.17-0.6-0.18
                                                c-2.68-0.73-4.4-3.07-4.27-5.81c0.1-2.23,1.68-4.3,3.84-5.04c0.58-0.2,1.18-0.3,1.79-0.3c1.64,0,3.23,0.73,4.25,1.95
                                                C28.23,55.24,28.66,57.22,28.06,59.1z"/>
                                            <path class="st0" d="M52.76,51.66c-3.16-1.9-7.25-0.87-9.14,2.29c-2.27,3.78-0.28,8.7,3.97,9.84c0.19,0.05,0.42,0.02,0.54,0.24
                                                c0.75,0,1.5,0,2.25,0c0.05-0.16,0.2-0.11,0.31-0.14c1.89-0.42,3.34-1.47,4.34-3.1C56.96,57.67,55.92,53.56,52.76,51.66z
                                                M54.18,60.28c-0.86,1.4-2.11,2.29-3.71,2.64c-0.19,0-0.35,0.05-0.48,0.11h-1.5c-0.25-0.14-0.49-0.18-0.61-0.2
                                                c-1.75-0.47-3.12-1.69-3.79-3.35c-0.67-1.66-0.53-3.49,0.39-5.02c1.04-1.73,2.86-2.76,4.86-2.76c1.02,0,2.03,0.28,2.91,0.81
                                                c1.31,0.79,2.23,2.03,2.59,3.52C55.2,57.5,54.96,59.01,54.18,60.28z"/>
                                            <path class="st0" d="M44.37,31.23c-7.34-2.27-12.26-9.39-11.96-17.17c0.02-0.56-0.11-0.69-0.66-0.69
                                                c-4.21,0.02-8.42,0.01-12.64,0.01c-2.14,0-4.27,0.01-6.41,0.02c0.05,0.27,0.09,0.53,0.14,0.8c1.13,5.72,2.25,11.44,3.38,17.15
                                                c0.4,2.01,0.82,4.02,1.23,6.03c11.59,0,23.17,0,34.76,0c1.96,0,3.71-0.54,5.14-1.98c1.83-1.84,2.03-4.21,2.14-6.61
                                                c-0.23-0.01-0.36,0.17-0.52,0.28C54.44,32.09,49.54,32.83,44.37,31.23z M56.66,34.69c-1.15,1.15-2.56,1.69-4.45,1.69l-33.96,0
                                                l-0.24-1.15c-0.28-1.36-0.56-2.72-0.83-4.08c-1.01-5.12-2.02-10.23-3.03-15.35l-0.28-1.41l0.76,0c1.49-0.01,2.98-0.01,4.47-0.01
                                                l6.15,0c2.05,0,4.09,0,6.14-0.01c-0.16,8.15,5.01,15.45,12.67,17.81c1.86,0.57,3.71,0.87,5.51,0.87c3.03,0,5.98-0.82,8.78-2.44
                                                C58.19,32.21,57.78,33.57,56.66,34.69z"/>
                                            <path class="st0" d="M59.49,28.79c0,0,0.01,0,0.01,0l-0.01-0.01C59.49,28.79,59.49,28.79,59.49,28.79z"/>
                                            <path class="st0" d="M49.42,0.04c-8.06-0.08-14.75,6.49-14.75,14.64c0,8.09,6.38,14.66,14.63,14.68C57.5,29.38,63.9,22.85,64,14.79
                                                C64.08,6.75,57.53,0.12,49.42,0.04z M49.35,28.36h-0.04c-7.65-0.02-13.64-6.03-13.64-13.68c0-7.52,6.1-13.64,13.6-13.64l0.14,0
                                                c3.66,0.04,7.09,1.49,9.66,4.1c2.57,2.6,3.97,6.03,3.93,9.65C62.91,22.39,56.91,28.36,49.35,28.36z"/>
                                            <path class="st0" d="M54.47,12.39c-0.57-0.01-1.14-0.01-1.7-0.01c-0.37,0-0.74,0-1.11,0.01c0.01-0.59,0-1.16,0-1.74l0-1.06
                                                c0-0.5-0.06-1.23-0.65-1.81c-0.61-0.6-1.23-0.73-1.65-0.73c-0.28,0-0.56,0.05-0.84,0.16c-0.95,0.36-1.5,1.18-1.51,2.23
                                                c-0.01,0.98-0.02,1.96-0.01,2.94c-0.31-0.01-0.62-0.01-0.92-0.01l-1.81,0.01c-0.36,0-0.82,0-1.3,0.24
                                                c-0.94,0.48-1.42,1.47-1.23,2.53c0.21,1.11,1.12,1.84,2.32,1.87c0.56,0.01,1.11,0.02,1.67,0.02c0.42,0,0.84,0,1.26-0.01
                                                c0,0.22,0,1.65,0,1.65c0,0.38,0,0.76,0,1.15c0.03,1.47,0.94,2.47,2.27,2.51c0,0,0,0,0,0c1.43,0,2.36-1.01,2.37-2.51
                                                c0.01-0.93,0.02-1.87,0-2.8c0.38,0,0.75,0.01,1.12,0.01c0.56,0,1.13,0,1.69-0.01c0.77-0.01,1.45-0.28,1.92-0.76
                                                c0.41-0.43,0.63-1.01,0.62-1.62C56.95,13.33,55.92,12.4,54.47,12.39z M54.45,16.04c-1.1,0.01-2.21,0.02-3.31-0.01
                                                c-0.38-0.01-0.5,0.1-0.5,0.49c0.02,1.1,0.02,2.21,0.01,3.31c-0.01,0.97-0.53,1.54-1.35,1.52c-0.79-0.02-1.28-0.59-1.3-1.52
                                                c-0.01-0.54,0-1.08,0-1.62c0-0.58-0.02-1.17,0.01-1.75c0.01-0.33-0.1-0.42-0.43-0.42c-1.17,0.02-2.33,0.02-3.5,0
                                                c-0.74-0.01-1.24-0.43-1.35-1.05c-0.12-0.63,0.15-1.18,0.69-1.46c0.27-0.14,0.56-0.14,0.85-0.14c1.06,0,2.12-0.02,3.18,0.01
                                                c0.45,0.01,0.56-0.14,0.55-0.57c-0.03-1.12-0.02-2.25,0-3.37c0.01-0.61,0.27-1.08,0.87-1.31c0.55-0.21,1.02-0.06,1.42,0.34
                                                c0.3,0.3,0.35,0.69,0.35,1.1c0,1.08,0.02,2.16-0.01,3.25c-0.01,0.44,0.13,0.57,0.57,0.56c1.08-0.03,2.16-0.02,3.25-0.01
                                                c0.92,0.01,1.51,0.52,1.53,1.29C56.01,15.47,55.39,16.03,54.45,16.04z"/>
                                            <path class="st0" d="M59.53,28.74c-0.01,0.01-0.01,0.02-0.01,0.03c0.02-0.01,0.03-0.02,0.05-0.02
                                                C59.55,28.75,59.53,28.74,59.53,28.74z"/>
                                            <path class="st0" d="M59.5,28.79c0-0.01,0.01-0.01,0.01-0.02c-0.01,0-0.01,0.01-0.02,0.01C59.49,28.78,59.5,28.79,59.5,28.79z"/>
                                        </g>
                                    </svg>
                                </router-link>
                            </li>
                            <li class="item search">
                                <router-link to="" class="link" @click="search_options_show =! search_options_show">
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
                                </router-link>
                                <div class="mobile_search" :class="{'show':search_options_show}">
                                    <div class="_srh">
                                        <form>
                                            <input type="text" placeholder="Search Product...">
                                            <button type="button">
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
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <router-link to="" class="link" @click="user_options_show =! user_options_show">
                                    <img class="img users" src="../../assets/sc.png" alt="Users">
                                </router-link>
                                <div class="user_activities" :class="{'show':user_options_show}">
                                    <h4>Account</h4>
                                    <ul class="_items">
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Messages</div>
                                            </router-link>
                                        </li>
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Comments</div>
                                            </router-link>
                                        </li>
                                    </ul>

                                    <h4>Settings</h4>
                                    <ul class="_items">
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Profile</div>
                                            </router-link>
                                        </li>
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Settings</div>
                                            </router-link>
                                        </li>
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Payments</div>
                                            </router-link>
                                        </li>
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Projects</div>
                                            </router-link>
                                        </li>
                                    </ul>
                                    <ul class="_items">
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Lock Account</div>
                                            </router-link>
                                        </li>
                                        <li class="_item">
                                            <router-link to="" class="_link">
                                                <div class="_icon"></div>
                                                <div class="_txt">Logout</div>
                                            </router-link>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import SetupStore from "../../store/SetupStore.js"
export default {
    setup() {
        const { AsideToggleClick } = SetupStore();

        return {
            AsideToggleClick
        }
    },
    data(){
        return {
            user_options_show:false,
            search_options_show:false,
        }
    },
}
</script>
<style lang="scss" scoped>
.header_main {
    background: #f2f2f2;
    height: 60px;
    display: flex;
    align-items: center;
    .wrap {
        display: flex;
        column-gap: 30px;
        padding: 0 16px;
        width: 100%;
        .left {
            display: flex;
            align-items: center;
            .toggle {
                padding: 9px 0;
                cursor: pointer;
                ._line {
                    width: 20px;
                    height: 2px;
                    background-color: #444;
                    background-image: linear-gradient(310deg,#7928ca,#ff0080);
                    display: block;
                    cursor: pointer;
                    position: relative;
                    transition: all 0.3s ease 0s;
                    -webkit-transition: all 0.3s ease 0s;
                    &::before,
                    &::after {
                        position: absolute;
                        content: '';
                        width: 20px;
                        height: 2px;
                        background-color: #444;
                        background-image: linear-gradient(310deg,#7928ca,#ff0080);
                        display: block;
                    }
                    &::before {
                        top: -7px;
                    }
                    &::after {
                        bottom: -7px;
                    }
                    &:hover,
                    &:hover::before,
                    &:hover::after {
                        color: #f19024;
                    }
                }
            }
        }
        .middle {
            display: none;
        }
        .right {
            display: flex;
            justify-content: space-between;
            column-gap: 30px;
            width: 100%;
            ._left {
                width: 20%;
                display: flex;
                align-items: center;
                .logo {
                    max-width: 120px;
                    cursor: pointer;
                    .img {
                        max-width: 100%;
                    }
                }
            }
            ._middle {
                width: 60%;
                .search {
                    display: flex;
                    justify-content: center;
                    form {
                        display: flex;
                        border: 1px solid #ddd;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                        width: -webkit-fit-content;
                        width: -moz-fit-content;
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
                            svg {
                                width: 20px;
                                fill: #f19024;
                            }
                        }
                    }
                }
            }
            ._right {
                width: 20%;
                .user_options {
                    display: flex;
                    align-items: center;
                    justify-content: end;
                    .items {
                        list-style: none;
                        display: flex;
                        align-items: center;
                        column-gap: 20px;
                        .item {
                            position: relative;
                            &.search {
                                display: block;
                                position: relative;
                                .mobile_search {
                                    position: absolute;
                                    top: 30px;
                                    right: -35px;
                                    width: 300px;
                                    background-color: #fff;
                                    padding: 20px;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                                    border-radius: 4px;
                                    margin-top: 30px;
                                    z-index: 0;
                                    visibility: hidden;
                                    overflow: hidden;
                                    opacity: 0;
                                    transition: all 0.3s ease 0s;
                                    -webkit-transition: all 0.3s ease 0s;
                                    &.show {
                                        visibility: visible;
                                        opacity: 998;
                                        margin-top: 0;
                                        overflow: hidden;
                                        z-index: 1;
                                    }
                                    ._srh {
                                        display: flex;
                                        justify-content: center;
                                        form {
                                            display: flex;
                                            border: 1px solid #ddd;
                                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                                            width: -webkit-fit-content;
                                            width: -moz-fit-content;
                                            width: fit-content;
                                            height: 40px;
                                            border-radius: 8px;
                                            overflow: hidden;
                                            input {
                                                width: 250px;
                                                border: none;
                                                outline: none;
                                                padding: 4px 12px;
                                                font-size: 16px;
                                                color: #444;
                                                letter-spacing: 1px;
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
                                                svg {
                                                    width: 20px;
                                                    fill: #f19024;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            .link {
                                color: #444;
                                text-decoration: none;
                                display: block;
                                cursor: pointer;
                                transition: all 0.3s ease 0s;
                                -webkit-transition: all 0.3s ease 0s;
                                &:hover {
                                    color: #f19024;
                                }
                                .img {
                                    width: 20px;
                                    height: 20px;
                                    fill: #000;
                                }
                                .img.users {
                                    width: 36px;
                                    height: 36px;
                                    border-radius: 50%;
                                    border: 1px solid #ddd;
                                    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                                }
                            }
                            .user_activities {
                                position: absolute;
                                right: 0;
                                top: 40px;
                                width: 200px;
                                height: auto;
                                background-color: #fff;
                                box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                                border-bottom-left-radius: 4px;
                                border-bottom-right-radius: 4px;
                                margin-top: 30px;
                                visibility: hidden;
                                overflow: hidden;
                                opacity: 0;
                                transition: all 0.3s ease 0s;
                                -webkit-transition: all 0.3s ease 0s;
                                z-index: 0;
                                &.show {
                                    visibility: visible;
                                    opacity: 1;
                                    margin-top: 0;
                                    overflow: hidden;
                                    z-index: 2;
                                }
                                & > h4 {
                                    background-color: #f2f2f2;
                                    padding: 12px 8px;
                                    font-size: 12px;
                                    color: #444;
                                }
                                ._items {
                                    list-style: none;
                                    &:last-child {
                                        border-top: 1px solid #ddd;
                                    }
                                    ._item {
                                        ._link {
                                            text-decoration: none;
                                            padding: 8px 16px;
                                            display: block;
                                            transition: all 0.3s ease 0s;
                                            -webkit-transition: all 0.3s ease 0s;
                                            &:hover {
                                                background-color: #e0e0e0;
                                            }
                                            ._icon {

                                            }
                                            ._txt {
                                                font-size: 12px;
                                                color: #444;
                                            }
                                        }
                                    }
                                }
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
$custom-width: 991px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    
}

@media (max-width: #{$custom-width}) {
    .header_main {
        .wrap {
            .left {

            }
            .right {
                column-gap: 12px;
                ._left {
                    width: 28%;
                }
                ._middle {
                    width: 44%;
                    .search {
                        form {
                            input {
                                width: 175px;
                            }
                        }
                    }
                }
                ._right {
                    width: 28%;
                }
            }
        }
    }
}

@media (max-width: #{$tablet-width}) {
    
}

@media (max-width: #{$phone-width}) {
    .header_main {
        .wrap {
            .left {
                width: 20%;
            }
            .middle {
                width: 60%;
                display: flex;
                justify-content: center;
                align-items: center;
                .logo {
                    max-width: 120px;
                    .img {
                        max-width: 100%;
                    }
                }
            }
            .right {
                width: 20%;
                display: flex;
                justify-content: end;
                ._left,
                ._middle {
                    display: none;
                }
                ._right {
                    .user_options {
                        .items {
                            .item {
                                &.noti {
                                    display: none;
                                }
                                &.search {
                                    display: block;
                                }
                                .link {
                                    svg {
                                        width: 20px;
                                        fill: #f19024;
                                    }
                                }
                                .user_activities {
                                    width: 160px;
                                }
                            }
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