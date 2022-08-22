<template>
     <ul class="list-group">
      <li v-for="(item, index) in items" class="list-item" :key="index">
        <slot :item="item"></slot>
      </li>
    </ul>
</template>
<script>
    export default{
          data() {
            return {
            usersUrl: 'https://reqres.in/api/users?per_page=10',
            postsUrl: 'https://n161.tech/api/dummyapi/post',
            items:[]
            }
        },
        created(){
            fetch(this.usersUrl)
            .then(res => res.json())
            .then(res => {
                this.items = res.data || res
            })
        }
    }
</script>

<style scoped>
    ul.list-group{
        list-style: none;
    }
     ul.list-group li{
        padding: 5px;
     }
</style>