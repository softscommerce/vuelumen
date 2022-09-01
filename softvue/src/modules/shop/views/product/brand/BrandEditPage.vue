<template>
    <div class="product_page">
        <div class="page_setup">
            <form class="form_data short" @submit.prevent="brandFormSubmitEdit" enctype="multipart-formdata">
                <h4 class="heading">Edit Brand</h4>
                <div class="mb_3">
                    <base-input label="Name" v-model="brand_name" ></base-input>
                </div>
                
                <div class="mb_3">
                    <base-textarea v-model="brand_description" label="Description" rowNum="6" placeholder="description" :modelValue="brand_info.description"></base-textarea>
                </div>
                <div class="mb_3">
                    <div class="thumbnail">
                        <div class="img">
                            <!-- <div v-if="img_url != ''" class="remove_btn" @click="ImgRemove">X</div> -->
                            <img v-if="img_url == ''" :src="brand_info.image" alt="Thumbnail">
                            <img v-else :src="img_url" alt="Thumbnail">
                        </div>
                        <button type="button" class="btn btn_border btn_sm" @click="$refs.file.click()">Upload/Add
                            image</button>
                        <input type="file" ref="file" class="d_none" @change="ImgChange($event)">
                    </div>
                </div>
                <div class="mb_3">
                    <base-button type="submit">Edit</base-button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import { ref, onMounted } from 'vue'
import axios from 'axios';
// import  Image  from '@/Helpers/image.js'
import brandApi from './composible/brand-api.js';
import { useStore } from 'vuex'
import { useRoute, useRouter} from 'vue-router'
export default {
    setup() {

        const route = useRoute();
        const router = useRouter();
        const store = useStore();
        const brand_info = ref('');
        const img_url = ref('');
        const image = ref('');
        const brand_description = ref('');
        const brand_name  = ref('');

          onMounted( async ()=>{
            const brandInfo = await brandApi.getInfo(route.params.id);
            brand_info.value =  brandInfo.data.data
            brand_name.value = brand_info.value.name;
            brand_description.value =  brand_info.value.description
         
           
        });


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

        const brandFormSubmitEdit =  async() =>{

             const form =  new FormData();
                form.append("image", image.value);
                form.append("name", brand_name.value);
                form.append("description", brand_description.value);
                 const brands = await brandApi.update(route.params.id, form);
                 if(brands.data.success){
                    const payload = {
                        type: 'success',
                        message: brands.data.success
                    }
                    store.dispatch('addNotification', payload);
                    router.push('/user/products/brand');
                 }

               

        }
        const ImgRemove = () => {
            img_url.value = '';
        }

        return {img_url, ImgChange, ImgRemove, image, brandFormSubmitEdit, brand_description, brand_name, brand_info }
    },

    data() {
        return {
            communities: []
        }
    },
}
</script>

<style lang="scss" scoped>






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
.form_data {
    h4.heading {
        margin-bottom: 20px;
        color: #666;
    }
}
form.form_data.short {
    max-width: 600px;
    margin: auto;
    box-shadow: 0 5px 16px rgb(0 0 0 / 15%);
    padding: 20px;
    margin-top: 20px;
}

.mb_1 {
    margin-bottom: 4px;
}
.mb_2 {
    margin-bottom: 8px;
}
.mb_3 {
    margin-bottom: 12px;
}
.mb_4 {
    margin-bottom: 16px;
}
.mb_5 {
    margin-bottom: 20px;
}
.mb_6 {
    margin-bottom: 24px;
}
.mb_7 {
    margin-bottom: 28px;
}
.mb_8 {
    margin-bottom: 32px;
}
.mt_1 {
    margin-top: 4px;
}
.mt_2 {
    margin-top: 8px;
}
.mt_3 {
    margin-top: 12px;
}
.mt_4 {
    margin-top: 16px;
}
.mt_5 {
    margin-top: 20px;
}
.mt_6 {
    margin-top: 24px;
}
.mt_7 {
    margin-top: 28px;
}
.mt_8 {
    margin-top: 32px;
}








$phone-width-small: 360px;
$phone-width: 575px;
$tablet-width: 767px;
$desktop-width: 1023px;

@media (max-width: #{$desktop-width}) {}

@media (max-width: #{$tablet-width}) {}

@media (max-width: #{$phone-width}) {}

@media (max-width: #{$phone-width-small}) {}
</style>