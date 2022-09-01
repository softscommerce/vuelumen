<template>
    <div class="vue_checkbox">
        <input :type="type" :value="value" :name="name"  :checked="checked"
           @input="(event) => $emit('update:checked', event.target.checked)"
          >
        <label  :class="classValue">{{label}}</label>
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
         checked: {
        type: Boolean,
        default:false,
      },

        
    }


  }  
</script>

<style lang="scss" scoped>
  .vue_checkbox {
    display: flex;
    align-items: center;
  }

  .vue_checkbox input {
    padding: 0;
    height: initial;
    width: initial;
    margin-bottom: 0;
    // display: none;
    cursor: pointer;
  }

  .vue_checkbox label {
    position: relative;
    cursor: pointer;
  }

  .vue_checkbox label:before {
    content:'';
    -webkit-appearance: none;
    background-color: transparent;
    border: 1.5px solid #0079bf;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
    display: inline-block;
    position: relative;
    vertical-align: middle;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 2px;
  }
  label.errors:before {
      border: 1px solid red;
    }

  .vue_checkbox input:checked + label:after {
    content: '\2713';
    display: block;
    position: absolute;
    top: -9px;
    left: 0;
    font-size: 19px;
    color:  #0079bf;

  }


  .vue_checkbox .label:before {
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

  .vue_checkbox input:checked + .label:after {
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



/* Hide the browser's default checkbox */
.vue_checkbox {
  position: relative;
}
label {
  pointer-events: none;
  border-width: 0;
  border: none;
  background-color: #ffffff;
  display: flex;
  align-items: center;
  column-gap: 4px;
}
label::before {
  width: 12px;
  height: 12px;
  top: 2px;
  border-radius: 2px;
}
input {
  position: absolute;
  margin-top: 5px;
}
input:checked {
  pointer-events: all;
}

</style>