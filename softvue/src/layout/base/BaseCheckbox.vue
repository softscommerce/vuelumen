<template>
    <div>
        <div class="form-group">
            <input :type="type" :value="value" :name="name" :id="id"
             @input="$emit('update:modelValue', $event.target.value)"
             >
            <label :for="id" :class="classValue">{{label}}</label>
        </div>
    </div>
</template>

<script>
  export default{
      props: {

        label: {
            type: String,
            default:'',
        },

         name: {
            type: String,
            default:'',
        },

         type: {
            type: String,
            default:'checkbox',
        },
      
         id: {
            type: String,
            default:'',
        },

         value: {
            type: String,
            default:'',
        },
         classValue: {
            type: String,
            default:'',
        },
       
    },
  }  
</script>

<style scoped>
    .form-group {
  display: block;
  margin-bottom: 15px;
}

.form-group input {
  padding: 0;
  height: initial;
  width: initial;
  margin-bottom: 0;
  display: none;
  cursor: pointer;
}

.form-group label {
  position: relative;
  cursor: pointer;
}

.form-group label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
  border: 1.5px solid #0079bf;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 5px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 5px;
}

.form-group input:checked + label:after {
  content: '\2713';
  display: block;
  position: absolute;
  top: -5px;
  left: 2px;
  font-size: 19px;
  color:  #0079bf;

}


.form-group .label:before {
  content:'';
  -webkit-appearance: none;
  background-color: transparent;
   width: 10px;
   height: 10px;
   background: white;
   
   border-radius: 50%;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
  padding: 5px;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
  margin-right: 5px;
}

.form-group input:checked + .label:after {
  content: '';
  display: block;
  position: absolute;
  top: 9px;
  left: 4px;
  width: 5px;
  height: 5px;
  background: #594c4c;
  border-radius: 50%;
  color:  #0079bf;

}

</style>