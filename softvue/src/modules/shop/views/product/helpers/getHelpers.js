import { ref } from "vue";
import brandApi from "../brand/composible/brand-api";
import categoryApi from "../category/composible/category-api";
const error  = ref('');
const brandList = ref([]);
const categoryList = ref([]);
const subCategoryList = ref([]);

//get all brand
const brand = async() => {
    error.value = '';
    try{
      const brand = await brandApi.getAllBrand();
      brandList.value = brand.data
    //   console.log(brand.data);
    }catch(err){
        console.log(err.message);
        error.value = err.message;

    }
}


//get all catetgory
const categories = async() => {
    error.value = '';
    try{
      const category = await categoryApi.getAllCategory();
      categoryList.value = category.data
    //   console.log(brand.data);
    }catch(err){
        console.log(err.message);
        error.value = err.message;

    }
}


//get all catetgory
const subCategories = async(event) => {
    error.value = '';
    try{
      const sub_category = await categoryApi.getAllSubCategory(event);
      subCategoryList.value = sub_category.data
      console.log(sub_category.data);
    }catch(err){
        console.log(err.message);
        error.value = err.message;

    }
}



const getHelpers = () =>{

    return {error, brand, brandList, categories, categoryList, subCategories, subCategoryList};
}

export default getHelpers;