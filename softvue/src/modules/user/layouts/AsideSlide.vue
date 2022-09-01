<template>
   <div>
     <aside class="main_sidebar" :class="{'active':aside_control}">
        <div class="header">
            <div class="logo">
                <img class="img" src="@/assets/sc.png" alt="Image">
            </div>
        </div>
        <div class="body">
            <div class="scroll">
                <!-- Main Menu -->
                <ul class="items">
                    <li class="item">

                        <router-link to="" class="link">
                            <div class="text">
                                <span class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path class="st0" d="M0,41.49c0.28-0.65,0.23-1.36,0.33-2.05c1.88-12.77,11.19-23.15,23.7-26.42c14.33-3.74,29.61,3.11,36.4,16.32
                                            c2.83,5.51,3.97,11.35,3.45,17.51c-0.2,2.29-0.65,4.53-1.34,6.72c-0.24,0.78-0.63,1.09-1.44,1.14c-0.17,0.01-0.33,0-0.5,0
                                            c-19.06,0-38.12,0-57.19,0c-1.41,0-1.67-0.22-2.07-1.55c-0.6-2.02-0.98-4.08-1.21-6.17C0.12,46.85,0.2,46.68,0,46.61
                                            C0,44.9,0,43.2,0,41.49z M16.21,19.35c-3.49,2.28-6.35,5.09-8.63,8.49c-0.22,0.33-0.19,0.46,0.15,0.64
                                            c0.95,0.52,1.88,1.06,2.81,1.62c0.82,0.49,1.06,1.22,0.67,1.94c-0.37,0.67-1.19,0.82-2.02,0.36c-0.94-0.53-1.88-1.07-2.81-1.62
                                            c-0.28-0.17-0.43-0.2-0.6,0.16c-1.75,3.55-2.74,7.3-3.02,11.25c-0.03,0.47,0.12,0.55,0.54,0.54c1.02-0.03,2.04-0.01,3.06-0.01
                                            c0.29,0,0.58,0,0.86,0.13c0.52,0.24,0.85,0.84,0.76,1.38c-0.11,0.67-0.61,1.13-1.35,1.15c-1.15,0.03-2.29,0.02-3.44,0
                                            c-0.37-0.01-0.44,0.1-0.41,0.45c0.15,1.91,0.4,3.81,0.86,5.67c0.1,0.4,0.24,0.55,0.7,0.55c18.46-0.01,36.91-0.01,55.37,0
                                            c0.41,0,0.57-0.12,0.67-0.51c0.47-1.88,0.71-3.8,0.87-5.73c0.03-0.38-0.1-0.44-0.43-0.44c-1.04,0.02-2.08,0.01-3.12,0
                                            c-0.21,0-0.42-0.01-0.62-0.05c-0.65-0.15-1.1-0.74-1.04-1.36c0.05-0.65,0.54-1.18,1.21-1.21c1.19-0.04,2.37-0.04,3.56-0.02
                                            c0.4,0.01,0.49-0.11,0.46-0.49c-0.27-3.97-1.26-7.74-3.03-11.31c-0.15-0.3-0.27-0.34-0.55-0.17c-0.94,0.57-1.9,1.11-2.86,1.66
                                            c-0.31,0.18-0.63,0.32-1,0.27c-0.6-0.08-0.99-0.42-1.14-1.01c-0.16-0.65,0.11-1.15,0.66-1.48c0.98-0.59,1.97-1.16,2.97-1.72
                                            c0.28-0.16,0.38-0.27,0.16-0.6c-2.23-3.33-5.01-6.1-8.35-8.33c-0.25-0.17-0.35-0.15-0.5,0.11c-0.55,0.98-1.12,1.94-1.68,2.92
                                            c-0.21,0.38-0.48,0.68-0.92,0.78c-0.53,0.13-1-0.01-1.35-0.43c-0.4-0.49-0.39-1.05-0.1-1.58c0.53-0.96,1.08-1.92,1.66-2.86
                                            c0.25-0.4,0.18-0.55-0.24-0.75c-3.43-1.66-7.02-2.66-10.83-2.91c-0.81-0.05-0.8-0.06-0.82,0.76c-0.03,1.12,0.09,2.25-0.07,3.37
                                            c-0.08,0.53-0.42,0.86-0.91,1c-0.52,0.15-0.99,0.01-1.36-0.4c-0.29-0.33-0.34-0.75-0.35-1.17c0-1.06-0.01-2.12,0-3.19
                                            c0-0.29-0.02-0.44-0.4-0.42c-3.95,0.26-7.7,1.24-11.26,2.97c-0.45,0.22-0.44,0.39-0.21,0.76c0.56,0.9,1.08,1.83,1.59,2.75
                                            c0.36,0.65,0.33,1.24-0.05,1.68c-0.62,0.72-1.68,0.6-2.2-0.27C17.49,21.58,16.87,20.48,16.21,19.35z"/>
                                        <path class="st0" d="M29.35,44.04c-0.01-0.82,0.31-1.5,0.92-2.03c5.11-4.5,10.22-9,15.34-13.49c0.7-0.62,1.47-0.63,2.01-0.08
                                            c0.55,0.56,0.51,1.28-0.13,2.01c-4.45,5.07-8.9,10.14-13.36,15.2c-0.87,0.99-1.98,1.28-3.09,0.86
                                            C30.03,46.12,29.36,45.14,29.35,44.04z"/>
                                    </svg>
                                </span>
                                <span class="txt">Home</span>
                            </div>
                            <span class="arrow"></span>
                        </router-link>
                    </li>


                    <li class="item tree">
                        {{}}
                        <router-link to="#" class="link">
                            <div class="text">
                                <span class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path class="st0" d="M0,41.49c0.28-0.65,0.23-1.36,0.33-2.05c1.88-12.77,11.19-23.15,23.7-26.42c14.33-3.74,29.61,3.11,36.4,16.32
                                            c2.83,5.51,3.97,11.35,3.45,17.51c-0.2,2.29-0.65,4.53-1.34,6.72c-0.24,0.78-0.63,1.09-1.44,1.14c-0.17,0.01-0.33,0-0.5,0
                                            c-19.06,0-38.12,0-57.19,0c-1.41,0-1.67-0.22-2.07-1.55c-0.6-2.02-0.98-4.08-1.21-6.17C0.12,46.85,0.2,46.68,0,46.61
                                            C0,44.9,0,43.2,0,41.49z M16.21,19.35c-3.49,2.28-6.35,5.09-8.63,8.49c-0.22,0.33-0.19,0.46,0.15,0.64
                                            c0.95,0.52,1.88,1.06,2.81,1.62c0.82,0.49,1.06,1.22,0.67,1.94c-0.37,0.67-1.19,0.82-2.02,0.36c-0.94-0.53-1.88-1.07-2.81-1.62
                                            c-0.28-0.17-0.43-0.2-0.6,0.16c-1.75,3.55-2.74,7.3-3.02,11.25c-0.03,0.47,0.12,0.55,0.54,0.54c1.02-0.03,2.04-0.01,3.06-0.01
                                            c0.29,0,0.58,0,0.86,0.13c0.52,0.24,0.85,0.84,0.76,1.38c-0.11,0.67-0.61,1.13-1.35,1.15c-1.15,0.03-2.29,0.02-3.44,0
                                            c-0.37-0.01-0.44,0.1-0.41,0.45c0.15,1.91,0.4,3.81,0.86,5.67c0.1,0.4,0.24,0.55,0.7,0.55c18.46-0.01,36.91-0.01,55.37,0
                                            c0.41,0,0.57-0.12,0.67-0.51c0.47-1.88,0.71-3.8,0.87-5.73c0.03-0.38-0.1-0.44-0.43-0.44c-1.04,0.02-2.08,0.01-3.12,0
                                            c-0.21,0-0.42-0.01-0.62-0.05c-0.65-0.15-1.1-0.74-1.04-1.36c0.05-0.65,0.54-1.18,1.21-1.21c1.19-0.04,2.37-0.04,3.56-0.02
                                            c0.4,0.01,0.49-0.11,0.46-0.49c-0.27-3.97-1.26-7.74-3.03-11.31c-0.15-0.3-0.27-0.34-0.55-0.17c-0.94,0.57-1.9,1.11-2.86,1.66
                                            c-0.31,0.18-0.63,0.32-1,0.27c-0.6-0.08-0.99-0.42-1.14-1.01c-0.16-0.65,0.11-1.15,0.66-1.48c0.98-0.59,1.97-1.16,2.97-1.72
                                            c0.28-0.16,0.38-0.27,0.16-0.6c-2.23-3.33-5.01-6.1-8.35-8.33c-0.25-0.17-0.35-0.15-0.5,0.11c-0.55,0.98-1.12,1.94-1.68,2.92
                                            c-0.21,0.38-0.48,0.68-0.92,0.78c-0.53,0.13-1-0.01-1.35-0.43c-0.4-0.49-0.39-1.05-0.1-1.58c0.53-0.96,1.08-1.92,1.66-2.86
                                            c0.25-0.4,0.18-0.55-0.24-0.75c-3.43-1.66-7.02-2.66-10.83-2.91c-0.81-0.05-0.8-0.06-0.82,0.76c-0.03,1.12,0.09,2.25-0.07,3.37
                                            c-0.08,0.53-0.42,0.86-0.91,1c-0.52,0.15-0.99,0.01-1.36-0.4c-0.29-0.33-0.34-0.75-0.35-1.17c0-1.06-0.01-2.12,0-3.19
                                            c0-0.29-0.02-0.44-0.4-0.42c-3.95,0.26-7.7,1.24-11.26,2.97c-0.45,0.22-0.44,0.39-0.21,0.76c0.56,0.9,1.08,1.83,1.59,2.75
                                            c0.36,0.65,0.33,1.24-0.05,1.68c-0.62,0.72-1.68,0.6-2.2-0.27C17.49,21.58,16.87,20.48,16.21,19.35z"/>
                                        <path class="st0" d="M29.35,44.04c-0.01-0.82,0.31-1.5,0.92-2.03c5.11-4.5,10.22-9,15.34-13.49c0.7-0.62,1.47-0.63,2.01-0.08
                                            c0.55,0.56,0.51,1.28-0.13,2.01c-4.45,5.07-8.9,10.14-13.36,15.2c-0.87,0.99-1.98,1.28-3.09,0.86
                                            C30.03,46.12,29.36,45.14,29.35,44.04z"/>
                                    </svg>
                                </span>
                                <span class="txt">Service/Shop</span>
                            </div>
                            <span class="arrow">
                                
                            </span>
                        </router-link>
                        <!-- Submenu Start -->
                        <ul class="_items">
                            <li class="_item tree">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Brand</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                                <!-- Sub Submenu Start -->
                                <ul class="__items">
                                    <li class="__item">
                                        <router-link to="" class="__link">
                                            <div class="__text">
                                                <span class="__icon"></span>
                                                <span class="__txt">Add Brand</span>
                                            </div>
                                            <span class="__arrow"></span>
                                        </router-link>
                                    </li>
                                    <li class="__item">
                                        <router-link to="" class="__link">
                                            <div class="__text">
                                                <span class="__icon"></span>
                                                <span class="__txt">View Brand</span>
                                            </div>
                                            <span class="__arrow"></span>
                                        </router-link>
                                    </li>
                                   
                                </ul>
                                <!-- Sub Submenu End -->
                            </li>
                            <li class="_item tree">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Product 2</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                                <!-- Sub Submenu Start -->
                                <ul class="__items">
                                    <li class="__item">
                                        <router-link to="" class="__link">
                                            <div class="__text">
                                                <span class="__icon"></span>
                                                <span class="__txt">Service 1</span>
                                            </div>
                                            <span class="__arrow"></span>
                                        </router-link>
                                    </li>
                                    <li class="__item">
                                        <router-link to="" class="__link">
                                            <div class="__text">
                                                <span class="__icon"></span>
                                                <span class="__txt">Service 2</span>
                                            </div>
                                            <span class="__arrow"></span>
                                        </router-link>
                                    </li>
                                    <li class="__item">
                                        <router-link to="" class="__link">
                                            <div class="__text">
                                                <span class="__icon"></span>
                                                <span class="__txt">Service 3</span>
                                            </div>
                                            <span class="__arrow"></span>
                                        </router-link>
                                    </li>
                                </ul>
                                <!-- Sub Submenu End -->
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Product 3</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Product 4</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Product 5</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Product 6</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="item tree">
                        <router-link to="" class="link">
                            <div class="text">
                                <span class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path class="st0" d="M0,41.49c0.28-0.65,0.23-1.36,0.33-2.05c1.88-12.77,11.19-23.15,23.7-26.42c14.33-3.74,29.61,3.11,36.4,16.32
                                            c2.83,5.51,3.97,11.35,3.45,17.51c-0.2,2.29-0.65,4.53-1.34,6.72c-0.24,0.78-0.63,1.09-1.44,1.14c-0.17,0.01-0.33,0-0.5,0
                                            c-19.06,0-38.12,0-57.19,0c-1.41,0-1.67-0.22-2.07-1.55c-0.6-2.02-0.98-4.08-1.21-6.17C0.12,46.85,0.2,46.68,0,46.61
                                            C0,44.9,0,43.2,0,41.49z M16.21,19.35c-3.49,2.28-6.35,5.09-8.63,8.49c-0.22,0.33-0.19,0.46,0.15,0.64
                                            c0.95,0.52,1.88,1.06,2.81,1.62c0.82,0.49,1.06,1.22,0.67,1.94c-0.37,0.67-1.19,0.82-2.02,0.36c-0.94-0.53-1.88-1.07-2.81-1.62
                                            c-0.28-0.17-0.43-0.2-0.6,0.16c-1.75,3.55-2.74,7.3-3.02,11.25c-0.03,0.47,0.12,0.55,0.54,0.54c1.02-0.03,2.04-0.01,3.06-0.01
                                            c0.29,0,0.58,0,0.86,0.13c0.52,0.24,0.85,0.84,0.76,1.38c-0.11,0.67-0.61,1.13-1.35,1.15c-1.15,0.03-2.29,0.02-3.44,0
                                            c-0.37-0.01-0.44,0.1-0.41,0.45c0.15,1.91,0.4,3.81,0.86,5.67c0.1,0.4,0.24,0.55,0.7,0.55c18.46-0.01,36.91-0.01,55.37,0
                                            c0.41,0,0.57-0.12,0.67-0.51c0.47-1.88,0.71-3.8,0.87-5.73c0.03-0.38-0.1-0.44-0.43-0.44c-1.04,0.02-2.08,0.01-3.12,0
                                            c-0.21,0-0.42-0.01-0.62-0.05c-0.65-0.15-1.1-0.74-1.04-1.36c0.05-0.65,0.54-1.18,1.21-1.21c1.19-0.04,2.37-0.04,3.56-0.02
                                            c0.4,0.01,0.49-0.11,0.46-0.49c-0.27-3.97-1.26-7.74-3.03-11.31c-0.15-0.3-0.27-0.34-0.55-0.17c-0.94,0.57-1.9,1.11-2.86,1.66
                                            c-0.31,0.18-0.63,0.32-1,0.27c-0.6-0.08-0.99-0.42-1.14-1.01c-0.16-0.65,0.11-1.15,0.66-1.48c0.98-0.59,1.97-1.16,2.97-1.72
                                            c0.28-0.16,0.38-0.27,0.16-0.6c-2.23-3.33-5.01-6.1-8.35-8.33c-0.25-0.17-0.35-0.15-0.5,0.11c-0.55,0.98-1.12,1.94-1.68,2.92
                                            c-0.21,0.38-0.48,0.68-0.92,0.78c-0.53,0.13-1-0.01-1.35-0.43c-0.4-0.49-0.39-1.05-0.1-1.58c0.53-0.96,1.08-1.92,1.66-2.86
                                            c0.25-0.4,0.18-0.55-0.24-0.75c-3.43-1.66-7.02-2.66-10.83-2.91c-0.81-0.05-0.8-0.06-0.82,0.76c-0.03,1.12,0.09,2.25-0.07,3.37
                                            c-0.08,0.53-0.42,0.86-0.91,1c-0.52,0.15-0.99,0.01-1.36-0.4c-0.29-0.33-0.34-0.75-0.35-1.17c0-1.06-0.01-2.12,0-3.19
                                            c0-0.29-0.02-0.44-0.4-0.42c-3.95,0.26-7.7,1.24-11.26,2.97c-0.45,0.22-0.44,0.39-0.21,0.76c0.56,0.9,1.08,1.83,1.59,2.75
                                            c0.36,0.65,0.33,1.24-0.05,1.68c-0.62,0.72-1.68,0.6-2.2-0.27C17.49,21.58,16.87,20.48,16.21,19.35z"/>
                                        <path class="st0" d="M29.35,44.04c-0.01-0.82,0.31-1.5,0.92-2.03c5.11-4.5,10.22-9,15.34-13.49c0.7-0.62,1.47-0.63,2.01-0.08
                                            c0.55,0.56,0.51,1.28-0.13,2.01c-4.45,5.07-8.9,10.14-13.36,15.2c-0.87,0.99-1.98,1.28-3.09,0.86
                                            C30.03,46.12,29.36,45.14,29.35,44.04z"/>
                                    </svg>
                                </span>
                                <span class="txt">Services</span>
                            </div>
                            <span class="arrow"></span>
                        </router-link>
                        <!-- Submenu Start -->
                        <ul class="_items">
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Service 1</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Sservice 2</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                            <li class="_item">
                                <router-link to="" class="_link">
                                    <div class="_text">
                                        <span class="_icon"></span>
                                        <span class="_txt">Service 3</span>
                                    </div>
                                    <span class="_arrow"></span>
                                </router-link>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="item">
                        <router-link to="" class="link">
                            <div class="text">
                                <span class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path class="st0" d="M0,41.49c0.28-0.65,0.23-1.36,0.33-2.05c1.88-12.77,11.19-23.15,23.7-26.42c14.33-3.74,29.61,3.11,36.4,16.32
                                            c2.83,5.51,3.97,11.35,3.45,17.51c-0.2,2.29-0.65,4.53-1.34,6.72c-0.24,0.78-0.63,1.09-1.44,1.14c-0.17,0.01-0.33,0-0.5,0
                                            c-19.06,0-38.12,0-57.19,0c-1.41,0-1.67-0.22-2.07-1.55c-0.6-2.02-0.98-4.08-1.21-6.17C0.12,46.85,0.2,46.68,0,46.61
                                            C0,44.9,0,43.2,0,41.49z M16.21,19.35c-3.49,2.28-6.35,5.09-8.63,8.49c-0.22,0.33-0.19,0.46,0.15,0.64
                                            c0.95,0.52,1.88,1.06,2.81,1.62c0.82,0.49,1.06,1.22,0.67,1.94c-0.37,0.67-1.19,0.82-2.02,0.36c-0.94-0.53-1.88-1.07-2.81-1.62
                                            c-0.28-0.17-0.43-0.2-0.6,0.16c-1.75,3.55-2.74,7.3-3.02,11.25c-0.03,0.47,0.12,0.55,0.54,0.54c1.02-0.03,2.04-0.01,3.06-0.01
                                            c0.29,0,0.58,0,0.86,0.13c0.52,0.24,0.85,0.84,0.76,1.38c-0.11,0.67-0.61,1.13-1.35,1.15c-1.15,0.03-2.29,0.02-3.44,0
                                            c-0.37-0.01-0.44,0.1-0.41,0.45c0.15,1.91,0.4,3.81,0.86,5.67c0.1,0.4,0.24,0.55,0.7,0.55c18.46-0.01,36.91-0.01,55.37,0
                                            c0.41,0,0.57-0.12,0.67-0.51c0.47-1.88,0.71-3.8,0.87-5.73c0.03-0.38-0.1-0.44-0.43-0.44c-1.04,0.02-2.08,0.01-3.12,0
                                            c-0.21,0-0.42-0.01-0.62-0.05c-0.65-0.15-1.1-0.74-1.04-1.36c0.05-0.65,0.54-1.18,1.21-1.21c1.19-0.04,2.37-0.04,3.56-0.02
                                            c0.4,0.01,0.49-0.11,0.46-0.49c-0.27-3.97-1.26-7.74-3.03-11.31c-0.15-0.3-0.27-0.34-0.55-0.17c-0.94,0.57-1.9,1.11-2.86,1.66
                                            c-0.31,0.18-0.63,0.32-1,0.27c-0.6-0.08-0.99-0.42-1.14-1.01c-0.16-0.65,0.11-1.15,0.66-1.48c0.98-0.59,1.97-1.16,2.97-1.72
                                            c0.28-0.16,0.38-0.27,0.16-0.6c-2.23-3.33-5.01-6.1-8.35-8.33c-0.25-0.17-0.35-0.15-0.5,0.11c-0.55,0.98-1.12,1.94-1.68,2.92
                                            c-0.21,0.38-0.48,0.68-0.92,0.78c-0.53,0.13-1-0.01-1.35-0.43c-0.4-0.49-0.39-1.05-0.1-1.58c0.53-0.96,1.08-1.92,1.66-2.86
                                            c0.25-0.4,0.18-0.55-0.24-0.75c-3.43-1.66-7.02-2.66-10.83-2.91c-0.81-0.05-0.8-0.06-0.82,0.76c-0.03,1.12,0.09,2.25-0.07,3.37
                                            c-0.08,0.53-0.42,0.86-0.91,1c-0.52,0.15-0.99,0.01-1.36-0.4c-0.29-0.33-0.34-0.75-0.35-1.17c0-1.06-0.01-2.12,0-3.19
                                            c0-0.29-0.02-0.44-0.4-0.42c-3.95,0.26-7.7,1.24-11.26,2.97c-0.45,0.22-0.44,0.39-0.21,0.76c0.56,0.9,1.08,1.83,1.59,2.75
                                            c0.36,0.65,0.33,1.24-0.05,1.68c-0.62,0.72-1.68,0.6-2.2-0.27C17.49,21.58,16.87,20.48,16.21,19.35z"/>
                                        <path class="st0" d="M29.35,44.04c-0.01-0.82,0.31-1.5,0.92-2.03c5.11-4.5,10.22-9,15.34-13.49c0.7-0.62,1.47-0.63,2.01-0.08
                                            c0.55,0.56,0.51,1.28-0.13,2.01c-4.45,5.07-8.9,10.14-13.36,15.2c-0.87,0.99-1.98,1.28-3.09,0.86
                                            C30.03,46.12,29.36,45.14,29.35,44.04z"/>
                                    </svg>
                                </span>
                                <span class="txt">About</span>
                            </div>
                            <span class="arrow"></span>
                        </router-link>
                    </li>
                    <li class="item">
                        <router-link to="" class="link">
                            <div class="text">
                                <span class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path class="st0" d="M0,41.49c0.28-0.65,0.23-1.36,0.33-2.05c1.88-12.77,11.19-23.15,23.7-26.42c14.33-3.74,29.61,3.11,36.4,16.32
                                            c2.83,5.51,3.97,11.35,3.45,17.51c-0.2,2.29-0.65,4.53-1.34,6.72c-0.24,0.78-0.63,1.09-1.44,1.14c-0.17,0.01-0.33,0-0.5,0
                                            c-19.06,0-38.12,0-57.19,0c-1.41,0-1.67-0.22-2.07-1.55c-0.6-2.02-0.98-4.08-1.21-6.17C0.12,46.85,0.2,46.68,0,46.61
                                            C0,44.9,0,43.2,0,41.49z M16.21,19.35c-3.49,2.28-6.35,5.09-8.63,8.49c-0.22,0.33-0.19,0.46,0.15,0.64
                                            c0.95,0.52,1.88,1.06,2.81,1.62c0.82,0.49,1.06,1.22,0.67,1.94c-0.37,0.67-1.19,0.82-2.02,0.36c-0.94-0.53-1.88-1.07-2.81-1.62
                                            c-0.28-0.17-0.43-0.2-0.6,0.16c-1.75,3.55-2.74,7.3-3.02,11.25c-0.03,0.47,0.12,0.55,0.54,0.54c1.02-0.03,2.04-0.01,3.06-0.01
                                            c0.29,0,0.58,0,0.86,0.13c0.52,0.24,0.85,0.84,0.76,1.38c-0.11,0.67-0.61,1.13-1.35,1.15c-1.15,0.03-2.29,0.02-3.44,0
                                            c-0.37-0.01-0.44,0.1-0.41,0.45c0.15,1.91,0.4,3.81,0.86,5.67c0.1,0.4,0.24,0.55,0.7,0.55c18.46-0.01,36.91-0.01,55.37,0
                                            c0.41,0,0.57-0.12,0.67-0.51c0.47-1.88,0.71-3.8,0.87-5.73c0.03-0.38-0.1-0.44-0.43-0.44c-1.04,0.02-2.08,0.01-3.12,0
                                            c-0.21,0-0.42-0.01-0.62-0.05c-0.65-0.15-1.1-0.74-1.04-1.36c0.05-0.65,0.54-1.18,1.21-1.21c1.19-0.04,2.37-0.04,3.56-0.02
                                            c0.4,0.01,0.49-0.11,0.46-0.49c-0.27-3.97-1.26-7.74-3.03-11.31c-0.15-0.3-0.27-0.34-0.55-0.17c-0.94,0.57-1.9,1.11-2.86,1.66
                                            c-0.31,0.18-0.63,0.32-1,0.27c-0.6-0.08-0.99-0.42-1.14-1.01c-0.16-0.65,0.11-1.15,0.66-1.48c0.98-0.59,1.97-1.16,2.97-1.72
                                            c0.28-0.16,0.38-0.27,0.16-0.6c-2.23-3.33-5.01-6.1-8.35-8.33c-0.25-0.17-0.35-0.15-0.5,0.11c-0.55,0.98-1.12,1.94-1.68,2.92
                                            c-0.21,0.38-0.48,0.68-0.92,0.78c-0.53,0.13-1-0.01-1.35-0.43c-0.4-0.49-0.39-1.05-0.1-1.58c0.53-0.96,1.08-1.92,1.66-2.86
                                            c0.25-0.4,0.18-0.55-0.24-0.75c-3.43-1.66-7.02-2.66-10.83-2.91c-0.81-0.05-0.8-0.06-0.82,0.76c-0.03,1.12,0.09,2.25-0.07,3.37
                                            c-0.08,0.53-0.42,0.86-0.91,1c-0.52,0.15-0.99,0.01-1.36-0.4c-0.29-0.33-0.34-0.75-0.35-1.17c0-1.06-0.01-2.12,0-3.19
                                            c0-0.29-0.02-0.44-0.4-0.42c-3.95,0.26-7.7,1.24-11.26,2.97c-0.45,0.22-0.44,0.39-0.21,0.76c0.56,0.9,1.08,1.83,1.59,2.75
                                            c0.36,0.65,0.33,1.24-0.05,1.68c-0.62,0.72-1.68,0.6-2.2-0.27C17.49,21.58,16.87,20.48,16.21,19.35z"/>
                                        <path class="st0" d="M29.35,44.04c-0.01-0.82,0.31-1.5,0.92-2.03c5.11-4.5,10.22-9,15.34-13.49c0.7-0.62,1.47-0.63,2.01-0.08
                                            c0.55,0.56,0.51,1.28-0.13,2.01c-4.45,5.07-8.9,10.14-13.36,15.2c-0.87,0.99-1.98,1.28-3.09,0.86
                                            C30.03,46.12,29.36,45.14,29.35,44.04z"/>
                                    </svg>
                                </span>
                                <span class="txt">Contact</span>
                            </div>
                            <span class="arrow"></span>
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <div id="mobile_overly_site" @click="SiteOverlayHideBtn" :class="[SiteOverlay ? 'show' : '']"></div>
   </div>
</template>
<script>
import AdminSetupStore from "../store/SetupStore.js";
export default {
    setup() {
        const { aside_control, SiteOverlay, SiteOverlayHideBtn } = AdminSetupStore();

        return {
            aside_control:aside_control(),
            SiteOverlay:SiteOverlay(),
            SiteOverlayHideBtn,
        }
    },
    mounted() {
        let item = document.querySelectorAll('.item');
        let _item = document.querySelectorAll('._item');
        // Menu
        for(let i = 0; i < item.length; i++){
            item[i].addEventListener("click", function() {
                let item_r = document.querySelectorAll('.item');
                for (let index = 0; index < item_r.length; index++) {
                    item_r[index].classList.remove('drop');
                }
                this.classList.add('drop');
            });
        }
        // Submenu
        for(let i = 0; i < _item.length; i++){
            _item[i].addEventListener("click", function() {
               let _item_r = document.querySelectorAll('._item');
               for (let index = 0; index < _item_r.length; index++) {
                _item_r[index].classList.remove('sub_drop');
               }
                this.classList.add('sub_drop');
            });
        }
    }
}
</script>
<style lang="scss" scoped>
aside.main_sidebar {
    position: relative;
    width: 0;
    height: 100%;
    overflow: hidden;
    background-color: #303641;
    z-index: 999;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    &.active {
        width: 300px;
    }
    .header {
        height: 60px;
        background: #1b1e23;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        .logo {
            width: 100px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            .img {
                max-height: 100%;
            }
        }
    }
    .body {
        height:100%;
        .scroll {
            overflow-y: auto;
            height: calc(100% - 60px);
            .items {
                list-style: none;
                .item {
                    overflow: hidden;
                    &.tree {
                        .arrow {
                            position: relative;
                            &::after {
                                position: absolute;
                                content: '';
                                background-image: url('@/assets/admin/icons/arrow/down-arrow.svg');
                                top: 50%;
                                right: 0;
                                width: 9px;
                                height: 9px;
                                fill: #000;
                                transform: translateY(-50%);
                            }
                        }
                    }
                    &.drop {
                        .arrow {
                            &::after {
                                background-image: url('@/assets/admin/icons/arrow/up-arrow.svg');
                            }
                        }
                        ._items {
                            max-height: min-content;
                            opacity: 1;
                        }
                    }
                    .link {
                        color: #fff;
                        text-decoration: none;
                        padding: 8px 16px;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                        &:hover,
                        &.active {
                            background-color: #3d444e;
                        }
                        .text {
                            display: flex;
                            align-items: center;
                            .icon {
                                padding-right: 8px;
                                svg {
                                    width: 20px;
                                    height: 20px;
                                    fill: #fff;
                                }
                            }
                            .txt {
                                font-size: 11px;
                                text-transform: uppercase;
                                letter-spacing: 1px;
                            }
                        }
                        .arrow {
                            svg {
                                width: 9px;
                                fill: #fff;
                            }
                        }
                    }
                    // Sub menu Css
                    ._items {
                        max-height: 0;
                        opacity: 0;
                        overflow: hidden;
                        background-color: #2a2e36;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                        ._item {
                            &.tree {
                                ._arrow {
                                    position: relative;
                                    &::after {
                                        position: absolute;
                                        content: '';
                                        background-image: url('@/assets/admin/icons/arrow/down-arrow.svg');
                                        top: 50%;
                                        right: 0;
                                        width: 9px;
                                        height: 9px;
                                        fill: #000;
                                        transform: translateY(-50%);
                                    }
                                }
                            }
                            &.sub_drop {
                                ._arrow {
                                    &::after {
                                        background-image: url('@/assets/admin/icons/arrow/up-arrow.svg');
                                    }
                                }
                                .__items {
                                    max-height: min-content;
                                    opacity: 1;
                                }
                            }
                            ._link {
                                color: #fff;
                                text-decoration: none;
                                padding: 6px 16px 6px 30px;
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                &:hover,
                                &.active {
                                    background-color: #3a3e44;
                                }
                                ._text {
                                   
                                    ._txt {
                                        font-size: 12px;
                                        letter-spacing: 1px;
                                    }
                                    
                                }
                            }
                            // Sub Sub menu Css
                            .__items {
                                max-height: 0;
                                opacity: 0;
                                overflow: hidden;
                                background-color: #191a1f;
                                transition: all 0.3s ease 0s;
                                -webkit-transition: all 0.3s ease 0s;
                                .__item {
                                    .__link {
                                        color: #fff;
                                        text-decoration: none;
                                        padding: 6px 40px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: space-between;
                                        &:hover,
                                        &.active {
                                            background-color: #3a3e44;
                                        }
                                        .__text {
                                            
                                            .__txt {
                                                font-size: 12px;
                                                letter-spacing: 1px;
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
    
}

@media (max-width: #{$tablet-width}) {
    #mobile_overly_site {
        position: fixed;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        z-index: -1;
        transition: all 0.2s ease 0s;
        -webkit-transition: all 0.2s ease 0s;
        &.show {
            background-color: rgba(0, 0, 0, 0.25);
            z-index: 950;
        }
    }
    aside.main_sidebar {
        position: fixed;
        left: 0;
        top: 0;
    }
    aside.main_sidebar.active {
        width: 200px;
    }
}

@media (max-width: #{$phone-width}) {
    
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>