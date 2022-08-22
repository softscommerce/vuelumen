<template>
    <div class="spinner center">
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
        <div class="spinner-blade"></div>
    </div>
</template>
<style scoped>

.spinner {
    font-size: 28px;
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
}

.spinner.center {
    position: relative;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
}

.spinner .spinner-blade {
    position: absolute;
    left: 0.4629em;
    bottom: 0;
    width: 1px;
    height: 6px;
    border-radius: 0.0555em;
    background-color: transparent;
    -webkit-transform-origin: center -0.2222em;
    -ms-transform-origin: center -0.2222em;
    transform-origin: center -0.2222em;
    animation: spinner-fade9234 1.2s infinite linear;
}

.spinner .spinner-blade:nth-child(1) {
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
}

.spinner .spinner-blade:nth-child(2) {
    -webkit-animation-delay: 0.100s;
    animation-delay: 0.100s;
    -webkit-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    transform: rotate(30deg);
}

.spinner .spinner-blade:nth-child(3) {
    -webkit-animation-delay: 0.200s;
    animation-delay: 0.200s;
    -webkit-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
}

.spinner .spinner-blade:nth-child(4) {
    -webkit-animation-delay: 0.300s;
    animation-delay: 0.300s;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

.spinner .spinner-blade:nth-child(5) {
    -webkit-animation-delay: 0.400s;
    animation-delay: 0.400s;
    -webkit-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    transform: rotate(120deg);
}

.spinner .spinner-blade:nth-child(6) {
    -webkit-animation-delay: 0.500s;
    animation-delay: 0.500s;
    -webkit-transform: rotate(150deg);
    -ms-transform: rotate(150deg);
    transform: rotate(150deg);
}

.spinner .spinner-blade:nth-child(7) {
    -webkit-animation-delay: 0.600s;
    animation-delay: 0.600s;
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.spinner .spinner-blade:nth-child(8) {
    -webkit-animation-delay: 0.700s;
    animation-delay: 0.700s;
    -webkit-transform: rotate(210deg);
    -ms-transform: rotate(210deg);
    transform: rotate(210deg);
}

.spinner .spinner-blade:nth-child(9) {
    -webkit-animation-delay: 0.800s;
    animation-delay: 0.800s;
    -webkit-transform: rotate(240deg);
    -ms-transform: rotate(240deg);
    transform: rotate(240deg);
}

.spinner .spinner-blade:nth-child(10) {
    -webkit-animation-delay: 0.900s;
    animation-delay: 0.900s;
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}

.spinner .spinner-blade:nth-child(11) {
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-transform: rotate(300deg);
    -ms-transform: rotate(300deg);
    transform: rotate(300deg);
}

.spinner .spinner-blade:nth-child(12) {
    -webkit-animation-delay: 1.1s;
    animation-delay: 1.1s;
    -webkit-transform: rotate(330deg);
    -ms-transform: rotate(330deg);
    transform: rotate(330deg);
}

@keyframes spinner-fade9234 {
    0% {
        background-color: #ffffff;
    }

    100% {
        background-color: transparent;
    }
}
</style>