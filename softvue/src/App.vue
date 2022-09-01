<template>
  <router-view></router-view>
  <notification-list></notification-list>

</template>

<script>
import NotificationList from './components/notification/NotificationList.vue';
import User from './middleware/User';
export default{
  components:{
    NotificationList
  },
  mounted(){
    User.hasToken();
  },
  created(){
    User.hasToken();
    var nowTime = new Date().getTime();
    if( nowTime >= localStorage.getItem('expaire') * 1000){
      User.logOut();
      this.$router.push({name: "Login-page"});
    }

  }

}

</script>
