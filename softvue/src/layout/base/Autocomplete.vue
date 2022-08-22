<template>
  <div class="autocomplete">
    <div class="input" @click="toggleVisible" v-text="selectedItem ? selectedItem[filterby] : ''"></div>
    <div class="placeholder" v-if="selectedItem == null" v-text="title"></div>
    <button class="close" @click="selectedItem = null" v-if="selectedItem">x</button>
    <div class="popover" v-show="visible">
      <input type="text"
        ref="input"
        v-model="query"
        @keydown.up="up"
        @keydown.down="down"
        @keydown.enter="selectItem"
        placeholder="Start Typing..."
        
        >
      <div class="options" ref="optionsList">
        <ul>
          <li v-for="(match, index) in matches"
            :key="index"
            :class="{ 'selected': (selected == index)}"
            @click="itemClicked(index)"
            v-text="match[filterby]"></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      items: {
        default: [],
        type: Array
      },
      filterby: {
        type: String
      },
      title: {
        default: 'Select One...',
        type: String
      },
      shouldReset: {
        type: Boolean,
        default: true
      }
    },
    data() {
      return {
        itemHeight: 39,
        selectedItem: null,
        selected: 0,
        query: '',
        visible: false
      };
    },
    methods: {
      toggleVisible() {
        this.visible = !this.visible;

        setTimeout(() => {
          this.$refs.input.focus();
        }, 50);
      },
      itemClicked(index) {
        this.selected = index;
        this.selectItem();
      },
      selectItem() {
        if (!this.matches.length) {
          return;
        }

        this.selectedItem = this.matches[this.selected];
        this.visible = false;

        if (this.shouldReset) {
          this.query = '';
          this.selected = 0;
        }

        this.$emit('selected', JSON.parse(JSON.stringify(this.selectedItem)));
      },
      up() {
        if (this.selected == 0) {
          return;
        }

        this.selected -= 1;
        this.scrollToItem();
      },
      down() {
        if (this.selected >= this.matches.length - 1) {
          return;
        }

        this.selected += 1;
        this.scrollToItem();
      },
      scrollToItem() {
        this.$refs.optionsList.scrollTop = this.selected * this.itemHeight;
      },

       splitArrayIntoChunksOfLen(arr, len) {
        var chunks = [], i = 0, n = arr.length;
        while (i < n) {
            chunks.push(arr.slice(i, i += len));
        }
        // console.log(chunks);
        return chunks;
        }
    },
    computed: {
      matches() {
        this.$emit('change', this.query);

        if (this.query == '') {
          return [];
        }
       
      const totalItem = this.splitArrayIntoChunksOfLen(this.items,500);

    //   console.log(totalItem[0]);
      if(this.query.length < 3){
         return totalItem[0].filter((item) => item[this.filterby].toLowerCase().includes(this.query.toLowerCase()))
      }else{
         return this.items.filter((item) => item[this.filterby].toLowerCase().includes(this.query.toLowerCase()))
      }

    //   totalItem.forEach(element => {
    //     // console.log(totalItem[0]);
    //   });


       
      }
    }
  }
</script>

<style scoped>
.autocomplete {
  z-index: 1;
    width: 100%;
    position: relative;
    height: 45px;
    /* filter:drop-shadow(0px 8px 18px rgba(0, 0, 0, 0.09)); */

     box-shadow: 0px 1px 2px rgba(0,0,0,0.1), 
            0px 2px 4px rgba(0,0,0,0.1), 
            0px 4px 8px rgba(0,0,0,0.1), 
            0px 8px 16px rgba(0,0,0,0.1);
}
.input {
    height: 45px;
    border-radius: 3px;
    /* border: 2px solid lightgray; */
    box-shadow: 0 0 10px #eceaea;
    font-size: 18px;
    padding-left: 10px;
    padding-top: 11px;
    cursor: text;

    color: #999999;
}
.close {
    position: absolute;
    right: 11px;
    top: 8px;
    background: none;
    border: none;
    font-size: 22px;
    color: lightgrey;
    cursor: pointer;
}
.placeholder {
    position: absolute;
    top: 11px;
    left: 11px;
    font-size: 16px;
    color: #999999;
    pointer-events: none;
}
.popover {
    min-height: 50px;
    /* border: 2px solid lightgray; */
    /* filter:drop-shadow(0px 8px 18px rgba(0, 0, 0, 0.07)); */
     box-shadow: 0px 1px 2px rgba(0,0,0,0.1), 
            0px 2px 4px rgba(0,0,0,0.1), 
            0px 4px 8px rgba(0,0,0,0.1), 
            0px 8px 16px rgba(0,0,0,0.1);
    position: absolute;
    top: 46px;
    left: 0;
    right: 0;
    background: #fff;
    border-radius: 3px;
    text-align: center;
}
.popover input {
    width: 95%;
    margin-top: 5px;
    height: 40px;
    font-size: 16px;
    border-radius: 3px;
    /* border: 1px solid lightgray; */
    border: none;
    outline: none;
    padding-left: 8px;
}
.options {
    max-height: 200px;
    overflow-y: scroll;
    margin-top: 5px;
}
.options ul {
    list-style-type: none;
    text-align: left;
    padding-left: 0;
}
.options ul li {
    border-bottom: 1px solid lightgray;
    padding: 10px;
    cursor: pointer;
    color: #999999;
    background: #fff;
}
.options ul li:first-child {
    border-top: 2px solid #d6d6d6;
}

.options ul li:not(.selected):hover {
    background: #8c8c8c;
    color: #fff;
}
.options ul li.selected {
    background: #58bd4c;
    color: #fff;
    font-weight: 600;
}
</style>
