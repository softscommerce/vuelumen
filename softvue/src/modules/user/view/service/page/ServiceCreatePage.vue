<template>
    <div class="service_page" style="margin-bottom: 500px">
        <div class="service_setup">
            <h4 class="heading mb_4">Add new Service</h4>
            <form class="form_data" @submit.prevent="createProfileSubmit">
                <div class="left">
                    <div class="mb_3" style="z-index:4">
                        <!-- <base-selects
                            label="Work Station"
                            :options="get_mobile"
                            v-model="mobile"
                        ></base-selects> -->
                        <label for="" style=" margin-bottom: 8px; display: inline-block; color: #555; font-size: 16px;">Mobile</label>
                         <autocomplete :items="get_mobile"
                            filterby="mobile"
                            title="Mobile Number"
                            @selected="customerSelected"></autocomplete>
                    </div>

                    <div class="mb_3"  style="z-index:3">


                        <!-- <base-select
                            label="Work Station"
                            :options="data"
                            v-model="select_change"
                        ></base-select> -->

                        <BaseSelect 
                            label="Work Station"
                            :options="data"
                                :default="'Work Station'"
                                class="select"
                                @input="displayToKey($event)"
                            
                            />

                    </div>

                    <div class="mb_3"  style="z-index:2">

                         <BaseSelectc 
                            label="Category"
                            :options="categories"
                                :default="'Category'"
                                class="select"
                                @input="displayToCategory($event)"
                            
                            />
                       <!-- <base-select1
                         label="Category"
                         :options="categories"
                          v-model="category"
                        >
                        
                        </base-select1> -->
                    </div>

<!-- v-if="getBusinessShop" -->

                    <div class="mb_3"  v-if="getBusinessShop">
                        <!-- <base-select
                         label="Community"
                         :options="communities"
                          v-model="community"
                        >

                        </base-select> -->

                         <BaseSelect 
                            label="Community"
                                :options="communities"
                                :default="'Community'"
                                class="select"
                                @input="displayToCommunity($event)"
                            
                            />
                    </div>
                    <div class="mb_3 vue_input">
                        <!-- <base-input
                            label="Google Location"
                        v-model="origin"></base-input> -->

                        <label for="">Location</label>

                        <input type="text" name="" style="height:40px; width:100%;" ref="origin" id="">
                    </div>

                     <div class="mb_3">
                        <!-- <label for="business_name">Business Name</label>
                        <input type="text" style="height:40px; width:100%;" v-model="business_name" id="business_name"> -->

                        <BaseInput label="Business Name" placeholder="Business name" type="text" v-model="business_name" />
                     </div>

                      <div class="mb_3">
                        <!-- <label for="address">Address</label>
                        <input type="text" style="height:40px; width:100%;" v-model="address" id="address"> -->

                         <BaseInput label="Address" placeholder="Enter address" type="text" v-model="address" />
                     </div>



                    <div class="mb_3 d_flex">
                        <base-radiobox
                            divClass="d_flex_10"
                            label="Pay Now"
                            attributeName="true"
                            name="paynow"
                            value="paynow"
                            v-model="paynow"
                            type="radio"
                        ></base-radiobox>
                          <!-- <input  v-model="paynow" name="removelines" type="radio" class ="cheker" autocomplete="off" value="paynow" checked> paynow
                          <input  v-model="paynow" name="removelines" type="radio" class ="cheker" autocomplete="off" value="trial" >Trial -->
                        <base-radiobox
                            divClass="d_flex_10"
                            label="Trial"
                            name="paynow"
                            value="trial"
                            v-model="paynow"
                             type="radio"
                        ></base-radiobox>
                    </div>
                    <div class="mb_3">
                        <!-- <base-button
                            small="btn_sm w_100 boder_radius1"
                            type="submit"
                        >Submit</base-button> -->
                        <base-button  type="submit" class="full_with">Submit</base-button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</template>
<script>
import { ref, onMounted, watch, computed } from 'vue'

import axios from 'axios';
import { useStore } from 'vuex'
export default {
    setup() {
         const store = useStore()
        const select_change = ref('');
        const category = ref('');
        const mobile = ref('');
        const getBusinessShop = ref(false);
        const community = ref('');
        const origin = ref('');
        const location = ref('');
        const lat = ref('');
        const lng = ref('');
        const business_name = ref('');
        const address = ref('');
        const paynow = ref('paynow');


        const get_mobile = ref(['']);
         const data = ref([]);
         const categories = ref([]);
         const communities = ref([]);


         const displayToKey  = (event) =>{
            console.log(event);
            select_change.value = event;
            if(event != 'Work Station'){
             getcategories(event);
            }
            }

         const displayToCategory  = (event) =>{
            console.log(event);
            category.value = event;
             getBusinessType(event)
            //  getCommunities();
            }

         const displayToCommunity  = (event) =>{
            console.log(event);
            community.value = event;
             
            }



      const getmobiles = async () =>{
            try{
                const mobiles = await axios.get('/api/user/get_mobiles');
                if(mobiles.data){
                    get_mobile.value = mobiles.data;
                }else{
                    throw Error('User Mobile Number not found');
                }

            }catch(err){

                console.log(err.message);
            }
        }

        const getworstations = async () =>{
            try{
                const datas = await axios.get('/api/user/work_station');
                if(datas.data){
                    data.value = datas.data;
                }else{
                    throw Error('Workstation data not found');
                }
               
            }catch(err){

                console.log(err.message);
            }
        }

         const getcategories = async (id) =>{
            try{
                const category = await axios.get(`/api/user/get_categories/${id}`);
                if(category.data){
                    categories.value = category.data;
                }else{
                    throw Error('categories data not found');
                }

               
            }catch(err){

                console.log(err.message);
            }
        }


         const getBusinessType = async (id) =>{
            try{
                const getBusinessShopon = await axios.get(`/api/user/get_categories_shop/${id}`);
                if(getBusinessShopon.data){
                    
                }
                    getBusinessShop.value = getBusinessShopon.data;
                    getCommunities()
              
            }catch(err){

                console.log(err.message);
            }
        }


        //  const getCommunities = async () =>{
        //     try{
        //         const getCommunity = await axios.get('/api/user/get_community');
        //         console.log(getCommunities)
        //         communities.value = getCommunity.data;
              
        //     }catch(err){

        //         console.log(err.message);
        //     }
        // }


          const getCommunities =  () =>{
            try{
                 axios.get('/api/user/get_community').then(res =>{
                    console.log(res)
                communities.value = res.data;
                })
               
              
            }catch(err){

                console.log(err.message);
            }
        }





    //     watch( select_change,
    //         (currentValue, prevValue) => {
    //          getcategories(currentValue);
    //         },

    //    );


        //  watch( category,
        //     (currentValue, prevValue) => {
        //      getBusinessType(currentValue);
        //     },

    //    );

      
        // console.log(getBusinessType);
        onMounted(()=>{
            getworstations();
            getmobiles();

                const originAutocomplete =  new google.maps.places.Autocomplete(
            origin.value,
            {
                bounds: new google.maps.LatLngBounds(
                    new google.maps.LatLng(45.2425296, -75.6971931)
                )
            }
        );


         originAutocomplete.addListener("place_changed", () => {
        const place = originAutocomplete.getPlace();
        location.value = place.formatted_address;
        lat.value = place.geometry.location.lat();
        lng.value = place.geometry.location.lng();

       });


        });

        const  customerSelected = (customer) => {
            mobile.value = customer.mobile
        }

        const createProfileSubmit = async ()=>{
            const form = {
                mobile: mobile.value,
                workstation: select_change.value,
                category: category.value,
                community: community.value,
                location:location.value,
                lat: lat.value,
                lng: lng.value,
                business_name: business_name.value,
                address: address.value,
                paynow: paynow.value

            };

            axios.post('/api/user/user_service_profile_create', form)
            .then(res =>{
                if(res.data.error){
                    const payload = {
                        type:'failure',
                        message: res.data.error
                    }
                    store.dispatch('addNotification', payload);
                }
                if(res.data.success){
                    const payload = {
                        type:'success',
                        message: res.data.success
                    }
                    store.dispatch('addNotification', payload);
                }
            })
        }

        return {
            select_change,
            data,
            categories,
            category,
            get_mobile,
            getBusinessShop,
            communities,
            community,
            customerSelected,
            origin,
            createProfileSubmit,
            business_name,
            address,
            paynow,
            displayToKey,
            displayToCategory,
            displayToCommunity,
            
            
            
        }
    },

   
}
</script>




<style lang="scss" scoped>
.mb_2 { margin-bottom: 8px; }
.mb_3 { margin-bottom: 12px; }
.mb_4 { margin-bottom: 16px; }
.d_flex { display: flex; column-gap: 20px; }
.d_flex_10 { display: flex; column-gap: 10px; }
.w_100 { width: 100%; }
.service_page {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
//     box-shadow:
//   0 2.8px 2.2px rgba(0, 0, 0, 0.034),
//   0 6.7px 5.3px rgba(0, 0, 0, 0.048),
//   0 12.5px 10px rgba(0, 0, 0, 0.06),
//   0 22.3px 17.9px rgba(0, 0, 0, 0.072),
//   0 41.8px 33.4px rgba(0, 0, 0, 0.086),
//   0 100px 80px rgba(0, 0, 0, 0.12);

box-shadow:
0 2.8px 2.2px rgba(0, 0, 0, 0.034),
0 6.7px 5.3px rgba(0, 0, 0, 0.048),
0 12.5px 10px rgba(0, 0, 0, 0.06),
0 22.3px 17.9px rgba(0, 0, 0, 0.072),
0 41.8px 33.4px rgba(0, 0, 0, 0.086),
0 100px 80px rgba(0, 0, 0, 0.12)
;
    .service_setup {
        
        .form_data {
            width: 100%;
            display: flex;
            column-gap: 20px;
            .left {
                width: 450px;
                margin: 0 auto;
            }
           
        }
    }
}


$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {
    .service_page {
        width: 100%;
        .service_setup {
            .form_data {
                .left {
                    width: 500px;
                }
                
            }
        }
    }
}
@media (max-width: #{$tablet-width}) {
    .service_page {
        width: 100%;
        .service_setup {
            .form_data {
                .left {
                    width: 500px;
                }
                
            }
        }
    }
}

@media (max-width: #{$phone-width}) {
    .service_page {
        .service_setup {
            .form_data {
                width: 100%;
                display: block;
                .left {
                    width: 100%;
                }
               
            }
        }
    }
}

@media (max-width: #{$phone-width-small}) {
    
}
</style>

<style lang="scss" scoped>
.heading{
    margin: 0 auto;
    width: 450px;
    padding: 14px 0px;
    color: #444;
    font-size: 21px;
}
.vue_input {
    width: 100%;
    label {
        margin-bottom: 8px;
        display: inline-block;
        color: #555;
        font-size: 16px;
        // text-shadow: 0 1px 1px #5b8fce;
    }
    input {
        width: 100%;
        height: 45px;
        border: none;
        outline: none;
        padding: 4px 16px;
        border-radius: 4px;
        color: #444;
        letter-spacing: 1px;
        font-size: 16px;
        box-shadow: -5px -5px 9px rgba(255, 255, 255, 0.45), 5px 5px 9px rgba(94, 104, 121, 0.3),-5px -5px 9px rgba(255, 255, 255, 0.45),
            5px 5px 9px rgba(94, 104, 121, 0.3);
        background-color: #f9f9f9;
        position: relative;
        &::placeholder {
            color: #999;
        }
    }

}
</style>