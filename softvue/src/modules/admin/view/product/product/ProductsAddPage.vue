<template>
    <div class="product_page">
        <div class="page_setup">
            <h4 class="heading">Add new product</h4>
            <form class="form_data" @submit.prevent="productSubmit" enctype="multipart/form-data">
                <div class="left">
                    <div class="_top">
                        <div class="mb_5">
                            <base-input :star="true" :validation="errorMsg['product_name']" v-model="product_name" label="Product Title" placeholder="Product Title"></base-input>
                        </div>
                        <div class="mb_2">
                            <base-textarea :star="true" :validation="errorMsg['product_description']" v-model="product_description" rowNum="16" label="Product Description" placeholder="Product Description"></base-textarea>
                        </div>
                    </div>
                    <div class="_bottom">
                        <div class="_head">
                            <h4>Form Data</h4>
                        </div>
                        <div class="_body">
                            <div class="_left">
                                <button type="button" id="Generalbt" class="tablink active"
                                    @click="openShortSlide(this,'General')">General</button>
                                <button type="button" id="Inventorybt" class="tablink"
                                    @click="openShortSlide(this,'Inventory')">Inventory</button>
                                <button type="button" id="Shippingbt" class="tablink"
                                    @click="openShortSlide(this,'Shipping')">Shipping</button>
                                <button type="button" id="LinkedProductsbt" class="tablink"
                                    @click="openShortSlide(this,'LinkedProducts')">Linked Products</button>
                              
                                <button type="button" id="Advancedbt" class="tablink"
                                    @click="openShortSlide(this,'Advanced')">Advanced</button>
                            </div>
                            <div class="_right">
                                <div class="content">
                                    <div id="General" class="text cnt_txt">
                                        <div class="mb_2">
                                            <base-input type="number" :star="true" :validation="errorMsg['unit']" divClass="d-flex" v-model="unit" label="Unit" labelClass="w_200" placeholder="Unit"
                                                classValue="w_400"></base-input>
                                        </div>
                                        <div class="mb_2">
                                            <base-input divClass="d-flex" 
                                            :star="true" :validation="errorMsg['rprices']" v-model="regular_price" label="Regular price (TK)" labelClass="w_200" placeholder="Regular Price (TK)"
                                                classValue="w_400"></base-input>
                                        </div>
                                        <div class="mb_2">
                                            <base-input divClass="d-flex" :star="true" :validation="errorMsg['sprices']"  v-model="sale_price" label="Sale price (TK)" labelClass="w_200" placeholder="Sale Price (TK)"
                                                classValue="w_400"></base-input>
                                        </div>

                                         <div class="mb_2">
                                            <base-input divClass="d-flex" v-model="purchase_price" label="Purchase price (TK)" labelClass="w_200" placeholder="Purchase Price (TK)"
                                                classValue="w_400"></base-input>
                                        </div>

                                         <div class="mb_2">
                                            <base-input divClass="d-flex" v-model="replace_guaranty" label="Replace Guaranty" labelClass="w_200" placeholder="Replace Guaranty"
                                                classValue="w_400"></base-input>
                                        </div>

                                         <div class="mb_2">
                                            <base-input divClass="d-flex" v-model="max_delivary_days" label="Max Delivery Days" labelClass="w_200" placeholder="Max Delivery Days"
                                                classValue="w_400"></base-input>
                                        </div>
                                    </div>

                                    <div id="Inventory" class="text cnt_txt" style="display:none">
                                        <!-- add -->
                                        <div class="vue_input input_grp">
                                            <div class="_grp mb_4" v-for="(input,k) in inventory" :key="k">
                                                <div class="_l">
                                                    <base-input v-model="input.sku" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="SKU"></base-input>

                                                    <base-input v-model="input.size" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Size"></base-input>

                                                    <base-input v-model="input.price" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Price"></base-input>

                                                    <base-input v-model="input.weight" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Weight"></base-input>
                                                </div>
                                                <div class="_r">
                                                    <base-button type="button" small="bg_c" v-show="k < inventory.length-1 || ( !k && inventory.length > 1)"
                                                        @click="removeInventory(k)">-
                                                    </base-button>
                                                    <base-button type="button" @click="addInventory(k)" v-show="k == inventory.length-1">+
                                                    </base-button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb_2 brdr_t mt_5">
                                            <base-checkbox divClass="d-flex" v-model="manage_stock" id="manage_stock" label="Manage stock?" labelClass="w_200"
                                                classValue="w_400"
                                                checkboxTxt="Enable stock management at product level"></base-checkbox>
                                        </div>
                                       
                                    
                                    </div>

                                    <div id="Shipping" class="text cnt_txt" style="display:none">
                                        <div class="mb_2">
                                            <base-input divClass="d-flex" label="Shipping Coast" labelClass="w_200"
                                            v-model="shippingCoast"
                                                classValue="w_400" placeholder="Shipping Coast"></base-input>
                                        </div>
                                        <div class="mb_2">
                                            <div class="vue_input input_grp">
                                                <label for="">Dimensions (cm)</label>
                                                <!-- add -->
                                                <div class="_grp mb_4" v-for="(input,k) in inputs" :key="k">
                                                    <div class="_l">
                                                        <base-input v-model="input.length" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Length"></base-input>

                                                        <base-input v-model="input.width" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Width"></base-input>

                                                        <base-input v-model="input.height" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Height"></base-input>

                                                        <base-input v-model="input.unit" type="text" divClass="d-flex" labelClass="" classValue="" placeholder="Unit"></base-input>
                                                    </div>
                                                    <div class="_r">
                                                        <base-button type="button" small="bg_c" v-show="k < inputs.length-1 || ( !k && inputs.length > 1)"
                                                            @click="remove(k)">-
                                                        </base-button>
                                                        <base-button type="button" @click="add(k)" v-show="k == inputs.length-1">+
                                                        </base-button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>

                                    <div id="LinkedProducts" class="text cnt_txt" style="display:none">
                                        <div class="mb_2">
                                            <base-input divClass="d-flex" v-model="upsells" label="Upsells" labelClass="w_200"
                                                classValue="w_400" placeholder="Upsells"></base-input>
                                        </div>
                                        <div class="mb_2">
                                            <base-input divClass="d-flex" v-model="cross_sells" label="Cross-sells"  labelClass="w_200"
                                                classValue="w_400" placeholder="Crose Sells"></base-input>
                                        </div>
                                    </div>

                                

                                    <div id="Advanced" class="text cnt_txt" style="display:none">
                                        <div class="mb_2">
                                            <base-textarea divClass="d-flex" v-model="purchase_note" label="Purchase note" placeholder="Purchase note" labelClass="w_200"
                                                classValue="w_400" rowNum="3"></base-textarea>
                                        </div>
                                        
                                        <div class="mb_2 brdr_t mt_5">
                                            <base-checkbox id="reviews" v-model="enable_reviews" divClass="d-flex" label="Enable reviews" labelClass="w_200"
                                                classValue="w_400"></base-checkbox>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="page_sidebar">
                        <div class="publish step mh">
                            <div class="_head">
                                <div class="title">Publish</div>
                            </div>
                            <div class="_body">
                                <base-button small="boder_radius1 fs_1"><base-loading2  v-if="loading"></base-loading2> Submit</base-button>
                            </div>
                        </div>
                        <div class="category step">
                            <div class="_head">
                                <div class="title">Categories</div>
                            </div>
                            <div class="_body">
                                <div class="mb_2">
                                    <BaseSelects  
                                            label="Category"
                                            :options="categoryList"
                                            :default="'Category'"
                                            class="select"
                                            :star="true" 
                                            :validation="errorMsg['category']"
                                            @input="displayToCategory($event)"
                                        
                                        />
                                </div>
                                <div class="mb_2">
                                     <BaseSelects 
                                        label="Sub Category"
                                            :options="subCategoryList"
                                            :default="'Sub Category'"
                                            class="select"
                                            @input="displayToSubCategory($event)"
                                        
                                        />
                                </div>
                            </div>
                            <div class="_foot">
                                <span>
                                    <router-link to="" @click="categoryOpen" class="link">+ Add New Category</router-link>


                                    <form @submit.prevent="productCategorySubmit">
                                    <base-modal v-if="opencategory" @close="opencategory = false">
                                    <template #header>
                                        Add Category
                                    </template>

                                    <template #default >
                                        <div class="mb_3">
                                          <base-input v-model="cat_name" label="Name" placeholder="name"></base-input>
                                        </div>

                                         <div class="mb_3">
                                           <BaseSelects 
                                            label="Category"
                                            :options="categoryList"
                                            :default="'Category'"
                                            class="select"
                                           
                                            @input="displayToCategory($event)"
                                        
                                        />
                                        </div>


                                        <div class="mb_3">
                                            <base-textarea v-model="cat_description" label="Description" rowNum="6" placeholder="description"></base-textarea>
                                        </div>

                                         <div class="mb_3">
                                        <div class="thumbnail">
                                                <div class="img">
                                                    <div v-if="img_url != ''" class="remove_btn" @click="ImgRemove">X</div>
                                                    <img v-if="img_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                                    <img v-else :src="img_url" alt="Thumbnail">
                                                </div>
                                                <button type="button" class="btn btn_border btn_sm" @click="$refs.file.click()">Upload/Add
                                                    image</button>
                                                <input type="file" ref="file" class="d_none" @change="ImgChange($event)">
                                            </div>
                                        </div>
                                    </template>
                                    <template #actions>
                                        <base-button @click="productCategorySubmit" type="submit">
                                            Submit
                                        </base-button>
                                    </template>
                                    
                                    </base-modal>
                                    </form>



                                </span>
                            </div>
                        </div>
                        <div class="brand step">
                            <div class="_head">
                                <div class="title">Brands</div>
                            </div>
                            <div class="_body">
                                <div class="mb_2">
                                     <BaseSelects 
                                        label="Brand"
                                            :options="brandList"
                                            :default="'Brand'"
                                            class="select"
                                             :star="true" 
                                            :validation="errorMsg['brand']"
                                            @input="displayToBrand($event)"
                                        
                                        />
                                </div>
                            </div>
                            <div class="_foot">
                                <span>
                                    <router-link to="" @click="brandOpen" class="link">+ Add New Brand</router-link>
                                </span>

                                  <form @submit.prevent="productCategorySubmit">
                                    <base-modal v-if="openbrand" @close="openbrand = false">
                                    <template #header>
                                        Add Brand
                                    </template>

                                    <template #default >
                                        <div class="mb_3">
                                          <base-input v-model="brand_name" label="Name" placeholder="name"></base-input>
                                        </div>
                                       
                                        <div class="mb_3">
                                            <base-textarea v-model="brand_description" label="Description" rowNum="6" placeholder="description"></base-textarea>
                                        </div>

                                         <div class="mb_3">
                                        <div class="thumbnail">
                                                <div class="img">
                                                    <div v-if="img_url != ''" class="remove_btn" @click="ImgRemove">X</div>
                                                    <img v-if="img_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                                    <img v-else :src="img_url" alt="Thumbnail">
                                                </div>
                                                <button type="button" class="btn btn_border btn_sm" @click="$refs.file.click()">Upload/Add
                                                    image</button>
                                                <input type="file" ref="file" class="d_none" @change="ImgChange($event)">
                                            </div>
                                        </div>
                                    </template>
                                    <template #actions>
                                        <base-button @click="productBrandSubmit" type="submit">
                                            Submit
                                        </base-button>
                                    </template>
                                    
                                    </base-modal>
                                    </form>
                            </div>
                        </div>
                        <div class="tags step">
                            <div class="_head">
                                <div class="title">Tags</div>
                            </div>
                            <div class="_body">
                                <div class="mb_2 _lr">
                                    <base-input label="Tags" v-model="tag" placeholder="Tags" @keypress.enter.prevent="tagkeyPress"></base-input>
                                    <base-button @click="tagSubmit" style="line-height: 38px;" type="button" class="boder_radius1 btn-border">Add</base-button>
                                </div>
                            </div>
                            <div class="_foot">
                                <ul class="items">
                                    <li class="item" v-for=" tag in tags" :key="tag">#{{tag}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature_img step">
                            <div class="_head">
                                <div class="title">Image</div>
                            </div>
                            <div class="_body">
                                <div class="img_set">
                                     
                                <div v-if="feature_image_url != ''" class="remove_btn" @click="featureImgRemove">X</div>
                                <img v-if="feature_image_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                <img v-else :src="feature_image_url" alt="Thumbnail">
                        
                                </div>
                                <input style="opacity:0" type="file" ref="image" @change="featureImage($event)">
                                <span>
                                    <router-link to="" @click="$refs.image.click()" class="link">Set product image</router-link>
                                </span>
                            </div>

                        </div>

                         <div class="feature_img step">
                            <div class="_head">
                                <div class="title">Gallary Image</div>
                            </div>
                            <div class="_body">
                                <div class="img_set img_set_gallary" style="min-width:100%;">

                                    <div style="min-width:100%" v-if="image_gallary_url && imageLength <= 4 && imageLength != 0">
                                        <div style="min-width:25%; float:left; width:25%;" v-for="(img, index) in imageLength" :key="img">
                                        <!-- <img v-if="feature_image_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail"> -->
                                        <img style=" float:left; width: 100%;" :src="image_gallary_url[index]" alt="Thumbnail">
                                        </div>
                                         <div class="remove_btn_galary" @click="gallaryImgRemove">X</div>
                                    </div>
                                    <div else style="float:left; max-width: 100%">
                                        <img style="min-width: 25%; float:left; padding:3px;" v-if="image_gallary_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                        <img style="min-width: 25%; float:left; padding:3px;" v-if="image_gallary_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                        <img style="min-width: 25%; float:left; padding:3px;" v-if="image_gallary_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                        <img style="min-width: 25%; float:left; padding:3px;" v-if="image_gallary_url == ''" src="@/assets/admin/dummy-img.png" alt="Thumbnail">
                                    </div>
                                   
                                   
                                   
                                   
                                </div>
                                <input style="opacity:0" type="file" multiple ref="image_gallary" @change="galleryImageChange($event)">
                                <span>
                                    <router-link to="" @click="$refs.image_gallary.click()" class="link">Set Gallary image</router-link>
                                </span>
                            </div>

                        </div>
                        <div class="tags"></div>
                        <div class="mt_3 ms">
                            <base-button small="boder_radius1 fs_1">Submit</base-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import getHelpers from '../helpers/getHelpers';
import {ref, watch, reactive, onMounted } from "vue";
import categoryApi from '../category/composible/category-api';
import productApi from '../product/composible/product-api'
import { useStore } from 'vuex';
import brandApi from '../brand/composible/brand-api';
import Validation from '@/Helpers/helpers';
import {useRouter} from 'vue-router';

export default {

    setup() {

        const router = useRouter();
        const store = useStore();
        const image = ref('');
        const cat_name = ref('');
        const cat_description = ref('');
        const brand_name = ref('');
        const brand_description = ref('');


        const displayToCommunity = (event) =>{
            console.log(event)
        }


        //get helps section
        const {brand, error, brandList, categories, categoryList, subCategories, subCategoryList} = getHelpers();

        onMounted( async() =>{
            await brand();
            await categories();
          

        });



        //brand section
        //category section 
        const openbrand = ref(false);
        const brandOpen = () =>{
            openbrand.value = true;
        }

        const productBrandSubmit = async () =>{
             const form =  new FormData();
                form.append("image", image.value);
                form.append("name", brand_name.value);
                form.append("description", brand_description.value);
                 const brands = await brandApi.create(form);

                 if(brands.data.success){
                    const payload = {
                        type: 'success',
                        message: brands.data.success
                    }
                    store.dispatch('addNotification', payload);
                    await brand();
                    openbrand.value = false;
                    brand_name.value = '';
                    brand_description.value = '';
                    img_url.value = '';
                 }
        }



        //category section  start
        const opencategory = ref(false);
        const categoryOpen = () =>{
            opencategory.value = true;
        }

        const productCategorySubmit = async () =>{
            console.log('ok')

             const form =  new FormData();
                form.append("image", image.value);
                form.append("name", cat_name.value);
                form.append("description", cat_description.value);
                form.append("category_id", category_id.value);
                const categoriess = await categoryApi.create(form);

                 if(categoriess.data.success){
                    const payload = {
                        type: 'success',
                        message: categoriess.data.success
                    }
                    store.dispatch('addNotification', payload);

                    await categories();
                    opencategory.value = false;
                    cat_name.value = '';
                    cat_description.value = '';
                    img_url.value = '';
                 }
        };

         const img_url = ref('');
        const ImgChange = (event) => {
            img_url.value = URL.createObjectURL(event.target.files[0]);

             var f = event.target.files[0];
               
                var fileName = f.name.split('.')[0];
                var img = new Image();
                img.src = URL.createObjectURL(f);
                if(f.size >=  100006){
                     img.onload = function(){
                    var canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0);
                    canvas.toBlob(function(blob){
                            var f2 = new File([blob], fileName + ".webp");
                            image.value = f2;
                       
                    }, 'image/webp', 0.00001);
                }
                }else{
                     img.onload = function(){
                    var canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0);
                    canvas.toBlob(function(blob){
                            var f2 = new File([blob], fileName + ".webp");
                            image.value = f2;
                       
                    }, 'image/webp', 0.5);
                    }
                }



        }
        const ImgRemove = () => {
            img_url.value = '';
        }

//end category section

    const feature_image_url = ref('');
    const feature_image_get = ref('');
    
    
    const featureImage = (event)=>{
         feature_image_url.value = URL.createObjectURL(event.target.files[0]);
        
          var f = event.target.files[0];
               
        var fileName = f.name.split('.')[0];
      var img= new Image();
        img.src = URL.createObjectURL(f);
        if(f.size >=  100006){
                img.onload = function(){
            var canvas = document.createElement('canvas');
            canvas.width = img.width;
            canvas.height = img.height;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0);
            canvas.toBlob(function(blob){
                    var f2 = new File([blob], fileName + ".webp");
                    feature_image_get.value = f2;
                
            }, 'image/webp', 0.00001);
        }
        }else{
                img.onload = function(){
            var canvas = document.createElement('canvas');
            canvas.width = img.width;
            canvas.height = img.height;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0);
            canvas.toBlob(function(blob){
                    var f2 = new File([blob], fileName + ".webp");
                    feature_image_get.value = f2;
                
            }, 'image/webp', 0.5);
            }
        }

    }

    const featureImgRemove = () =>{
        feature_image_url.value = '';
    }

    const image_gallaries = ref([]);
    const image_gallary_url = ref([]);
    const imageLength = ref(0);

    const galleryImageChange =(event) =>{
        imageLength.value = event.target.files.length
        if(imageLength.value<=4){
             for (let i = 0; i< imageLength.value; i++){
            image_gallary_url.value.push(URL.createObjectURL(event.target.files[i]));
            console.log(image_gallary_url.value);
            
            var f = event.target.files[i];
               
        // var fileName = f.name.split('.')[0];
           var img = new Image();
            img.src = URL.createObjectURL(f);
            img.onload = function(){
            var canvas = document.createElement('canvas');
            canvas.width = img.width;
            canvas.height = img.height;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0);
            canvas.toBlob(function(blob){

                 var fileName =Math.random().toString(36).replace(/[^a-z 0-9]+/g, '').substr(2);
                    image_gallaries.value.push(new File([blob], fileName + ".webp"));
                    // console.log(image_gallaries.value);
                
            }, 'image/webp', 0.00001);
          }

         }
        }else{
            alert('Please select gallary Image Less then equal 4');
        }
       
    }

    const gallaryImgRemove = () =>{
        image_gallary_url.value = ''
         image_gallaries.value = '';
         imageLength.value = 0;
    }

    const tags = ref([]);
    const tag = ref('');
    
    const tagSubmit = ()=>{
        if(!tags.value.includes(tag.value)){
            tag.value = tag.value.replace(/\s/, ''); // remove all white space
            tags.value.push(tag.value);
        }
        tag.value = '';
        console.log(tags.value);
    }
    const tagkeyPress = ()=>{
        if(!tags.value.includes(tag.value)){
            tag.value = tag.value.replace(/\s/, ''); // remove all white space
            tags.value.push(tag.value);
        }
        tag.value = '';
        console.log(tags.value);
    }


        // Shipping Add row 
        const inputs = reactive([
            { length:'', width:'', height:'', unit:'' },
        ])

        const add = () => {
            inputs.push({ length: '', width: '', height: '', unit: '' });
        }
        const remove = (index) => {
            inputs.splice(index, 1);
        }

        // Inventory Add
        const inventory = reactive([
            { sku:'', size:'', price:'', weight:'' },
        ])

        const addInventory = () => {
            inventory.push({ sku: '', size: '', price: '', weight: '' });
        }
        const removeInventory = (index) => {
            inventory.splice(index, 1);
        }



        // Sub Category Add
        const category_id = ref(0)
        const displayToCategory = async(event)=>{
            if(event != 'Category'){
                category_id.value = event;
                  await subCategories(event);
                Validations['category'](category_id.value, 'Category is required');
            }else{
                 category_id.value = 0;
            }
            
        }


        const sub_category_id = ref(0)
        const displayToSubCategory =(event)=>{
            if(event != 'Sub Category'){
                sub_category_id.value = event;
                 
            }else{
                sub_category_id.value = 0;
            }
            
        }

        const brand_id = ref(0)
        const displayToBrand =(event)=>{
            if(event != 'Brand'){
                brand_id.value = event;
                 Validations['brand'](brand_id.value, 'Brand is required');
            }else{
                brand_id.value = 0;
            }
            
        }



       

        const product_name = ref('');
        const product_description = ref('');
        const unit = ref('');
        const regular_price = ref('');
        const sale_price = ref('');
        const purchase_price = ref('');
        const replace_guaranty = ref('');
        const max_delivary_days = ref('');
        const upsells = ref('');
        const cross_sells = ref('');
        const purchase_note = ref('');
        const enable_reviews = ref('');
        const manage_stock = ref('');
        const shippingCoast = ref('');
        

         const {Validations,  errorMsg } = Validation();
  
        watch(product_name, (value)=>{
        
            Validations['text'](value, 'Product name is required', 'Product Name minimum length 5 characters', 5 );

        });

        watch(product_description, (value)=>{
             Validations['description'](value, 'Product Description is required', 'Product Description minimum length 20 characters', 20 );

        });

          watch(unit, (value)=>{
            Validations['unit'](value, 'Product Unit is required');

        });

          watch(regular_price, (value)=>{
            Validations['rprice'](value, 'Regular pirce is required');

        });

        watch(sale_price, (value)=>{
            Validations['sprice'](value, 'Sale price is required');

        });

        //  watch(category_id, (value)=>{
        //     if(value == 0){
        //     Validations['category'](value, 'Sale price is required');
        //     }

        // });

       
 const loading = ref(false);
  const inventoryadd = reactive([]);
  const inputsadd = ref([]);

        const productSubmit = async() =>{
                loading.value = true;
                Validations['text']( product_name.value, 'Product name is required', 'Product Name minimum length 5 characters', 5);
                Validations['description']( product_description.value, 'Product Description is required', 'Product Description minimum length 20 characters', 20);
                   
                  Validations['unit'](unit.value, 'Product Unit is required');
                  Validations['rprice'](regular_price.value, 'Regular pirce is required');
                  Validations['sprice'](sale_price.value, 'Sale price is required');
                  if(category_id.value == 0){
                    Validations['category'](category_id.value, 'Category is required');
                  }

                  if(brand_id.value == 0){
                    Validations['brand'](brand_id.value, 'Brand is required');
                  }
        

            const form =  new FormData();

            form.append('product_name', product_name.value);
            form.append('product_description', product_description.value);
            form.append('unit', unit.value);
            form.append('regular_price', regular_price.value);
            form.append('sale_price', sale_price.value);
            form.append('purchase_price', purchase_price.value);
            form.append('replace_guaranty', replace_guaranty.value);
            form.append('max_delivary_days', max_delivary_days.value);
            form.append('upsells', upsells.value);
            form.append('cross_sells', cross_sells.value);
            form.append('purchase_note', purchase_note.value);
            form.append('enable_reviews', enable_reviews.value);

             for(var i = 0; i< inventory.length; i++){
            form.append('inventroy_sku[]', inventory[i].sku);
            form.append('inventroy_size[]', inventory[i].size);
            form.append('inventroy_price[]', inventory[i].price);
            form.append('inventroy_weight[]', inventory[i].weight);
              }

            for(var i = 0; i< inputs.length; i++){
            form.append('inputs_length[]', inputs[i].length);
            form.append('inputs_width[]', inputs[i].width);
            form.append('inputs_height[]', inputs[i].height);
            form.append('inputs_unit[]', inputs[i].unit);

            }
            form.append('manage_stock', manage_stock.value);
            form.append('shipping_coast', shippingCoast.value);
            form.append('category_id', category_id.value);

            form.append('sub_category_id', sub_category_id.value);
            form.append('brand_id', brand_id.value);
            form.append('tags', tags.value);
            form.append('feature_image',  feature_image_get.value);

            for(var i = 0; i< image_gallaries.value.length; i++){
            form.append('gallary_image[]',  image_gallaries.value[i]);
            }
            if(errorMsg['product_name'] =='' && errorMsg['product_description'] == '' && errorMsg['unit'] == ''  && errorMsg['rprices'] == '' && errorMsg['sprices'] == '' && errorMsg['category'] == '' && errorMsg['brand'] == ''){
               const product = await productApi.create(form);
                if(product.data.success){
                loading.value = false;
                const payload = {
                    type: 'success',
                    message: product.data.success
                }

                store.dispatch('addNotification', payload);
                router.push('/admin/products');
                }
            }else{
                loading.value = false;
            }
        }


        return {categoryOpen, brandList, displayToBrand, brand_id, opencategory, displayToCommunity, img_url, ImgChange, ImgRemove, productCategorySubmit, categoryList, image, cat_name, cat_description, brand_name, brand_description, openbrand, brandOpen, productBrandSubmit,feature_image_url, featureImage, featureImgRemove, galleryImageChange,  image_gallaries, image_gallary_url, imageLength, tagSubmit, tags, tag, tagkeyPress, inputs, add, remove, inventory, addInventory, removeInventory, gallaryImgRemove, displayToCategory, category_id,sub_category_id,displayToSubCategory, subCategoryList, productSubmit, product_name, product_description, unit, regular_price, sale_price, purchase_price,replace_guaranty, max_delivary_days, upsells, cross_sells, purchase_note,enable_reviews,manage_stock, errorMsg, loading, inventoryadd, inputsadd, shippingCoast}
    },


    data(){
        return{
            communities:[]
        }
    },

    methods: {
        openShortSlide(evt, slideName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("cnt_txt");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";

            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", ""); 

            }
            document.getElementById(slideName).style.display = "block";
    
          if(slideName == 'General'){
               document.getElementById('Generalbt').classList.add("active");
            }else if(slideName == 'Inventory'){
                document.getElementById('Inventorybt').classList.add("active");
            }else if(slideName == 'Shipping'){
                document.getElementById('Shippingbt').classList.add("active");
            }else if(slideName == 'LinkedProducts'){
                document.getElementById('LinkedProductsbt').classList.add("active");
            }else if(slideName == 'Attributes'){
                document.getElementById('Attributesbt').classList.add("active");
            }else if(slideName == 'Advanced'){
                document.getElementById('Advancedbt').classList.add("active");
            }

        }
    }
}
</script>

<style lang="scss" scoped>



.mb_1 { margin-bottom: 4px; }
.mb_2 { margin-bottom: 8px; }
.mb_3 { margin-bottom: 12px; }
.mb_4 { margin-bottom: 16px; }
.mb_5 { margin-bottom: 20px; }
.mb_6 { margin-bottom: 24px; }
.mb_7 { margin-bottom: 28px; }
.mb_8 { margin-bottom: 32px; }

.mt_1 { margin-top: 4px; }
.mt_2 { margin-top: 8px; }
.mt_3 { margin-top: 12px; }
.mt_4 { margin-top: 16px; }
.mt_5 { margin-top: 20px; }
.mt_6 { margin-top: 24px; }
.mt_7 { margin-top: 28px; }
.mt_8 { margin-top: 32px; }

.bg_c {
    background-color: #ff3111;
}
.bg_c:hover {
    background-color: #f46853;
    box-shadow: 0px 15px 20px rgba(243, 74, 36, 0.4);
}

.d_none {
    display: none;
}
.thumbnail {
    display: flex;
    align-items: start;
    gap: 16px;

    .img {
        position: relative;

        img {
            width: 60px;
            height: 60px;
            box-shadow: 0 10px 19px rgb(0 0 0 / 15%);
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .remove_btn {
            position: absolute;
            top: 0;
            right: 0;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border-radius: 50%;
            padding: 6px;
            font-size: 12px;
            line-height: 10px;
            color: #f01a1a;
            cursor: pointer;

            &:hover {
                background-color: #222;
                color: #fff;
            }
        }
    }

    button {
        border: 1px solid #135e96;
        color: #135e96;
        padding: 0.25rem 0.5rem;
        background-color: transparent;
        border-radius: 4px;
        cursor: pointer;
    }
}

.page_setup {
    & > h4 {
        font-size: 16px;
        font-weight: 600;
        color: #444;
        margin-bottom: 20px;
    }
    .form_data {
        display: flex;
        column-gap: 20px;
        .left {
            width: calc(100% - 260px);
           
            ._bottom {
                border: 1px solid #ddd;
                margin-top: 40px;
                ._head {
                    border-bottom: 1px solid #ddd;
                    padding: 12px 16px;
                    h4 {
                        color: #444;
                    }
                }
                ._body {
                    display: flex;
                    ._left {
                        border-right: 1px solid #ddd;
                        width: 180px;
                        background-color: #f2f2f2;
                        button {
                            width: 100%;
                            border: none;
                            text-align: left;
                            padding: 12px 16px;
                            font-size: 14px;
                            border-bottom: 1px solid #ddd;
                            display: block;
                            &:last-child {
                                border-bottom: 0px solid #ddd;
                            }
                            &.active {
                                background-color: #e3e3e3;
                            }
                        }
                    }
                    ._right {
                        width: calc(100% - 180px);
                        .content {
                            padding: 16px;
                            .cnt_txt {
                                & > span {
                                    font-size: 12px;
                                    color: #5492bc;
                                    padding-left: 200px;
                                    cursor: pointer;
                                    text-decoration: underline;
                                }
                                .brdr_t {
                                    border-top: 1px solid #ddd;
                                    padding-top: 20px;
                                    
                                }
                                .input_grp {
                                    display: block;

                                    label {
                                        margin-bottom: 6px;
                                        display: inline-block;
                                        font-size: 14px;
                                        width: 200px;
                                    }

                                    ._grp {
                                        width: 100%;
                                        display: flex;
                                        column-gap: 12px;
                                        ._l {
                                            display: flex;
                                            column-gap: 8px;
                                            width: 90%;
                                        }
                                        ._right {
                                            width: 10%;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        .right {
            width: 260px;
            .page_sidebar {
                .step {
                    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
                    margin-bottom: 20px;
                    &:last-child {
                        margin-bottom: 0;
                    }
                    ._head {
                        border-bottom: 1px solid #ddd;
                        padding: 12px 0;
                        .title {
                            font-size: 14px;
                            font-weight: 600;
                            color: #444;
                            padding: 0 16px;
                        }
                    }
                    ._body {
                        padding: 12px 16px;
                    }
                    ._foot {
                        border-top: 1px solid #ddd;
                        span {
                            padding: 12px 16px;
                            display: block;
                            .link {
                                font-size: 13px;
                                color: #5492bc;
                            }
                        }
                    }
                }
                .tags {
                    ._body {
                        ._lr {
                            display: flex;
                            column-gap: 8px;
                            align-items: flex-end;
                            button {
                                height: 36px;
                                font-size: 14px;
                                padding: 0 16px;
                            }
                        }
                    }
                    ._foot {
                        .items {
                            list-style: none;
                            display: flex;
                            column-gap: 12px;
                            flex-wrap: wrap;
                            padding: 8px;
                            .item {
                                font-size: 14px;
                                color: #555;
                                line-height: 26px;
                                cursor: pointer;
                                transition: all 0.3s ease 0s;
                                -webkit-transition: all 0.3s ease 0s;
                                &:hover {
                                    color: #f19024;
                                }
                            }
                        }
                    }
                }
                .feature_img {
                    .img_set {
                        .remove_btn{
                            width: 20px;
                            position: absolute;
                            right: 28px;
                            cursor: pointer;
                        }
                        .remove_btn_galary{
                                width: 20px !important;
                                min-width: 20px;
                                position: absolute;
                                right: 18px;
                                margin-top: -26px;
                                cursor: pointer;
                        }
                        img {
                            max-width: 100%;
                            min-width: 100%;
                            height: 100px;
                        }
                        span.span_class_ok{
                                position: absolute;
                                margin-top: -146px;
                                right: 23px;
                                cursor: pointer;
                        }

                       
                    }
                     .img_set_gallary{
                        div{
                             min-width: 25%;
                            float:left;
                            padding: 5px;
                             img {
                            max-width: 25%;
                            height: 70px;
                            // float:left;
                            // padding: 5px;
                        }
                        span{
                                position: absolute;
                                font-size: 10px;
                                margin-top: -42px;
                                margin-left: 22px;
                                cursor: pointer;
                        }
                        }
                            
                        }
                    span {
                        padding: 12px 16px;
                        display: block;
                        .link {
                            font-size: 13px;
                            color: #5492bc;
                        }
                    }
                }
                .ms { display: none; }
            }
        }
    }
}






$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {}

@media (max-width: #{$tablet-width}) {
    .ms {
        display: block;
    }

    .mh {
        display: none;
    }

    .input_grp {
        display: flex;
        align-items: flex-start;
        flex-direction: column;
    }

    .page_setup {
        .form_data {
            flex-direction: column;

            .left {
                width: 100% !important;

               

                ._bottom {
                    ._body {
                        flex-direction: column;
                        ._left {
                            display: flex;
                            width: 100%;
                        }
                        ._right {
                            width: 100%;

                            .content {
                                padding: 16px;

                                .cnt_txt {
                                    .input_grp {
                                        display: flex;
                                        align-items: flex-start;
                                        flex-direction: column;

                                        ._grp {
                                            width: 100%;
                                            
                                        }
                                    }

                                }
                            }
                        }
                    }
                }
            }

            .right {
                width: 100% !important;

                .page_sidebar {
                  

                    .ms {
                        display: block !important;
                    }

                }
            }
        }
    }
}

@media (max-width: #{$phone-width}) {
    ._half {
        width: 50%!important;
    }
    .page_setup {
        .form_data {
            flex-direction: column;

            .left {
              

                ._bottom {
                    ._body {
                     

                        ._right {
                            .content {
                                .cnt_txt {
                                    .input_grp {
                                        ._grp {
                                            flex-wrap: wrap;
                                            row-gap: 20px;
                                            ._l {
                                                display: grid;
                                                height: auto;
                                                align-content: start;
                                                grid-template-columns: repeat(2, minmax(160px, 1fr));
                                                gap: 30px;
                                                width: 100%;
                                            }
                                           
                                        }
                                    }

                                }
                            }
                        }
                    }
                }
            }
            
        }
    }
}


@media (max-width: #{$phone-width-small}) {}
</style>