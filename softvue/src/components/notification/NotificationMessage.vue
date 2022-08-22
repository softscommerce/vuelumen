<template>
    <div>
        
          <div :class="typeClass" class="mbh-notification-box"><span style="width:95%; float:left;">{{notification.message}}</span> <span @click="removeBtn" style="font-size: 12px; right: 8px; position: absolute; width:5%; float:right;cursor:pointer;">&#9747;</span></div>
       
    </div>
</template>

<script>
import { mapActions } from 'vuex';
    export default{
        props:['notification'],
        computed:{
            typeClass(){
                return `mbh-${this.notification.type}`;
            }
        },
        data(){
            return{
                timeout:null
            }
        },
        created(){
           this.timeout = setTimeout(()=>{
                this.removeNotification(this.notification);
            }, 3000)
        },
        beforeUnmount() {
            clearTimeout(this.timeout);
        },
        methods:{
            ... mapActions(['removeNotification']),
            removeBtn(){
                  this.removeNotification(this.notification);
            }
        }
    }
</script>

<style lang="scss" scoped>

.mbh-notification-box {
   width: 250px;
   height: 65px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  color: #ffffff;
  font-family: 'Open Sans', sans-serif;
  margin-bottom: 25px;
  padding: 10px 14px 10px 44px;
  position: relative;
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;
  right: -100%;
  transition: all 0.2s ease 0s;
  -webkit-transition: all 0.2s ease 0s;
}
  .mbh-notification-box:before {
    font-size: 21px;
    left: 14px;
    position: absolute;
  }
.mbh-success {
  background-color: #2ecc71;
  right: 0;
}
  .mbh-success:before {
    content: "";
    margin-left: 4px;
    background-image: url('../../assets/icons/Success.svg');
    width: 20px;
    fill: #fff;
    height: 20px;
  }
.mbh-failure {
  background-color: #e74c3c;
  right: 0;
}
.mbh-failure:before {
content: "";
background-image: url('../../assets/icons/Erorr.svg');
width: 20px;
fill: #fff;
height: 20px;
}
.mbh-warning {
  background-color: #e67e22;
  right: 0;
}
  .mbh-warning:before {
    content: "";
    margin-left: 5px;
    background-image: url('../../assets/icons/Erorr.svg');
    width: 20px;
    fill: #fff;
    height: 20px;
  }
.mbh-information {
  background-color: #3498db;
  right: 0;
}
  .mbh-information:before {
    content: "";
    margin-left: 4px;
    background-image: url('../../assets/icons/Success.svg');
    width: 20px;
    fill: #fff;
    height: 20px;
  }
.mbh-question {
  background-color: #f1c40f;
}
  .mbh-question:before {
    content: "\f128";
    margin-left: 2px;
  }
.mbh-tip {
  background-color: #16a085;
}
  .mbh-tip:before {
    content: "\f0eb";
    margin-left: 2px;
  }
.mbh-notice {
  background-color: #bea474;
}
  .mbh-notice:before {
    content: "\f0a1";
    margin-left: -1px;
  }
</style>