import Axios from 'axios';
const RESOURCE_NAME = '/api/user/archive/product';

export default{

    getAll(data) {
        return Axios.get(`${RESOURCE_NAME}?page=${data}`);
      },
      getInfo(id) {
        return Axios.get(`${RESOURCE_NAME}/${id}`);
      },
      create(data) {
        return Axios.post(RESOURCE_NAME, data);
      },
      update(id, data) {
        return Axios.post(`${RESOURCE_NAME}/${id}`, data);
      },
      getCategory() {
        return Axios.get(`${RESOURCE_NAME}/category`);
      },
      getBrand() {
        return Axios.get(`${RESOURCE_NAME}/brand`);
      },
      getProductFilter(data) {
        return Axios.post(`${RESOURCE_NAME}/filter`, data);
      },

      getAllProduct() {
        return Axios.get(RESOURCE_NAME+'/product');
      },

      allProductUpdate(data) {
        return Axios.post(`${RESOURCE_NAME}/update`, data);
      },
      
}


