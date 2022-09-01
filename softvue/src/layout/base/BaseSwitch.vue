<template>
    <label class="switch">
          <input :type="type" :value="modelValue" :name="name"  :checked="howdata"
           @input="(event) => $emit('update:checked', event.target.value)"
          >
        <span class="slider"></span>
    </label>
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

         modelValue: {
            type: String,
            default:0,
        },
         classValue: {
            type: String,
            default:'',
        },
         howdata: {
            type: Boolean,
            default:false,
        },
      },
         mounted() {
            window.setTimeout(() => {
                if(this.modelValue){
                    this.howdata = true;
                }else{
                    this.howdata = false;
                }
        
           
        }, 1500);


       
    },

   


    
  }  
</script>
<style scoped>
/* The switch - the box around the slider */
.switch {
 font-size: 17px;
 position: relative;
 display: inline-block;
 width: 60px;
 height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
 opacity: 0;
 width: 0;
 height: 0;
}

/* The slider */
.slider {
 position: absolute;
 cursor: pointer;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background-color: #ccc;
 transition: .4s;
 border-radius: 30px;
}

.slider:before {
 position: absolute;
 content: "";
 height: 1.4em;
 width: 1.4em;
 border-radius: 20px;
 left: 0.3em;
 bottom: 0.3em;
 background-color: white;
 transition: .4s;
}

input:checked + .slider {
 background-color: rgb(0,221,80);
}

input:focus + .slider {
 box-shadow: 0 0 1px rgb(0,221,80);
}

input:checked + .slider:before {
 transform: translateX(1.5em);
}
</style>