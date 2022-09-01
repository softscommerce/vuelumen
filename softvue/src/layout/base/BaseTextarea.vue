<template>
    <div class="vue_textarea" :class="[divClass]">
        <label :class="labelClass">{{ label }} <span v-if="star" >*</span></label>
        <textarea 
            class="field"
            :class="[classValue,{'errors':validation}]"
            :value="modelValue"
            :rows="rowNum"
            :placeholder="placeholder"
            @input="$emit('update:modelValue', $event.target.value)"
        ></textarea>
        <span class="errorMessage" v-if="validation">{{validation}}</span>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            default:'',
        },

         star: {
            type: Boolean,
            default:false,
        },


        modelValue: {
            type:[String,Number],
            default:'',
        },
        placeholder: {
            type: String,
            default:'',
        },
        type: {
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
        classValue: {
            type:[String,Number],
            default:'',
        },
        rowNum: {
            default:'',
        },
         validation:{
             type: String,
            default: '',
        }
    },
    setup() {
        
    },
}
</script>
<style lang="scss" scoped>
textarea.errors{
    border: 1px solid tomato !important;
     box-shadow: none !important;
}
.errorMessage{
    color: tomato;
}
   .vue_textarea {
    width: 100%;
    label {
        margin-bottom: 8px;
        display: inline-block;
        color: #555;
        font-size: 16px;
        span{
            color: tomato;
        }
        // text-shadow: 0 1px 1px #5b8fce;
    }
    textarea {
        width: 100%;
        height: auto;
        border: none;
        outline: none;
        padding: 4px 16px;
        border-radius: 4px;
        color: #444;
        letter-spacing: 1px;
        font-size: 16px;
        box-shadow: -5px -5px 9px rgba(255, 255, 255, 0.45), 5px 5px 9px rgba(94, 104, 121, 0.3),-5px -5px 9px rgba(255, 255, 255, 0.45),
            5px 5px 9px rgba(94, 104, 121, 0.3);
        background-color: #f9f9f9;
        position: relative;
        &::placeholder {
            color: #999;
        }
    }

}
</style>