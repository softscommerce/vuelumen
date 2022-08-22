<template>
    <div class="profile-card">
        <div class="profile-image">
            <img class="profile-image__img" src="" />
        </div>
        <div class="profile-info">
            <span></span>
            <h3></h3>
            <p></p>
        </div>
    </div>
</template>
<style scoped>
.profile-card {
    width: 100%;
    max-width: 700px;
    display: flex;
    margin: 0 auto;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 20px;
    background-color: #fff;
    overflow: hidden;
    position: relative;
    min-height: 150px;
}
.profile-card .profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    top: 30px;
    left: 30px;
    background-color: #ddd;
    animation: pulse-bg 1s infinite;
}
.profile-card .profile-image .profile-image__img {
    width: 100%;
    height: 100%;
}
.profile-info {
    width: 75%;
    float: right;
    padding-left: 10px;
    box-sizing: border-box;
}
.profile-info span {
    width: 200px;
    height: 24px;
    display: block;
    text-transform: uppercase;
    color: #666;
    letter-spacing: 3px;
    background-color: #ddd;
    animation: pulse-bg 1s infinite;
}
.profile-info h3 {
    height: 24px;
    margin: 10px 0;
    font-weight: 700;
    font-size: 1.5em;
    color: #222;
    background-color: #ddd;
    animation: pulse-bg 1s infinite;
}
.profile-info p {
    height: 80px;
    line-height: 140%;
    color: #666;
    background-color: #ddd;
    animation: pulse-bg 1s infinite;
}

@keyframes pulse-bg {
  0% {
    background-color: #ddd;
  }
  50% {
    background-color: #d0d0d0;
  }
  100% {
    background-color: #ddd;
  }
}
</style>