import Axios from 'axios';
const RESOURCE_NAME = '/api/admin/product/category';

export default{
    getAll() {
        return Axios.get(RESOURCE_NAME);
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
      getAllCategory() {
        return Axios.get(`${RESOURCE_NAME}/category`);
      },
      getAllSubCategory(id) {
        return Axios.get(`${RESOURCE_NAME}/sub_category/${id}`);
      },
}


