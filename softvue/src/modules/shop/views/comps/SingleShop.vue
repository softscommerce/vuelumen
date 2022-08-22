<template>
    {{isOpen}}
    <div class="profile-card" v-if="isOpen == true">
        <div class="profile-image">
            <img class="profile-image__img" src="https://images.pexels.com/photos/12485293/pexels-photo-12485293.jpeg?cs=srgb&dl=pexels-justyna-serafin-12485293.jpg&fm=jpg" />
        </div>
        <div class="profile-info">
            <span>web developer</span>
            <h3>Dipankar Biswas</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quae itaque impedit explicabo, dignissimos deserunt, amet veritatis magni voluptas officia sapiente id nemo est obcaecati quaerat cupiditate iste ut vitae.</p>
        </div>
    </div>
</template>
<script>
import { ref } from '@vue/reactivity';
export default {
    setup() {
         const isOpen = ref(false);
        return {
            isOpen
        }
    },
    data() {
        return {
            show:false,
        }
    },
    created() {
        setShow();
        function setShow() {
            console.log(this.show);
        }
    },
}
</script>
<style scoped>
.profile-card {
    width: 100%;
    max-width: 700px;
    margin: 0 auto;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 20px;
    background-color: #fff;
    overflow: hidden;
    position: relative;
    min-height: 150px;
}
.profile-card .profile-image__img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    position: absolute;
    top: 30px;
    left: 30px;
}
.profile-info {
    width: 75%;
    float: right;
    padding-left: 10px;
    box-sizing: border-box;
}
.profile-info span {
    text-transform: uppercase;
    color: #666;
    letter-spacing: 3px;
}
.profile-info h3 {
    margin: 10px 0;
    font-weight: 700;
    font-size: 1.5em;
    color: #222;
}
.profile-info p {
    line-height: 140%;
    color: #666;
}
</style>