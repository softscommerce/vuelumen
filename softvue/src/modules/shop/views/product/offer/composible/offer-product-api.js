import Axios from 'axios';
const RESOURCE_NAME = '/api/user/service/product-offer';

export default{
    getAll(data) {
        return Axios.get(`${RESOURCE_NAME}?page=${data}`);
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

      getAllOfferProduct() {
        return Axios.get(RESOURCE_NAME+'/all-offer');
      },

      getAllProduct() {
        return Axios.get(RESOURCE_NAME+'/product');
      },

      allProductDelete(data) {
        return Axios.post(`${RESOURCE_NAME}/all-offer-delete`, data);
      },
      
}


