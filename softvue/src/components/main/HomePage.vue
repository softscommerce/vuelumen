<template>
    <div>
        <div class="home_page">
        <header class="header">
            <div class="navbar">
                <div class="logo" @click="servicesIsInvalid =! servicesIsInvalid">
                    <router-link to="" class="home_link">
                        <img src="@/assets/dots.png" alt="Dots">
                    </router-link>
                    <div class="our_services" v-if="servicesIsInvalid" @close="confirmError">
                        <div class="item">
                            <router-link to="/products" class="link">
                                <div class="thumb">
                                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                                </div>
                                <h4>Products</h4>
                            </router-link>
                        </div>
                        <div class="item">
                            <router-link to="" class="link">
                                <div class="thumb">
                                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                                </div>
                                <h4>Services</h4>
                            </router-link>
                        </div>
                        <div class="item">
                            <router-link to="" class="link">
                                <div class="thumb">
                                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                                </div>
                                <h4>Soft Market</h4>
                            </router-link>
                        </div>
                        <div class="item">
                            <router-link to="" class="link">
                                <div class="thumb">
                                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                                </div>
                                <h4>Course</h4>
                            </router-link>
                        </div>
                        <div class="item">
                            <router-link to="" class="link">
                                <div class="thumb">
                                    <img src="@/assets/icons/services/app-development.png" alt="Service Image">
                                </div>
                                <h4>Apply</h4>
                            </router-link>
                        </div>
                    </div>
                </div>
                <ul class="items">
                    <li class="item">
                        <router-link to="/service" class="link">Services</router-link>
                    </li>
                    <li class="item">
                        <router-link v-if="!isAuth" to="/login" class="link">Login</router-link>
                    </li>
                    <li class="item" v-if="isAuth">
                        <router-link to="" class="link" @click="userLogOut">Logout</router-link>
                    </li>

                     <li class="item">
                        <router-link to="/admin/products" class="link">Products</router-link>
                    </li>
                </ul>
            </div>
        </header>
        <section class="body_section">
            <div class="wrap">
                <div class="img">
                    <img src="@/assets/soft.png" alt="Soft Logo">
                </div>
                <div class="search"  style="background: transparent;">

                    <!-- <base-inputbbc
                        placeholder="Search..."
                        classValue="border_none radious4 padding_left"
                        label="Search"
                        style="background: transparent;"
                        v-model="search" 
                        @click="sowAutoList"
                      
                    >
                    </base-inputbbc> -->

                    <div class="vue_input">
                        <input type="text" name="" id="" @blur="toggle = false" @focus="toggle = true"
                        placeholder="Search..."
                        classValue="border_none radious4 padding_left"
                        label="Search"
                        style="background: transparent;"
                        v-model="search" 
                        >
                        <div class="icon">
                            <img src="@/assets/icons/search.png" alt="Icon">
                        </div>
                    </div>
                     <div class="results" v-if="toggle">
                        <div class="result" v-for="book in newBooks" :key="book">
                            <span @click="selectResult(book)" @mousedown.prevent>
                            {{ book.name }}
                            </span>
                        </div>
                     </div>
                </div>
                <div class="add_link">
                    <div class="item" @click="inputIsInvalid = true, servicesIsInvalid = false">
                        <div class="icon"><span>&plus;</span></div>
                        <div class="text">Add</div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <base-modal  v-if="inputIsInvalid" @close="confirmError">
        <template v-slot:header style="margin-bottom:15px;">ADD SHORTCUT</template>
        <template v-slot:actions>
            <base-button mode="flat2 boder_radius1 " @click="inputIsInvalid = false" >Close</base-button>
            <base-button mode="flat boder_radius1" @click="inputIsInvalid = false">Save</base-button>
        </template>
        
        <base-inputb
            label="Name"
            placeholder="Enter Name"
            classValue="mb-4"
            style="margin-bottom: 15px; width:80%; margin-top:30px"
        ></base-inputb>
        <base-inputb
            label="Url"
            placeholder="www.sc-bd.com"
             style="margin-bottom: 15px; width:80%"
        ></base-inputb>
    </base-modal>
    </div>
</template>
<script>
import {ref} from 'vue';
import axios from 'axios';
// import BaseInput from '../../layout/base/BaseInput.vue'
// import BaseButton from '../../layout/base/BaseButton.vue'
// import BaseModal from '../../layout/base/BaseModal.vue'
export default {
    // components:{
    //     BaseInput,
    //     BaseButton,
    //     BaseModal,
    // },
    setup() {
        const isOpen = ref(false);
        return {
        isOpen
        }
    },
    name: 'App',
    data(){
        return {
        inputIsInvalid:false,
        servicesIsInvalid:false,
        isAuth:User.logedIn(),

        //auto complete search
        search: '',
        toggle: false,
        books: [
            {name: 'Liste des livres de Chair de poule'},
            {name: 'Les Cent Meilleurs Romans policiers de tous les temps'},
            {name: 'Liste des livres publiés par Champ libre'}
        ],
        newBooks: []
        //end auto complete search


        }
    },
    watch: {
    search(val) {
     this.searchFilter();
      this.newBooks = [];
      this.books.forEach(element => {
        if(element.name.includes(val) && val != "") {
          this.newBooks.push(element);
        }
      });

    },

    // search:{
    //       handler: function () {
    //                 this.searchFilter();
    //             },
    //             deep:true
    // }
  },
    methods:{
       
        searchFilter(){
             const param = {
            search: this.search
        };

            axios.get('/api/search_filter',{
                params: param
            }).then((res)=>{
                console.log(res);
            });
        },


        sowAutoList(){
            this.toggle = true;
        },
            //start auto complete method
          selectResult(book) {
            this.search = book.name;
            this.toggle = false;

            },
            // end auto complete method
        confirmError(){
        this.inputIsInvalid = false;
        this.servicesIsInvalid = false;
        },
        userLogOut(){
           
            axios.post('/api/logout')
            .then((res) =>{
                 User.logOut();
            this.$router.replace({name:'Login-page'});

            });
        }
    },

    mounted(){
        this.searchFilter();
    }
}
</script>
<style lang="scss" scoped>

 .results {
    position: absolute;
    width: 100%;
    background: #fff;  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    .result {
        &:first-child{
           border-top: 1px solid #ddd;
        }
      padding:  20px 0.75rem;
      border-bottom: 1px solid #ddd;
      cursor: pointer;
      &:hover {
        background: #efefef;
      }
    }
  }
    .home_page {
        // background-image: url('@/assets/bg_image.svg');
        // background-repeat: no-repeat;
        // background-size: cover;
        // background-position: center;
        // height: 100%;
        background: linear-gradient(306deg, #4adc87 0, #c0c93a 100%);
        height: 100vh;
    }
    .header {
        padding: 30px;
        .navbar {
            display: flex;
            align-items: center;
            column-gap: 30px;
            .logo {
                .home_link {
                    display: block;
                    cursor: pointer;
                    img {
                        max-width: 100%;
                    }
                }
                .our_services {
                    position: absolute;
                    background-color: #fff;
                    max-width: 300px;
                    display: grid;
                    height: auto;
                    align-content: start;
                    grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
                    gap: 20px;
                    padding: 20px;
                    border-radius: 12px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                    .item {
                        transition: all 0.4s ease 0s;
                        -webkit-transition: all 0.4s ease 0s;
                        &:hover {
                            img {
                                transform: scale(1.1, 1.1);
                                transition: all .4s ease 0s;
                                -webkit-transition: .4s;
                            }
                        }
                        .link {
                            cursor: pointer;
                            display: block;
                            text-decoration: none;
                            text-align: center;
                            .thumb {
                                display: inline-block;
                                border-radius: 50%;
                                width: 40px;
                                height: 40px;
                                line-height: 40px;
                                text-align: center;
                                // background-image: radial-gradient(#f19024, #ae3926);
                                background-image: radial-gradient(#d61326, #161515);
                                box-shadow: 0 3px 12px rgba(0, 0, 0, 0.3);
                                img {
                                    max-width: 100%;
                                    padding: 9px;
                                    transition: all .5s ease 0s;
                                    -webkit-transition: .5s;
                                }
                            }
                            h4 {
                                color: #444;
                                margin-top: 2px;
                                font-size: 12px;
                                font-weight: 500;
                            }
                        }
                    }
                }
            }
            .items {
                list-style: none;
                display: flex;
                align-items: center;
                column-gap: 16px;
                .item {
                    .link {
                        color: #fff;
                        font-size: 18px;
                        cursor: pointer;
                        text-decoration: none;
                    }
                }
            }
        }
    }
    .body_section {
        width: 100%;
        padding: 0 30px;
        padding-top: 50px;
        .wrap {
            max-width: 500px;
            width: 100%;
            margin: auto;
            display: block;
            padding-top: 50px;
            .img {
                margin-bottom: 40px;
                img {
                    max-width: 100%;
                }
            }
            .search {
                position: relative;
                background: #fff;
                border-radius: 6px;
                // box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                .vue_input {
                    background-color: #fff;
                    height: 46px;
                    border-radius: 20px;
                    padding-right: 48px;
                    input {
                        width: 100%;
                        height: 100%;
                        padding: 2px 16px;
                        border: none;
                        outline: none;
                        font-size: 18px;
                    }
                }
                .icon {
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 40px;
                    height: 100%;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    img {
                        width: 20px;
                        height: 20px;
                        opacity: 0.7;
                    }
                }
            }
            .add_link {
                padding-top: 60px;
                display: grid;
                height: auto;
                align-content: start;
                grid-template-columns: repeat(5, minmax(70px, 1fr));
                gap: 30px;
                .item {
                    .icon {
                        background-color: #5453f9;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        line-height: 40px;
                        font-weight: 600;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        span {
                            background-color: #fff;
                            border-radius: 50%;
                            height: 20px;
                            width: 20px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                    }
                    .text {
                        color: #888;
                        padding-top: 8px;
                    }
                }
            }
        }
    }
</style>