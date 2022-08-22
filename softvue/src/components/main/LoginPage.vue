<template>
<div class="user_login">
    <header class="header">
        <div class="navbar">
            <div class="logo">
                <router-link to="/" class="home_link">
                    <img src="@/assets/sc.png" alt="Logo">
                </router-link>
            </div>
            <ul class="items">
                <li class="item">
                    <router-link to="/" class="link">Home</router-link>
                </li>
                <li class="item">
                    <router-link to="" class="link">Company</router-link>
                </li>
            </ul>
        </div>
    </header>
    <section class="body">
        <div class="top">
            <h1>Welcome to Soft Commerce</h1>
        </div>
        <div class="middle">
            <div class="form" v-if="login">
                <div class="title">Sign in with your account</div>

                <form @submit.prevent="loginSubmit">
                    <div style=" box-shadow: 1px 1px 5px 0px #888888, -1px -1px 1px 0px #888888;">
                        
                        <vue-tel-input
                        :enabled-country-code="true"
                          @country-changed="countryChanged"
                         :value="phone" 
                         @input="onInput"
                         v-model="phones"
                         
                         ></vue-tel-input>
                    </div>

                     <div v-if="user_check_in" style="margin-top:10px; position:relative;">
                       <div class="password_icon" style="position: absolute; width: 60px;z-index: 1; display: flex; align-items: center; height: 50px;">
                        <img src="@/assets/icons/password.png" style="width: 45px;
    padding: 0 10px;" />

                       </div>

                    <base-input classValue="password_input_field" style="maring-bottom:8px;" v-model="password" type="password" placeholder="Enter passowrd"></base-input>

                        </div>

                    <base-button
                        type="button"
                        radius="boder_radius2"
                        style="margin-top:18px"
                        @click="nextButton"
                        id="signin"
                        v-if="next"
                    >
                    Next
                    </base-button>

                     <base-button
                     v-if="signin"
                        type="submit"
                        radius="boder_radius2"
                        style="margin-top:18px"
                       
                        id="signin"
                    >
                    Sign In
                    </base-button>
                </form>

                 <div class="forget">
                    <router-link to="" class="link">Forgot password?</router-link>
                </div>
                </div>


 <!-- @validate="validatePhone" :preferredCountries="['BD']" -->
            <div class="form" v-if="register">
                <div class="title">Sign in with your account</div>
                 <form @submit.prevent="registerSubmit">
                    <div>
                        <div style="position:relative;    margin-bottom: 28px;">
                        <base-input disabled="true" id="mobile" v-model="form.mobile" type="text" placeholder="Enter Phone Number"></base-input>
                            <a style="position: absolute;right: 0;top: 51px;overflow: hidden;opacity: 0.7;" href="#" @click="destroyLocalStorage">Try with another number</a>
                        </div>
                        <div>
                            <base-input v-model="form.name" type="text" placeholder="Your Full Name"></base-input>
                        </div>
                        <div>
                            <base-input v-model="form.password" type="password" placeholder="Enter new passowrd"></base-input>

                        </div>

                        <div>
                             <base-input v-model="form.passwordCon" type="password" placeholder="Enter new password again"></base-input>
                        </div>


                    </div>

                    <base-button
                        type="submit"
                        radius="boder_radius2"
                    >
                    Register
                    </base-button>
                </form>
                </div>


            </div>
        <div class="bottom">
            <footer class="footer">
                <div class="left">
                    <div class="copyright">&COPY; 2022 Soft Commerce Ltd</div>
                </div>
                <div class="right">
                    <ul class="items">
                        <li class="item">
                            <router-link to="#" class="link">About Us</router-link>
                        </li>
                        <li class="item">
                            <router-link to="#" class="link">Privacy Policy</router-link>
                        </li>
                        <li class="item">
                            <router-link to="#" class="link">Terms &amp; Condition</router-link>
                        </li>
                        <li class="item">
                            <router-link to="#" class="link">Contact Us</router-link>
                        </li>
                        <li class="item">
                            <router-link to="#" class="link">FAQ</router-link>
                        </li>
                        <li class="item">
                            <router-link to="" class="link">Download Android App</router-link>
                        </li>
                        <li class="item">
                            <router-link to="#" class="link">Refund Policy</router-link>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
</div>
</template>

<script>
// import { ref } from 'vue'
import { VueTelInput } from 'vue3-tel-input'
// import 'vue3-tel-input/dist/vue3-tel-input.css'
import axios from 'axios';
import { reactive, toRefs } from 'vue';
import User from '../../middleware/User';

 export default{
    data(){
        return{
            phones: null,
            countryCode: null,
            register:false,
            login:true,
            user_check_in:false,
            next:true,
            signin:false,

            form:{
                mobile:null,
                name:null,
                password:null,
                passwordCon:null
            }
            
        }
    },

    created(){
        if(localStorage.getItem('mobile')){
            this.register = true;
            this.login = false;
            this.form.mobile = localStorage.getItem('mobile');
            // document.getElementById("mobile").setAttribute("disabled", false);
        }else{
             this.register = false;
             this.login = true;
        }
    },



   components: {
    VueTelInput,

    },
 
     methods: {
        loginSubmit(){

        const form ={
            mobile: this.phone,
            password: this.password
        }
        var router = this.$router;
         User.login(form, router);
            
        },

        registerSubmit(){
            if(this.form.password == this.form.passwordCon){
                 var router = this.$router;
             User.register(this.form, router);
              if(User.logedIn()){
                this.$router.push({name:'Service-page'});
                }

            }else{
                alert('Password dose not match');
            }
        },

        destroyLocalStorage(){
            localStorage.removeItem('mobile');
            this.register = false;
            this.login = true;
        },
       async nextButton() {
            if(this.countryCode == '880'){
                console.log(this.phone);
              
                 let phone = {
                    phone: this.phone
                    };
               
               let userCheck = await axios.post('/api/get_users',phone);
              
               if(userCheck.data){
               this.user_check_in = true;
               this.next = false;
               this.signin = true;
            //    document.getElementById("signin").innerText = "Sign In";

               }else{
                this.register = true;
                this.login = false;
                localStorage.setItem('mobile', this.phone);
                  this.form.mobile = localStorage.getItem('mobile');
               }
               
              

            }else{
                alert('Please Select Bangladesh Country');
            }
        },

     countryChanged(country){
        this.countryCode = country.dialCode;
        console.log(this.countryCode);
     }
  },

 setup: () => {
          const state = reactive({
                phone: null
          }) 

        const onInput = (phone, phoneObject, input) => {
            if (phoneObject?.formatted) {
                state.phone = phoneObject.formatted
            }
        }

        return {
            ...toRefs(state),
            onInput
        }
    }
 }   
</script>
<style lang="scss" scoped>
    .user_login {
        font-family: Verdana,sans-serif;
        height: 100%;
        position: relative;
    }
    .header {
        .navbar {
            background: transparent;
            display: flex;
            align-items: center;
            column-gap: 60px;
            padding: 18px 26px;
            .logo {
                width: 40px;
                height: 40px;
                .home_link {
                    display: block;
                    img {
                        max-width: 100%;
                    }
                }
            }
            .items{
                display: flex;
                align-items: center;
                column-gap: 16px;
                list-style: none;
                .item {
                    .link {
                        font-size: 15px;
                        color:#fff;
                        padding: 8px;
                        text-decoration: none;
                        cursor: pointer;
                        display: block;
                    }
                }
            }
        }
    }
    .body {
        height: 100%;
        margin-top: -76px;
        .top {
            background: linear-gradient(306deg, #d61326 0, #161515 100%);
            height: 429px;
            display: flex;
            align-items: center;
            justify-content: center;
            h1 {
                color: #fff;
                font-size: 28px;
                font-weight: 500;
            }
        }
        .middle{
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            .form {
                background-color: #fff;
                box-shadow: 0 2px 16px rgba(0, 0, 0, .07);
                width: 460px;
                max-width: 460px;
                margin-top: -100px;
                padding: 50px;
                border-radius: 4px;
                .title {
                    font-size: 13px;
                    color: #8898aa;
                    text-align: center;
                    margin-bottom: 20px;
                }
                form {
                    display: flex;
                    flex-direction: column;
                    ._gp {
                        display: flex;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        overflow: hidden;
                        .vue_select {
                            width: 30%;
                        }
                    }
                    button {
                        width: fit-content;
                        margin: auto;
                        display: table;
                        margin-top: 24px;
                    }
                }
                .forget {
                    margin-top: 20px;
                    text-align: center; 
                    .link {
                        font-size: 12px;
                        color: #8898aa;
                        text-decoration: none;
                        cursor: pointer;
                        &:hover{
                            color: #5492bc;
                        }
                    }
                }
            }
        }
        .bottom {
            height: 600px;
            display: flex;
            align-items: end;
            padding: 18px 26px;
            .footer {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                .left {
                    width: 50%;
                    .copyright {
                        color: #8898aa;
                        font-size: 15px;
                    }
                }
                .right {
                    width: 50%;
                    .items {
                        list-style: none;
                        text-align: right;
                        .item {
                            line-height: 40px;
                            display: inline-block;
                            margin-left: 20px;
                            .link {
                                color: #8898aa;
                                font-size: 15px;
                                padding: 4px;
                                cursor: pointer;
                            }
                        }
                    }
                }
            }
        }
    }

   

// .vti__dropdown-list{
 
// }

</style>

<style>
    .password_input_field{
            padding-left: 60px !important;
    } 
</style>

<style lang="sass">
   .vti__dropdown-list
     position: relative !important
     height: 100% !important
     top:10px !important
  .vue-tel-input
    width:100%
  .vti__input
    height:50px !important
</style>