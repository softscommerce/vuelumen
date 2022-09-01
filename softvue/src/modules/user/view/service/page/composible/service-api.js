import Axios from 'axios';
const RESOURCE_NAME = '/api/user/profile';

export default{

     getServiceProfileList() {
        return Axios.get(`api/user/user_service_profile_list`);
      },

     getAll(data) {
        return Axios.get(`${RESOURCE_NAME}?page=${data}`);
      },
      getInfo(id) {
        return Axios.get(`${RESOURCE_NAME}/${id}`);
      },

      payNow(data) {
        return Axios.post(`${RESOURCE_NAME}/paynow`, data);
      },

      shopActiveOff(data) {
        return Axios.post(`${RESOURCE_NAME}/activeoff`, data);
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

      getAllProfile() {
        return Axios.get(RESOURCE_NAME+'/product');
      },

      allProfileDelete(data) {
        return Axios.post(`${RESOURCE_NAME}/delete`, data);
      },
      
}


