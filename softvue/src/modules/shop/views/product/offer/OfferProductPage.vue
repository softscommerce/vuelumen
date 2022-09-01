<template>
    <div class="users">
        <div class="lists">

            <h4 class="heading">
                Products
                <button class="btn btn_border btn_sm">
                    <router-link @click="offerProductOpen" to="#" >Add Offer Products</router-link>
                </button>
            </h4>


              <form @submit.prevent="OfferProductSubmit">


                    <base-modal v-if="openofferProduct" @close="openofferProduct = false">
                    <template #header>
                        Add Offer Product
                    </template>

                    <template #default >
                        
                      <div class="mb_3">
                            <BaseSelectu 
                            label="Product"
                            :options="user_product_data"
                            :default="'Product'"
                            class="select"
                            :star="true" 
                            :validation="errorMsg['product']"
                            @input="displayToOfferProduct($event)"
                        
                        />
                        </div>

                         <div class="mb_3"><br><br>
                            <base-input label="Old Price" v-model="old_offer_price" placeholder="Old Price" :readonly="true"></base-input>
                        </div>


                        <div class="mb_3"><br><br>
                            <base-input label="New Price" v-model="offer_price" placeholder="Price"></base-input>
                        </div>
                       
                    </template>
                    <template #actions> <br>
                        <base-button @click="OfferProductSubmit" type="submit">
                            Submit
                        </base-button>
                    </template>
                    
                    </base-modal>
                    </form>



            <div class="data_view">
                <ul class="items">
                    <li class="item">
                        <router-link to="" class="link">All <span class="count"></span></router-link>
                    </li> |
                    <li class="item">
                        <router-link to="" class="link">Published <span class="count"></span>
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

            <div class="table_filter">
                <div class="actions">
                    <form @submit.prevent="productActionSubmit">
                        <select class="form_select" v-model="product_action" aria-label="Default select">
                            <option value="">Bulk Actions</option>
                            <option value="delete">Delete</option>
                        </select>
                        <button type="submit" class="btn btn_border btn_sm">Apply</button>
                    </form>
                    <form>
                        <select class="form_select" aria-label="Default select example">
                            <option value="-1">Change role to…</option>
                            <option value="shop_manager">Stock In</option>
                            <option value="customer">Stock out</option>
                            <option value="subscriber">Low price</option>
                            <option value="contributor">High price</option>
                        </select>
                        <button type="submit" class="btn btn_border btn_sm">Filter</button>
                    </form>
                </div>
                <div class="pagination">
                    <div class="row_count"> items</div>

                    <div class="page" v-if="pages">
                        	<ul class="pagination">
                                <li class="page-item">
                                    <button type="button" class="page-link" v-if="page.count != 1" @click="page.count--" > Previous </button>
                                </li>
                                <li class="page-item">
                                   
                                    <button type="button" class="page-link" v-for="pageNumber in pages.slice(page.count-1, page.count+5)" :key="pageNumber" @click="[page.count = pageNumber]"> {{pageNumber}} </button>
                                </li>
                                <li class="page-item">
                                    <button type="button" @click="page.count++" v-if="page.count < pages.length" class="page-link"> Next </button>
                                </li>


                            </ul>
                    </div>
                </div>
            </div>
            <div class="table_responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <input type='checkbox' @click="selectAll" v-model="selected_all"> Check All
                            </th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Categories</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody v-if="search_text != ''">
                        <tr v-if="search_data == ''">
                            <td colspan="6">Search Not Found!</td>
                        </tr>
                        <tr v-else v-for="(data, index) in search_data" :key="index">
                            <td class="checkbox">
                                 <input type='checkbox' v-bind:value='data._id' v-model='select_value' @change='updateCheckall'>
                            </td>
                            <td class="image">
                                <span><img style="width:75px; height:75px;" :src="data.feature_image" alt="Image"></span>
                            </td>
                            <td class="name">
                                <a href="#">{{ data.product_name }}</a>
                            </td>
                            <td class="in_stock">{{data.stock}}</td>
                            <td class="price">{{data.sale_price}} ৳</td>
                            <td class="category">{{data?.brand?.name}}</td>
                            <td class="category">{{data?.category?.name}}</td>
                           
                            <td class="date_pub">
                                <p class="pub_unpub">Published</p>
                                <p class="date">2020/06/20 at 4:38 am</p>
                            </td>
                            <td class="actions">
                                <router-link :to="'/mypanel/service/profile/'+profile_id+'/products/edit_product/'+data._id" class="edit">Edit</router-link>
                                <router-link to="" class="delete" @click="onClick(data._id)">Delete</router-link>
                            </td>
                        </tr>
                    </tbody>


                    <tbody v-else>
                        <tr v-for="(data, index) in products_data" :key="index">
                            <td class="checkbox">
                                <input type='checkbox' v-bind:value='data._id' v-model='select_value' @change='updateCheckall'>
                            </td>
                            <td class="image">
                                <span><img style="width:75px; height:75px;" :src="data.feature_image" alt="Image"></span>
                            </td>
                            <td class="name">
                                <a href="#">{{ data.product_name }}</a>
                            </td>
                            <td class="in_stock">{{data.stock}}</td>
                            <td class="price">{{data.sale_price}} ৳</td>
                            <td class="category">{{data?.brand?.name}}</td>
                            <td class="category">{{data?.category?.name}}</td>
                            {{data.status}}
                            <td class="category"><BaseSwitch :modelValue="data.status" v-model="switchModel" /></td>
                           
                            <td class="date_pub">
                                <p class="pub_unpub">Published</p>
                                <p class="date">{{fetchDateTimeFormate(data.created_at)}}</p>
                            </td>
                            <td class="actions">
                                <router-link to="#" @click="editOfferProductModal(data._id)" class="edit">Edit</router-link>


                               <router-link to="" class="delete" @click="onClick(data._id)">Delete</router-link>
                            </td>
                        </tr>
                    </tbody>

                </table>

                  <base-popupa v-if="modalShow" :floorplan="delete_data_modal[id]" @PopupOk="modalShow = false">
                    <template #title>Are you sure delete form offer list</template>
                    <template #actions>
                       <base-button type="button" @click="modalShow = false">Close</base-button>
                       <base-button type="submit" @click="deleteProduct(id)">Ok</base-button>
                        
                    </template>
                   </base-popupa>


                    <form @submit.prevent="OfferProductSubmit">


                    <base-modal v-if="openofferProductEdit" :floorplan="edit_data_modal[editId]" @close="openofferProductEdit = false">
                    <template #header>
                        Edit Offer Product
                    </template>

                    <template #default >
                        

                         <div class="mb_3"><br><br>
                            <base-input label="Current Offer Price" v-model="old_offer_price_edit" placeholder="Old Price" :readonly="true"></base-input>
                        </div>


                        <div class="mb_3"><br><br>
                            <base-input label="New Price" v-model="offer_price_edit" placeholder="Price"></base-input>
                        </div>
                       
                    </template>
                    <template #actions> <br>
                        <base-button @click="OfferProductEditSubmit" type="submit">
                            Submit
                        </base-button>
                    </template>
                    
                    </base-modal>
                    </form>
            </div>
        </div>

    </div>

    
</template>
<script>


import { ref, reactive, onMounted, watch, computed } from 'vue';
import productApi from './composible/offer-product-api.js';
import { useStore } from 'vuex'
import Validation from '@/Helpers/helpers';
export default {
    setup() {

        const store = useStore();
        const search_data = ref([]);
        const search_text = ref('');
        const products_data = ref([]);
        const select_value = ref([]);
        const selected_all = ref(false);
        const checked_add = ref(false);
        const product_action = ref('');
        const user_product_data = ref([]);
       
        const pages = ref([]);
        const product_all_data = ref('');
        const pageNumber = ref(0);
        const page = reactive({count:1});
        //add offer variable
        const old_offer_price = ref('');
        const product_id = ref(0);
        const offer_price = ref('');
        const openofferProduct = ref(false);
        const {Validations,  errorMsg } = Validation();

        // delete option
        const modalShow = ref(false);
        const id = ref('');
        const editId = ref('');
        const delete_data_modal = ref([]);

        // offer product edit section
        const openofferProductEdit  = ref(false);
        const edit_data_modal = ref([]);
          const old_offer_price_edit = ref('');
        const offer_price_edit = ref('');
        // switch part
        const switchModel = ref(true);
        const checkedValue = ref(true);

        //  const unpaid = computed(() =>{
        //  const unpaids =  products_data.value.filter(item=>{
        //         if(item.status == "1"){
        //            checkedValue.value = true;
        //         }
        //     });

        //    return unpaids.length;
        // });

        const editOfferProductModal =(data) =>{
             openofferProductEdit.value = true;
             editId.value = data;
              const datas = products_data.value.filter(item =>{
                        return item._id == data;
                    });
                    if(datas){
                        old_offer_price_edit.value = datas[0].sale_price;

                    }

                }

        const OfferProductEditSubmit = async () =>{
             const form  = new FormData();
                form.append('product_id', editId.value);
                form.append('offer_price', offer_price_edit.value);
                form.append('old_offer_price', old_offer_price_edit.value);

                 const product = await productApi.update(editId, form);

                  openofferProductEdit.value = false;

                    const payload = {
                        type: product.data.type,
                        message: product.data.data
                    };
                    
                store.dispatch('addNotification', payload)
                const products =  await productApi.getAll();
                products_data.value = products.data.data;
        }



        const offerProductOpen = () =>{
            openofferProduct.value = true;
        }

        const onClick = (data) => {
            modalShow.value = true;
            id.value = data;

        }

        const displayToOfferProductEdit = (event) =>{
            if(event != 'Product'){
                 const data = user_product_data.value.filter(item =>{
                        return item._id == event;
                    });
             old_offer_price.value = data[0].sale_price;
             product_id.value = event;
            Validations['product'](product_id.value, 'Product is required');
            
            }else{
                product_id.value = 0;
            }
        }



        const displayToOfferProduct = (event) =>{
            if(event != 'Product'){
                 const data = user_product_data.value.filter(item =>{
                        return item._id == event;
                    });
             old_offer_price.value = data[0].sale_price;
             product_id.value = event;
            Validations['product'](product_id.value, 'Product is required');
            
            }else{
                product_id.value = 0;
            }
           
           
        }

        const OfferProductSubmit = async() =>{
            if( product_id.value == 0){
                 Validations['product'](product_id.value, 'Product is required');
            }

            const form  = new FormData();
                form.append('product_id', product_id.value);
                form.append('offer_price', offer_price.value);
                form.append('old_offer_price', old_offer_price.value);

                 const product = await productApi.create(form);

                  openofferProduct.value = false;

                    const payload = {
                        type: product.data.type,
                        message: product.data.data
                    };
                    
                store.dispatch('addNotification', payload)
                const products =  await productApi.getAll();
                products_data.value = products.data.data;
        }



        const selectAll = () =>{

        select_value.value = [];
        if(!selected_all.value){ // Check all
            for (var key in products_data.value) {
            select_value.value.push( products_data.value[key]._id);
            selected_all.value = true;
            }
            }else{
                select_value.value = [];
                selected_all.value = false;
            }

        }

        watch(page, (newold, old) => { 
            getPaginateProduct(page.count)

            })

        const setPages = () => {
			let numberOfPages = Math.ceil( product_all_data.value.length / 20);
            setTimeout(() => {
                for (let index = 1; index <= numberOfPages; index++) {
                console.log('ok')
				pages.value.push(index);
                console.log(pages.value);
			}
            }, 100);

		}

      

       const updateCheckall= () =>{
       
            if(select_value.value.length == products_data.value.length){
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
            const productDelete = await productApi.allProductDelete(form);
            const payload = {
                type: productDelete.data.type,
                message: productDelete.data.data
            };


         store.dispatch('addNotification', payload)
         const products =  await productApi.getAll(page.count);
            products_data.value = products.data.data;

 
        }   
        
      
    const getPaginateProduct = async(page) => {
         const products =  await productApi.getAll(page);
             products_data.value =  products.data.data;
            }

        onMounted(async()=>{
          
           const productss =  await productApi.getAll(page.count);
            products_data.value = productss.data.data;
           const productes =  await productApi.getAllProduct();
            user_product_data.value = productes.data;
            console.log(products_data.value);
            setPages();
           
        });

        

        

        const fetchDateTimeFormate = ( data) =>{
             var items = data.split(' ');
              return items[0]+ ' at '+items[1] + ' '+items[2];
        }

        const deleteProduct = (data) =>{
            console.log(data);
           products_data.value = products_data.value.filter(item => {
                    return (item._id != data); 
                });

                   productApi.delete(data).then(res=>{
                    modalShow.value = false;
                    const payload ={
                        type: res.data.type,
                        message: res.data.data
                    }
                    store.dispatch('addNotification', payload)

                })
        }

        const TableSearch = () => {
            if (search_text.value.length > 0) {
                return search_data.value = products_data.value.filter(item => {
                    return (
                        item.product_name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.category.name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.sale_price.toLowerCase().includes(search_text.value.toLowerCase())
                    );
                })
            } else {
                return products_data.value;
            }

        }

        return {
            products_data,
            search_data,
            search_text,
            TableSearch,
          
            fetchDateTimeFormate,
            deleteProduct,
            select_value,
            selected_all,
            selectAll,
            checked_add,
            product_action,
            productActionSubmit,
            updateCheckall,
            setPages,
            pages,
            page,
            pageNumber,
            product_all_data,
            getPaginateProduct,
            openofferProduct,
            offerProductOpen,
            displayToOfferProduct,
            OfferProductSubmit,
            user_product_data,
            old_offer_price,
            Validations,
            errorMsg,
            product_id,
            offer_price,
            onClick,
            delete_data_modal,
            modalShow,
            id,
            openofferProductEdit, 
            edit_data_modal, 
            editOfferProductModal,
            editId,
            old_offer_price_edit,
            OfferProductEditSubmit,
            switchModel,
            checkedValue
        }
    },

     data(){
        return{
            profile_id: this.$route.params.pid
        }
    },


    created (){
        const vat = this.$route.path.split("/")[4];
        this.profile_id = vat;
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