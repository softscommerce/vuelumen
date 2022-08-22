<template>
    <div class="vue_radiobox" :class="[divClass]">
        <input type="radio" name="radioDefault" :value="value" :id="id" :checked="attributeName"
         @input="$emit('update:modelValue', $event.target.value)"
        >
        <label :class="labelClass" :for="id">{{label}}</label>
    </div>
</template>
<script>
export default{
    props: {
        label: {
            type: String,
            default:'',
        },

          value: {
            type: String,
            default:'',
        },
      
        id: {
            type: String,
            default:'',
        },
        divClass: {
            type:[String,Number],
            default:'',
        },
        labelClass: {
            default:'',
        },
        attributeName: {
            default:false,
        },
    },
}  
</script>

<style scoped>
.vue_checkbox {
    width: 100%;
    display: inline-block;
}
label {
    display: inline-block;
    display: inline-block;
    color: #555;
    font-size: 16px;
}
.w_200 { width: 200px; }
.w_400 { width: 400px; }
.mb-2 {
    margin-bottom: 4px;
}
.mb-3 {
    margin-bottom: 8px;
}
.mb-4 {
    margin-bottom: 12px;
}
</style>