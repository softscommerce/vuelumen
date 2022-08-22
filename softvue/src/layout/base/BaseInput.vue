<template>
    <div class="vue_input" :class="[divClass]">
        <label :class="labelClass">{{ label }}</label>
        <input class="field" :class="[classValue]" :type="type" :value="modelValue" :placeholder="placeholder"
            @input="$emit('update:modelValue', $event.target.value)" />
    </div>
</template>
<script>
export default {
    props: {
        label: {
            type: String,
            default: '',
        },
        modelValue: {
            type: [String, Number],
            default: '',
        },
        placeholder: {
            type: String,
            default: '',
        },
        type: {
            type: String,
            default: '',
        },
        divClass: {
            type: [String, Number],
            default: '',
        },
        labelClass: {
            default: '',
        },
        classValue: {
            type: [String, Number],
            default: '',
        },
    },
    setup() {

    },
}
</script>
<style lang="scss" scoped>

.vue_input {
    width: 100%;
    label {
        margin-bottom: 8px;
        display: inline-block;
        color: #555;
        font-size: 16px;
        // text-shadow: 0 1px 1px #5b8fce;
    }
    input {
        width: 100%;
        height: 45px;
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
        &:focus{
            box-shadow: none;
            border: 1px solid #23c483;
        }
    }

   input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    input[type=number] {
    -moz-appearance: textfield;
    }

}
</style>