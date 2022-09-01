import Axios from 'axios';
const RESOURCE_NAME = '/api/user/product/product';

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
      delete(id) {
        return Axios.delete(`${RESOURCE_NAME}/${id}`);
      },

      getAllProduct() {
        return Axios.get(RESOURCE_NAME+'/product');
      },

      allProductDelete(data) {
        return Axios.post(`${RESOURCE_NAME}/delete`, data);
      },
      
}


