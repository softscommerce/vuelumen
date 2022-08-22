<template>
    <div class="load-row">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</template>
<style scoped>
.load-row {
    width: auto;
    height: 16px;
    line-height: 16px;
    text-align: center;
}

.load-row span {
    display: inline-block;
    width: 7px;
    height: 7px;
    background: #f76002;
    border-radius: 50px;
    animation: up-down6 0.5s ease-in infinite alternate;
}

.load-row span:nth-child(2) {
    background: #e85b04c4;
    animation-delay: 0.16s;
}

.load-row span:nth-child(3) {
    background: #e85b0491;
    animation-delay: 0.32s;
}

.load-row span:nth-child(4) {
    background: #e85b0456;
    animation-delay: 0.48s;
}

@keyframes up-down6 {
    0% {
        transform: translateY(-10px);
    }

    100% {
        transform: translateY(10px);
    }
}
</style>