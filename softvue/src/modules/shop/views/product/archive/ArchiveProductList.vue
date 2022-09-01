<template>
    <div class="users">
        <div class="lists">
            <div class="table_filter">
                <div class="actions">
                    <form @submit.prevent="productActionSubmit">
                        <select class="form_select" v-model="product_action" aria-label="Default select example">
                            <option value="-1">Bulk Actions</option>
                            <option value="update">Upload</option>
                        </select>
                        <button type="submit" class="btn btn_border btn_sm">Apply</button>
                    </form>

                    <form @submit.prevent="filterSubmit">
                        <select class="form_select" v-model="brand_value" aria-label="Default select example">
                            <option value="">Brand</option>
                            <option v-for="brand in brands" :key="brand._id" :value="brand._id">{{brand.name}}</option>
                        </select>
                        <select class="form_select" v-model="category_value" aria-label="Default select example">
                            <option value="">Category</option>
                            <option v-for="cats in categories" :key="cats._id" :value="cats._id">{{cats.name}}</option>
                            
                        </select>

                        
                        <button type="submit" class="btn btn_border btn_sm">Filter</button>
                    </form>


                </div>
                <div class="paginations">
                    <div class="data_view">
                        <div class="search">
                            <!--<form class="">-->
                            <input type="text" class="form-control" @keyup="TableSearch" v-model="search_text">
                        </div>
                    </div>
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
                            <th style="width:5%">
                                <input type='checkbox' @click="selectAll" v-model="selected_all"> Check All
                            </th>
                            <th style="width:10%">Image</th>
                            <th style="width:27%">Name</th>
                            <th style="width:12%">Price</th>
                            <th style="width:12%">Unit</th>
                            <th style="width:12%">Minimum Sell</th>
                            <th style="width:12%">Stock</th>
                            <th style="width:10%">Actions</th>
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
                            <td class="img">
                                <span><img :src="data.feature_image" alt="Image"></span>
                            </td>
                            <td>{{ data.product_name }}</td>
                            <td> <base-input v-model="price[data._id]" :modelValue="data.sale_price" placeholder="Sale Price"></base-input></td>
                            <td><base-input v-model="unit[data._id]" placeholder="unit"></base-input></td>
                            <td><base-input v-model="minimum_sale[data._id]"  placeholder="Minimum Sale"></base-input></td>
                            <td><base-input v-model="stock[data._id]" placeholder="Stock"></base-input></td>
                            <td class="actions">
                                <router-link to="#"  @click="updateArchiveProduct(data._id)" class="edit">Update</router-link>
                            </td>
                        </tr>
                    </tbody>
                    <tbody v-else>
                        <tr v-for="(data, index) in products_data" :key="index">
                            <td class="checkbox">
                                <input type='checkbox' v-bind:value='data._id' v-model='select_value' @change='updateCheckall'>
                            </td>
                            <td class="img">
                                <span><img :src="data.feature_image" alt="Image"></span>
                            </td>
                            <td>{{ data.product_name }}</td>
                            <td><base-input v-model="price[data._id]" :modelValue="data.sale_price" placeholder="Sale Price"></base-input></td>
                             <td><base-input v-model="unit[data._id]" placeholder="unit"></base-input></td>
                            <td><base-input v-model="minimum_sale[data._id]"  placeholder="Minimum Sale"></base-input></td>
                            <td><base-input v-model="stock[data._id]" placeholder="Stock"></base-input></td>
                            <td class="actions">
                                <router-link to="#" @click="updateArchiveProduct(data._id)" class="edit">Update</router-link>
                               
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
import productApi from './composiable/archive-api.js';
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
        const product_action = ref(-1);

        //filter section
        const category_value = ref('');
        const categories = ref([]);
        const brands = ref([]);
        const brand_value = ref('');
        //filter section
       
        const pages = ref([]);
        const product_all_data = ref('');
        const pageNumber = ref(0);
        const page = reactive({count:1});

        //update product section
        const unit = ref([]);
        const minimum_sale = ref([]);
        const stock = ref([]);
        const price = ref([]);

        const filterSubmit = async() =>{
            console.log(brand_value.value, category_value.value);
            const form = new FormData();
                    form.append('brand_value', brand_value.value);
                    form.append('category_value', category_value.value);
            const productUpdated = await productApi.getProductFilter(form);
            products_data.value = productUpdated.data.data;

        }

        const productActionSubmit = async() =>{
                if(select_value.value.length> 0){
                     const form = new FormData();
                    for(let i = 0; i < select_value.value.length; i++){

                        console.log(unit.value[select_value.value[i]])
                        form.append('id[]', select_value.value[i]);
                        form.append('unit[]',  unit.value[select_value.value[i]]);
                        form.append('minimum_sale[]',  minimum_sale.value[select_value.value[i]]);
                        form.append('stock[]',  stock.value[select_value.value[i]]);
                        form.append('sale_price[]',  price.value[select_value.value[i]]);

                    }
                     form.append('select_value', select_value.value);
                     form.append('product_action', product_action.value);
                      const productUpdated = await productApi.allProductUpdate(form);
                        const payload = {
                        type: productUpdated.data.type,
                        message: productUpdated.data.data
                        };
                        store.dispatch('addNotification', payload);

                }else{
                    alert('Please Select one item');
                }

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
            getPaginateProduct(page.count);
           });

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

      

       const updateCheckall = () =>{
       
            if(select_value.value.length == products_data.value.length){
               selected_all.value = true;
            }else{
                selected_all.value = false;
            }

             console.log( selected_all.value)
            }

//update archive product 

        const updateArchiveProduct = (id) =>{

             const form = new FormData();
            form.append('id', id);
            form.append('unit',  unit.value[id]);
            form.append('minimum_sale',  minimum_sale.value[id]);
            form.append('stock',  stock.value[id]);
            form.append('sale_price',  price.value[id]);

            productApi.update(id, form);

        }

       
        
      
    const getPaginateProduct = async(page) => {
         const products =  await productApi.getAll(page);
             products_data.value =  products.data.data;
            }
        onMounted(async()=>{
          
           const productss =  await productApi.getAllProduct();
            product_all_data.value = productss.data;

            product_all_data.value.forEach(item =>{
                price.value[item._id] = item.sale_price;
                unit.value[item._id] = item.units;
            });


               const productcs =  await productApi.getCategory();
                categories.value = productcs.data.data;;

                const productbs =  await productApi.getBrand();
                brands.value = productbs.data.data;

            setPages();
            getPaginateProduct();
           
        });


        const TableSearch = () => {
            if (search_text.value.length > 0) {
                return search_data.value = products_data.value.filter(item => {
                    return (
                        item.product_name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.category.name.toLowerCase().includes(search_text.value.toLowerCase())||
                        item.sale_price.toLowerCase().includes(search_text.value.toLowerCase())
                    );
                });
            } else {
                return products_data.value;
            }

        }

        return {
            products_data,
            search_data,
            search_text,
            TableSearch,
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
            updateArchiveProduct,
            unit,
            minimum_sale,
            stock,
            price,
            categories,
            category_value,
            brands,
            brand_value,
            filterSubmit
        }
    },

}
</script>

<style lang="scss" scoped>

.paginations,
.pagination{
    list-style: none;
}

button.page-link {
	display: inline-block;
    padding: 5px 10px;
    cursor: pointer;
    border: none;
    outline: none;
}
button.page-link {
    font-size: 20px;
    color: #29b3ed;
    font-weight: 500;
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

        .paginations,
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