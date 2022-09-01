<template>
<div>
    <label for="">{{label}} <span v-if="star" >*</span></label>

    <div class="custom-select"  :tabindex="tabindex" @blur="open = false">
    <div class="selected" :class="[{'errors':validation}, { open: open }]" @click="open = !open">
      {{ selected }}
    </div>
    <div class="items" :class="{ selectHide: !open }">
      <div class="item"
        v-for="(option, i) of options"
        :key="i"
        @click="
          selected = option.name;
          open = false;
          $emit('input', option._id);
        "
        
      >
        {{ option.name }}
      </div>
    </div>
  </div>

   <span class="errorMessage" v-if="validation">{{validation}}</span>
</div>
 
</template>

<script>
export default {
  props: {
    label: {
      type: String,
      default: '',
    },
    options: {
      type: Array,
      required: true,
    },
    default: {
      type: String,
      required: false,
      default: null,
    },
    tabindex: {
      type: Number,
      required: false,
      default: 0,
    },
     star: {
            type: Boolean,
            default:false,
     },
    validation:{
             type: String,
            default: '',
        }
  },
  data() {
    return {
      selected: this.default
        ? this.default
        : this.options.length > 0
        ? this.options[0]
        : null,
      open: false,
    };
  },
  mounted() {
   this.$emit("input", this.selected);
  },
};
</script>

<style lang="scss" scoped>

.errors{
    border: 1px solid tomato !important;
     box-shadow: none !important;
}
.errorMessage{
    color: tomato;
}
label{
    margin-bottom: 8px;
    display: inline-block;
    color: #555;
    font-size: 16px;
    span{
      color:red;
    }
}
.custom-select {
  position: relative;
  width: 100%;
  text-align: left;
  outline: none;
  height: 45px;
  line-height: 45px;
  
}

.custom-select .selected {
  height: 45px;
  background-color: white;
  border-radius: 6px;
  /* border: 1px solid #666666; */
  color: #999999;
  padding-left: 1em;
  cursor: pointer;
  user-select: none;
  /* box-shadow: inset -10px -10px 15px rgba(255, 255, 255, 0.5), 
           inset 10px 10px 15px rgba(70, 70, 70, 0.12)   */
          /* box-shadow: 0px 1px 2px rgba(0,0,0,0.1), 
            0px 2px 4px rgba(0,0,0,0.1), 
            0px 4px 8px rgba(0,0,0,0.1), 
            0px 8px 16px rgba(0,0,0,0.1); */

     box-shadow: -5px -5px 9px rgba(255, 255, 255, 0.45), 5px 5px 9px rgba(94, 104, 121, 0.3),-5px -5px 9px rgba(255, 255, 255, 0.45),
            5px 5px 9px rgba(94, 104, 121, 0.3);
}

.custom-select .selected.open {
  /* box-shadow: 0px 1px 2px rgba(0,0,0,0.1), 
            0px 2px 4px rgba(0,0,0,0.1), 
            0px 4px 8px rgba(0,0,0,0.1), 
            0px 8px 16px rgba(0,0,0,0.1); */
   box-shadow: -5px -5px 9px rgba(255, 255, 255, 0.45), 5px 5px 9px rgba(94, 104, 121, 0.3),-5px -5px 9px rgba(255, 255, 255, 0.45),
            5px 5px 9px rgba(94, 104, 121, 0.3);
  border-radius: 6px 6px 0px 0px;
}

.custom-select .selected:after {
  position: absolute;
  content: "";
  top: 22px;
  right: 1em;
  width: 0;
  height: 0;
  border: 5px solid transparent;
  border-color: #fff transparent transparent transparent;
}

.custom-select .items {
    z-index: 1 !important;
  height: 200px;
  overflow-y: scroll;
  color: #555555;
  font-size: 15px;
  border-radius: 0px 0px 6px 6px;
  /* border-right: 1px solid #ad8225;
  border-left: 1px solid #ad8225;
  border-bottom: 1px solid #ad8225; */

  /* box-shadow: 0px 1px 2px rgba(0,0,0,0.1), 
            0px 2px 4px rgba(0,0,0,0.1), 
            0px 4px 8px rgba(0,0,0,0.1), 
            0px 8px 16px rgba(0,0,0,0.1); */

   box-shadow: -5px -5px 9px rgba(255, 255, 255, 0.45), 5px 5px 9px rgba(94, 104, 121, 0.3),-5px -5px 9px rgba(255, 255, 255, 0.45),
            5px 5px 9px rgba(94, 104, 121, 0.3);
  position: absolute;
  background-color: #fff;
  left: 0;
  right: 0;
}

.custom-select .items .item {
  color: #555555;
  padding-left: 1em;
  cursor: pointer;
  user-select: none;
  box-shadow: 0 .5px 1px #f9f9f9;

}

.custom-select .items .item:hover {
  background-color: #eee;
}
.custom-select .items .item.active {
  background-color: #eee;
}

.selectHide {
  display: none;
}
</style>
