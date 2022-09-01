<template>
    <div class="users">
        <div class="lists">
            <h4 class="heading">
                Products
                <button class="btn btn_border btn_sm">
                    <router-link :to="'/mypanel/service/profile/'+profile_id+'/products/add'">Add Products</router-link>
                </button>
            </h4>
            <div class="data_view">
                <ul class="items">
                    <li class="item">
                        <router-link to="" class="link">All <span class="count">({{products_data.length}})</span></router-link>
                    </li> |
                    <li class="item">
                        <router-link to="" class="link">Published <span class="count">({{products_data.length}})</span>
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
                    <div class="row_count">{{products_data.length}} items</div>

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
                            <th>Tags</th>
                            <th class="star">
                                <img src="@/assets/icons/star.svg" alt="Star">
                            </th>
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
                            <td class="in_stock">{{data.units}}</td>
                            <td class="price">{{data.sale_price}} ৳</td>
                            <td class="category">{{data?.brand?.name}}</td>
                            <td class="category">{{data?.category?.name}}</td>
                            <td class="tag">---</td>
                            <td class="star">
                                <img src="@/assets/icons/star.svg" alt="Star">
                            </td>
                            <td class="date_pub">
                                <p class="pub_unpub">Published</p>
                                <p class="date">2020/06/20 at 4:38 am</p>
                            </td>
                            <td class="actions">
                                <router-link :to="'/mypanel/service/profile/'+profile_id+'/products/edit_product/'+data._id" class="edit">Edit</router-link>
                                <router-link to="" class="delete" @click="deleteProduct(data)">Delete</router-link>
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
                            <td class="in_stock">{{data.units}}</td>
                            <td class="price">{{data.sale_price}} ৳</td>
                            <td class="category">{{data?.brand?.name}}</td>
                            <td class="category">{{data?.category?.name}}</td>
                            <td class="tag">{{ tagFetch(data.tags) }}</td>
                            <td class="star">
                                <img src="@/assets/icons/star.svg" alt="Star">
                            </td>
                            <td class="date_pub">
                                <p class="pub_unpub">Published</p>
                                <p class="date">{{fetchDateTimeFormate(data.created_at)}}</p>
                            </td>
                            <td class="actions">
                                <router-link :to="'/mypanel/service/profile/'+profile_id+'/products/edit_product/'+data._id" class="edit">Edit</router-link>
                                <router-link to="" class="delete" @click="deleteProduct(data)">Delete</router-link>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</template>
<script>
import { ref, reactive, onMounted, watch } from 'vue';
import productApi from './composible/product-api.js';
import { useStore } from 'vuex'
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
       
        const pages = ref([]);
        const product_all_data = ref('');
        const pageNumber = ref(0);
        const page = reactive({count:1});

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
         const products =  await productApi.getAll();
            products_data.value = products.data.data;

 
        }   
        
      
    const getPaginateProduct = async(page) => {
         const products =  await productApi.getAll(page);

            // console.log(products.data.current_page);
            //  if(products.data.current_page <= products.data.last_page){
    
            //       products.data.data.forEach(data => {
            //     products_data.value.push(data);
            //   });

            //  }

             products_data.value =  products.data.data;
            }
        onMounted(async()=>{
          
           const productss =  await productApi.getAllProduct();
            product_all_data.value = productss.data;
            setPages();
            getPaginateProduct();
           
        });

        const tagFetch = (data) =>{
            var items = '';
               data.split(',').forEach(item => {
                items += '#'+item+' ';
              });
              return items;
                
        }

        

        const fetchDateTimeFormate = ( data) =>{
             var items = data.split(' ');
              return items[0]+ ' at '+items[1] + ' '+items[2];
        }

        const deleteProduct = (data) =>{
           products_data.value = products_data.value.filter(item => {
                    return (item._id != data._id); 
                });

                   productApi.delete(data._id).then(res=>{
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
            tagFetch,
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
            getPaginateProduct
        }
    },

     data(){
        return{
            profile_id: this.$route.params.id
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