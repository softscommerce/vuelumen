<template>
    <div class="users">
        <div class="lists">
            <div class="data_view">
                <ul class="items">
                    <li class="item">
                        <router-link to="" class="link">Paid <span class="count">({{paid}})</span></router-link>
                    </li> |
                    <li class="item">
                        <router-link to="" class="link">Unpaid <span class="count">({{unpaid}})</span>
                        </router-link>
                    </li>
                </ul>
                <div class="search">
                    <!--<form class="">-->
                    <input type="text" class="form-control" @keyup="TableSearch" v-model="search_text">
                    <!--<button type="submit" class="btn btn_sm btn_border">Search</button>-->
                    <!--</form>-->
                </div>
            </div>

         
            <div class="table_responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Profile</th>
                            <th>Station</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Expire</th>
                            <th>Pay</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody v-if="search_text != ''">
                        <tr v-if="search_data == ''">
                            <td colspan="6">Search Not Found!</td>
                        </tr>
                        <tr v-for="(data, index) in search_data" :key="index">
                            <td>{{index+1}}</td>
                            
                            <td class="name">
                                <a href="#">{{ data.name }}</a>
                            </td>
                            <td class="in_stock">{{data.workstation.name}}</td>
                            <td class="price">{{data.category.name.en}} ৳</td>
                            <td class="category">{{data.profile_type}}</td>
                            <td class="category">{{data.expired_at}}</td>
                            <td class="tag"><span v-if="data.paystatus">Paid</span><span v-else>Unpaid</span></td>
                            <td  class="category"><span v-if="data.status">Open</span> <span v-else>Close</span></td>
                           
                            <td class="actions">
                                 <router-link class="edit" style="background:green;" :to="'/mypanel/service/profile/'+data._id">View</router-link>&nbsp;
                                <router-link to="#" class="edit">Edit</router-link>&nbsp;

                               <span>
                                 <router-link to="#" v-if="data.open == 'true'" @click="shopActive(data.open, data._id)" class="delete">Close</router-link>
                                <router-link style="background:green;" to="#" v-else  @click="shopActive(data.open, data._id)" class="edit">Open</router-link>
                               </span>

                                  &nbsp;

                                   <router-link v-if="!data.paystatus" to="#" @click="onClick(data._id)" class="edit">Pay
                                    
                                   </router-link>
                            </td>
                        </tr>
                    </tbody>


                    <tbody v-else>
                        <tr v-for="(data, index) in profile_data" :key="index">
                            <td>{{index+1}}</td>
                            
                            <td class="name">
                                <a href="#">{{ data.name }}</a>
                            </td>
                            <td class="in_stock">{{data.workstation.name}}</td>
                            <td class="price">{{data.category.name.en}} ৳</td>
                            <td class="category">{{data.profile_type}}</td>
                            <td class="category">{{data.expired_at}}</td>
                            <td class="tag"><span v-if="data.paystatus">Paid</span><span v-else>Unpaid</span></td>
                            <td  class="category"><span v-if="data.status">Open</span> <span v-else>Close</span></td>
                           
                            <td class="actions">
                                 <router-link class="edit" style="background:green;" :to="'/mypanel/service/profile/'+data._id">View</router-link>&nbsp;
                                <router-link to="#" class="edit">Edit</router-link>&nbsp;

                               <span>
                                 <router-link to="#"  v-if="data.open == 'true'" @click="shopActive(data.open, data._id)" class="delete">Close</router-link>
                                <router-link to="#" style="background:green;" v-else  @click="shopActive(data.open, data._id)" class="edit">Open</router-link>
                               </span>

                                  &nbsp;

                                   <router-link v-if="!data.paystatus" to="#" @click="onClick(data._id)" class="edit">Pay
                                    
                                   </router-link>
                            </td>
                        </tr>
                    </tbody>

                </table>

                 <base-popupa v-if="modalShow" :floorplan="profile_data[id]" @PopupOk="modalShow = false">
                    <template #title>Pay Now</template>
                    <template #actions>
                            
                            <base-button type="button" @click="modalShow = false">Close</base-button>
                            <base-button type="submit" @click="payNow(id)">Ok</base-button>
                        
                    </template>
                   </base-popupa>
            </div>
        </div>
    </div>
</template>
<script>
import { ref, onMounted, computed } from 'vue';
import serviceApi from './composible/service-api.js';
import { useStore } from 'vuex';
import {useRouter} from 'vue-router';
export default {

    

    setup() {
        const router = useRouter();
        const store = useStore();
        const search_data = ref([]);
        const search_text = ref('');
        const profile_data = ref([]);

      
        const id = ref('');

        const confirm = ref([]);
        const modalShow = ref(false);

      



        const shopActive = async (data, id) =>{
            let datas = true;
            if(data == 'true'){
                datas = false;
            }
           
            console.log(datas);
             const form = new FormData();
                form.append('id', id);
                form.append('data', datas);
             const shopdata = await serviceApi.shopActiveOff(form);

             if(shopdata.data.data){
                const payload = {
                        type: shopdata.data.type,
                        message: shopdata.data.data
                    };
                store.dispatch('addNotification', payload);
                const profile =  await serviceApi.getServiceProfileList();
                profile_data.value = profile.data.data;

             }
        }


        const onClick = (data) => {
            modalShow.value = true;
            id.value = data;

        }

  
         const payNow = async(data) =>{
            const form = new FormData();
            form.append('id', data);
            console.log(data);
             const pays = await serviceApi.payNow(form);
             console.log(pays.data);

             if(pays.data.data){
                const payload = {
                        type: pays.data.type,
                        message: pays.data.data
                    };

                store.dispatch('addNotification', payload);

                if(pays.data.route == 'route'){
                    router.push('/user-balance');
                }

                  modalShow.value = false;
                   const profile =  await serviceApi.getServiceProfileList();
                    profile_data.value = profile.data.data;
             }
            }
 

       const updateCheckall= () =>{
       
            if(select_value.value.length == profile_data.value.length){
               selected_all.value = true;
            }else{
                selected_all.value = false;
            }

             console.log( selected_all.value)
            }

        const productActionSubmit = async() =>{
            const form = new FormData();
            form.append('select_value', select_value.value);
            form.append('product_action', product_action.value);
            console.log(select_value.value, selected_all.value);
         const productDelete = await serviceApi.allProductDelete(form);
          const payload = {
            type: productDelete.data.type,
            message: productDelete.data.data
         };

         store.dispatch('addNotification', payload)
 
        }   
        
      

        onMounted(async()=>{
           const profile =  await serviceApi.getServiceProfileList();
            profile_data.value = profile.data.data;
           
        });

     const unpaid = computed(() =>{
         const unpaids =  profile_data.value.filter(item=>{
           return item.paystatus == "0";
            });

           return unpaids.length;
        });

         const paid = computed(() =>{
         const paids =  profile_data.value.filter(item=>{
           return item.paystatus == "1";
            });

           return paids.length;
        });

      

        

        const fetchDateTimeFormate = ( data) =>{
             var items = data.split(' ');
              return items[0]+ ' at '+items[1] + ' '+items[2];
        }



        const deleteProduct = (data) =>{
           profile_data.value = profile_data.value.filter(item => {
                    return (item._id != data._id); 
                });

                   serviceApi.delete(data._id).then(res=>{
                    const payload ={
                        type: res.data.type,
                        message: res.data.data
                    }
                    store.dispatch('addNotification', payload)

                });
        }

        const TableSearch = () => {
            if (search_text.value.length > 0) {
                return search_data.value = profile_data.value.filter(item => {
                    return (
                        item.product_name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.category.name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.sale_price.toLowerCase().includes(search_text.value.toLowerCase())
                    );
                })
            } else {
                return profile_data.value;
            }

        }

        return {
            profile_data,
            search_data,
            search_text,
            TableSearch,
            fetchDateTimeFormate,
            deleteProduct,
            productActionSubmit,
            updateCheckall,
        
            onClick,
            modalShow,
            confirm,
            payNow,
            id,
            shopActive,
            unpaid,
            paid
        }
    },


}
</script>
<style lang="scss" scoped>


.pagination{
    list-style: none;
}

button.page-link {
	display: inline-block;
    padding: 5px;
    margin: 5px;
    cursor: pointer;
}
button.page-link {
    font-size: 20px;
    color: #29b3ed;
    font-weight: 500;
}
.offset{
  width: 500px !important;
  margin: 20px auto;  
}

.lists {
    .heading {
        font-size: 18px;
        font-weight: 600;
        color: #444;
        margin-bottom: 10px;
        .btn_border {
            border: none;
            outline: none;
            background-color: transparent;
            a {
                font-weight: 600;
                border: 1px solid #5492bc;
                color: #5492bc;
                padding: 6px 12px;
                margin-left: 8px;
                border-radius: 4px;
                cursor: pointer;
                text-decoration: none;
            }
        }
    }

    .data_view {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        row-gap: 12px;
        margin-bottom: 12px;

        .items {
            display: flex;
            list-style: none;

            .item {
                .link {
                    color: #5492bc;
                    font-size: 14px;
                    margin: 0 4px;
                    cursor: pointer;
                }
            }
        }

        .search {
            display: flex;
            flex-wrap: wrap;
            row-gap: 12px;

            form {
                display: flex;
                flex-wrap: wrap;
                row-gap: 12px;
            }

            input {
                width: 200px;
                outline: none;
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 8px;
            }

            button {
                border: none;
                outline: none;
                background-color: transparent;
                border: 1px solid #5492bc;
                color: #5492bc;
                padding: 8px 16px;
                margin-left: 8px;
                border-radius: 4px;
                cursor: pointer;
            }
        }
    }

    .table_filter {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        row-gap: 12px;

        .actions {
            display: flex;
            flex-wrap: wrap;
            row-gap: 12px;
            column-gap: 12px;

            form {
                display: flex;
                flex-wrap: wrap;
                row-gap: 12px;
                column-gap: 12px;

                .form_select {
                    width: auto;
                    outline: none;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 8px;
                }

                button {
                    border: none;
                    outline: none;
                    background-color: transparent;
                    border: 1px solid #5492bc;
                    color: #5492bc;
                    padding: 8px 16px;
                    margin-left: 8px;
                    border-radius: 4px;
                    cursor: pointer;
                }
            }
        }

        .pagination {
            display: flex;
            gap: 20px;
            align-items: center;

            .row_count {
                font-size: 14px;
                color: #444;
            }

            .page {
                border: 1px solid #ddd;
                border-radius: 4px;
                overflow: hidden;

                .link {
                    border-right: 1px solid #ddd;
                    text-decoration: none;
                    padding: 4px 8px;
                    display: inline-block;
                    font-size: 13px;
                    cursor: pointer;
                    transition: all 0.3s ease 0s;
                    -webkit-transition: all 0.3s ease 0s;

                    &:last-child {
                        border-right: 0px solid #ddd;
                    }

                    &:hover {
                        background-color: #5492bc;
                        color: #fff;
                    }
                }
            }
        }
    }

    .table_responsive {
        width: 100%;
        overflow-x: auto;
        border: 1px solid #ddd;
        margin: 12px 0;

        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

            td,
            th {
                padding: 12px 8px;
            }

            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                color: #444;
                font-size: 14px;
            }

            td {
                font-size: 14px;
                color: #444;
            }

            th.star img,
            td.star img {
                width: 16px;
            }

            thead {
                border-bottom: 1px solid #ddd;
            }

            tbody {
                tr {
                    border-bottom: 1px solid #ddd;
                }

                tr:nth-child(odd) {
                    background-color: #f6f6f6;
                }

                tr:hover {
                    background-color: #eee;
                }

                .img {
                    span {
                        width: 40px;
                        height: 40px;
                        display: block;

                        img {
                            max-width: 100%;
                        }
                    }
                }

                .actions {

                    .edit,
                    .delete {
                        border-radius: 4px;
                        text-decoration: none;
                        color: #fff;
                        padding: 4px 8px;
                        font-size: 13px;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                    }

                    .edit {
                        background-color: #5492bc;

                        &:hover {
                            background-color: #5da8da;
                        }
                    }

                    .delete {
                        background-color: #ca371a;
                        margin-left: 4px;

                        &:hover {
                            background-color: #dc492c;
                        }
                    }
                }
            }

            tfoot {
                th {
                    border-bottom: 0px solid #ddd;
                }
            }
        }
    }
}
</style>