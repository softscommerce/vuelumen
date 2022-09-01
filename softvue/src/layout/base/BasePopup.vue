<template>

<div class="modal_container show" @click="PopupHide" >
    <div class="dialog popup_show" v-for="(data,index) in datas" :key="index">
        <div class="head">
            <div class="icon" :class="{'success': data.msg=='success'}" v-if="data.msg == 'success'">
                <div class="circle_left"></div>
                <div class="line_tip"></div>
                <div class="line_long"></div>
                <div class="ring"></div>
                <div class="fix"></div>
                <div class="circle_right"></div>
            </div>
            <div class="icon" :class="{'errors': data.msg=='error'}" v-if="data.msg == 'Error'">
                <div class="error">!</div>
            </div>
        </div>
        <div class="body">
            <div class="content">
                <h2 class="title" :class="[{'success': data.msg=='success'} || {'error': data.msg=='error'}]">{{ data.title }}!</h2>
                <div class="text">{{ data.msgText }}</div>
            </div>
        </div>
        <div class="foot">
            <div class="actions">
                <base-button type="submit" @click="$emit('PopupOk')">Ok</base-button>
            </div>
        </div>
    </div>
</div>
</template>
<script>

export default{

    props:['datas'],
    setup(_,context) {
        const PopupHide = (event) => {
            const dialog = document.querySelector('.dialog');

            if (!dialog.contains(event.target)) {
                context.emit("PopupOk")
            }
        }

        return {
            PopupHide
        }
    },
    
    created() {
        console.log(this.datas);
    },
}
</script>
<style lang="scss" scoped>
.modal_container {
    visibility: hidden;
    overflow: hidden;
}
.modal_container.show {
    display: grid;
    position: fixed;
    z-index: 1060;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    box-sizing: border-box;
    background: rgba(0,0,0,.4);
    grid-template-areas:
        "top-start top top-end"
        "center-start center center-end"
        "bottom-start bottom-center bottom-end";
    // grid-template-rows: minmax(-webkit-min-content,auto) minmax(-webkit-min-content,auto) minmax(-webkit-min-content,auto);
    // grid-template-rows: minmax(min-content,auto) minmax(min-content,auto) minmax(min-content,auto);
    height: 100%;
    padding: 10px;
    overflow-x: hidden;
    visibility: visible;
    transition: background-color .1s;
    -webkit-overflow-scrolling: touch;
    .dialog {
        display: grid;
        grid-column: 2;
        grid-row: 2;
        align-self: center;
        justify-self: center;
        grid-template-columns: minmax(0,100%);

        position: relative;
        box-sizing: border-box;
        width: 512px;
        max-width: 100%;
        padding: 20px;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 16px;

        &.popup_show{
            -webkit-animation: success_popup_show .3s;
            animation: success_popup_show .3s;
        }
        &.popup_hide{
            -webkit-animation:success_popup_hide .15s forwards;
            animation:success_popup_hide .15s forwards
        }
        .head {
            .icon.success {
                position:relative;
                box-sizing:content-box;
                justify-content:center;
                width:80px;
                height:80px;
                margin:16px auto 40px;
                border: 4px solid transparent;
                border-radius:50%;
                font-family:inherit;
                line-height: 80px;
                cursor:default;
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                // border-color: #a5dc86;
                // color: #a5dc86;
                .circle_left {
                    position: absolute;
                    width: 3.75em;
                    height: 7.5em;
                    transform: rotate(45deg);
                    border-radius: 50%;

                    top: -0.4375em;
                    left: -2.0635em;
                    transform: rotate(-45deg);
                    transform-origin: 3.75em 3.75em;
                    border-radius: 7.5em 0 0 7.5em;
                }
                .line_tip {
                    display: block;
                    position: absolute;
                    z-index: 2;
                    height: 0.3125em;
                    border-radius: 0.125em;
                    background-color: #a5dc86;
                    top: 2.875em;
                    left: 0.8125em;
                    width: 1.5625em;
                    transform: rotate(45deg);
                    -webkit-animation:success_line_tip .75s;
                    animation:success_line_tip .75s;
                }
                .line_long {
                    display: block;
                    position: absolute;
                    z-index: 2;
                    height: 0.3125em;
                    border-radius: 0.125em;
                    background-color: #a5dc86;
                    top: 2.375em;
                    right: 0.5em;
                    width: 2.9375em;
                    transform: rotate(-45deg);
                    -webkit-animation:success_line_long .75s;
                    animation:success_line_long .75s;
                }
                .ring {
                    position: absolute;
                    z-index: 2;
                    top: -0.25em;
                    left: -0.25em;
                    box-sizing: content-box;
                    width: 100%;
                    height: 100%;
                    border: 0.25em solid rgba(165,220,134,.3);
                    border-radius: 50%;
                }
                .fix {
                    position: absolute;
                    z-index: 1;
                    top: 0.5em;
                    left: 1.625em;
                    width: 0.4375em;
                    height: 5.625em;
                    transform: rotate(-45deg);
                }
                .circle_right {
                    position: absolute;
                    width: 3.75em;
                    height: 7.5em;
                    transform: rotate(45deg);
                    border-radius: 50%;

                    top: -0.6875em;
                    left: 1.875em;
                    transform: rotate(-45deg);
                    transform-origin: 0 3.75em;
                    border-radius: 0 7.5em 7.5em 0;
                    -webkit-animation:success_circular_line 4.25s ease-in;
                    animation:success_circular_line 4.25s ease-in
                }
            }
            .icon.errors {
                position:relative;
                box-sizing:content-box;
                justify-content:center;
                width:80px;
                height:80px;
                margin:16px auto 40px;
                border: 4px solid transparent;
                border-radius:50%;
                font-family:inherit;
                line-height: 80px;
                border-color: #facea8;
                color: #f8bb86;
                cursor:default;
                -webkit-user-select:none;
                -moz-user-select:none;
                user-select:none;
                -webkit-animation: error_icon .5s;
                animation: error_icon .5s;
                .error {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 3.75em;
                    -webkit-animation: error_i_mark .5s;
                    animation: error_i_mark .5s;
                }
            }
        }
        .body {
            .content {
                .title {
                    color: #666;
                    font-size: 24px;
                    text-align: center;
                    margin-bottom: 20px;
                    &.success {
                        color: #a5dc86;
                    }
                    &.error {
                        color: #facea8;
                    }
                }
                .text {
                    color: #777;
                    font-size: 17px;
                    text-align: center;
                }
            }
        }
        .foot {
            .actions {
                margin: auto;
                display: table ;
                margin-top: 40px;
            }
        }
    }
}
// First Show Popup
@-webkit-keyframes success_popup_show{
    0%{
        transform:scale(.7)
    }
    45%{
        transform:scale(1.05)
    }
    80%{
        transform:scale(.95)
    }
    100%{
        transform:scale(1)
    }
}
@keyframes success_popup_show{
    0%{
        transform:scale(.7)
    }
    45%{
        transform:scale(1.05)
    }
    80%{
        transform:scale(.95)
    }
    100%{
        transform:scale(1)
    }
}
@-webkit-keyframes success_popup_hide{
    0%{
        transform:scale(1);
        opacity:1
    }
    100%{
        transform:scale(.5);
        opacity:0
    }
}
@keyframes success_popup_hide{
    0%{
        transform:scale(1);
        opacity:1
    }
    100%{
        transform:scale(.5);
        opacity:0
    }
}

// Circle
@-webkit-keyframes success_circular_line{
    0%{
        transform:rotate(-45deg)
    }
    5%{
        transform:rotate(-45deg)
    }
    12%{
        transform:rotate(-405deg)
    }
    100%{
        transform:rotate(-405deg)
    }
}
@keyframes success_circular_line{
    0%{
        transform:rotate(-45deg)
    }
    5%{
        transform:rotate(-45deg)
    }
    12%{
        transform:rotate(-405deg)
    }
    100%{
        transform:rotate(-405deg)
    }
}

// Success Trip/Long
@-webkit-keyframes success_line_tip{
    0%{
        top:1.1875em;
        left:.0625em;
        width:0
    }
    54%{
        top:1.0625em;
        left:.125em;
        width:0
    }
    70%{
        top:2.1875em;
        left:-.375em;
        width:3.125em
    }
    84%{
        top:3em;
        left:1.3125em;
        width:1.0625em
    }
    100%{
        top:2.8125em;
        left:.8125em;
        width:1.5625em
    }
}
@keyframes success_line_tip{
    0%{
        top:1.1875em;
        left:.0625em;
        width:0
    }
    54%{
        top:1.0625em;
        left:.125em;
        width:0
    }
    70%{
        top:2.1875em;
        left:-.375em;
        width:3.125em
    }
    84%{
        top:3em;
        left:1.3125em;
        width:1.0625em
    }
    100%{
        top:2.8125em;
        left:.8125em;
        width:1.5625em
    }
}
@-webkit-keyframes success_line_long{
    0%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    65%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    84%{
        top:2.1875em;
        right:0;
        width:3.4375em
    }
    100%{
        top:2.375em;
        right:.5em;
        width:2.9375em
    }
}
@keyframes success_line_long{
    0%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    65%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    84%{
        top:2.1875em;
        right:0;
        width:3.4375em
    }
    100%{
        top:2.375em;
        right:.5em;
        width:2.9375em
    }
}

// Error 
@-webkit-keyframes error_icon{
    0%{
        transform:rotateX(100deg);
        opacity:0
    }
    100%{
        transform:rotateX(0);
        opacity:1
    }
}
@keyframes error_icon{
    0%{
        transform:rotateX(100deg);
        opacity:0
    }
    100%{
        transform:rotateX(0);
        opacity:1
    }
}
@-webkit-keyframes error_i_mark{
    0%{
        transform:rotateZ(45deg);
        opacity:0
    }
    25%{
        transform:rotateZ(-25deg);
        opacity:.4
    }
    50%{
        transform:rotateZ(15deg);
        opacity:.8
    }
    75%{
        transform:rotateZ(-5deg);
        opacity:1
    }
    100%{
        transform:rotateX(0);
        opacity:1
    }
}
@keyframes error_i_mark{
    0%{
        transform:rotateZ(45deg);
        opacity:0
    }
    25%{
        transform:rotateZ(-25deg);
        opacity:.4
    }
    50%{
        transform:rotateZ(15deg);
        opacity:.8
    }
    75%{
        transform:rotateZ(-5deg);
        opacity:1
    }
    100%{
        transform:rotateX(0);
        opacity:1
    }
}
</style>