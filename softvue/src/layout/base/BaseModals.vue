<template>
  <transition name="fade">
    <div class="vue-modal" v-show="open">
      <transition name="drop-in">
        <div class="vue-modal-inner" v-show="open">
          <div class="vue-modal-content">
            <div class="modal_title">
                 <slot name="modal_title"></slot>
            </div>
            <div class="modal_body">
                <slot />
                
            </div>
            <div class="modal_footer">
              	<slot name="modal_footer"></slot>
            </div>
            
          </div>
        </div>
      </transition>
    </div>
  </transition>
</template>

<script>
export default {
  props: {
    open: {
      type: Boolean,
      required: true
    },
  },

  setup(_, { emit }) {
    const close = () => {
      emit("close");
    };
    return { close };
  },
};
</script>

<style>
*,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.vue-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 10;
 
}

.vue-modal-inner {
  max-width: 500px;
  margin: 2rem auto;
  z-index: 10;

}

.vue-modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.3);
  background-clip: padding-box;
  border-radius: 0.3rem;
  padding: 1rem;
  overflow: hidden;
  z-index: 100;
}

.drop-in-enter-active,
.drop-in-leave-active {
  transition: all 0.3s ease-out;
}

.drop-in-enter-from,
.drop-in-leave-to {
  opacity: 0;
  transform: translate(0, -50px);
}

.modal_title{
  padding: 10px;
}
.modal_body{
  padding: 10px;
}
.modal_footer{
  right: 0px;
  float: right;
  overflow: hidden;
}


</style>