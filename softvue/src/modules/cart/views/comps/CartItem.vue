<template>
    <tr>
        <td class="image">
            <div class="img"><img src="https://woodmart.xtemos.com/wp-content/uploads/2017/04/dock-black-walnut-ip6-grid-A4_7-430x490.jpg.webp" alt="Image"/></div>
        </td>
        <td class="title">
            <div class="name">
                <router-link to="" class="link">{{ title }}</router-link>
            </div>
        </td>
        <td>
            <div class="price">${{ price.toFixed(2) }}</div>
        </td>
        <td>
            <div class="quantity">
                <form>
                    <button type="button" class="crt_minus" v-if="count > 1" @click="count--">&minus;</button>
                    <button type="button" class="crt_minus" v-else >&minus;</button>
                    <input type="text" :value="count">
                    <button type="button" class="crt_plus" @click="count++">&plus;</button>
                </form>
            </div>
        </td>
        <td>
            <div class="subtotal">${{ (price * count).toFixed(2) }}</div>
        </td>
        <td><div class="remove" @click="RemoveItem">&times;</div></td>
    </tr>
</template>
<script>
import { ref } from "vue";
export default {
    data() {
        return {
            count: 1,
            price: 20.00,
            title: 'Awesome I-Phone 14 Pro',
        }
    },
    setup() {
        const isValid = ref(true);

        return {
            isValid,
        }
    },
    methods: {
        RemoveItem: () => {
            // isValid
        }
    }
}
</script>
<style lang="scss" scoped>

.table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #d7d7d7;
    }
    td,th {
        padding: 8px;
    }
    td {
        padding: 12px 8px;
    }
    td, td * {
        vertical-align: top;
        text-align: left;
    }
    td * {
        vertical-align: top;
        text-align: left;
    }
    tr {
        &:nth-child(even){
            background-color: #f2f2f2;
        }
    }
    tbody {
        tr {
            border-bottom: 1px solid #ddd;
            &:last-child {
                border-bottom: none;
            }
        }
    }
}
/* =========================== */
.pdt_cart {
    .left {
        .cart_items {
            table {
                .image {
                    width: 100px;
                    .img {
                        width: 95px;
                        height: 80px;
                        background-color: #dfdfdf;
                        img {
                            max-width: 100%;
                            max-height: 100%;
                            margin: auto;
                            display: table;
                        }
                    }
                }
                .title {
                    width: 300px;
                    .name {
                        .link {
                            text-decoration: none;
                            color: #444;
                            font-weight: 600;
                            letter-spacing: 0.5px;
                            transition: all 0.3s ease 0s;
                            -webkit-transition: all 0.3s ease 0s;
                            &:hover {
                                color: #f1803d;
                            }
                        }
                    }
                }
                .price,
                .subtotal {
                    color: #444;
                }
                .subtotal {
                    font-weight: 600;
                }
                .quantity {
                    form {
                        display: flex;
                        height: 32px;
                        border: 1px solid #ddd;
                        width: fit-content;
                        border-radius: 4px;
                        overflow: hidden;
                        input {
                            width: 40px;
                            text-align: center;
                            font-size: 18px;
                            border: none;
                            pointer-events: none;
                            &:focus {
                                outline: none;
                            }
                        }
                        .crt_minus,
                        .crt_plus {
                            width: 26px;
                            border: none;
                            cursor: pointer;
                            font-size: 18px;
                            text-align: center;
                            &:hover {
                                background-color: #5492bc;
                                color: #fff;
                            }
                        }
                    }
                }
                .remove {
                    font-size: 22px;
                    cursor: pointer;
                    color: #c21700;
                    &:hover {
                        color: #ff0000;
                    }
                }
            }
        }
    }
}
</style>