<template>
<div class="services">
    <div class="lists">
        <h4 class="heading">Services</h4>
        <div class="data_view">
            <ul class="items">
                <li class="item">
                    <router-link to="" class="link">All <span class="count">(2)</span></router-link>
                </li> | 
                <li class="item">
                    <router-link to="" class="link">Published <span class="count">(2)</span>
                </router-link></li>
            </ul>
            <div class="search">
                <form class="">
                    <input type="text" class="form-control">
                    <button type="submit" class="btn btn_sm btn_border">Search</button>
                </form>
            </div>
        </div>

        <div class="table_filter">
            <div class="actions">
                <form>
                    <select class="form_select" aria-label="Default select example">
                        <option value="-1">Bulk Actions</option>
                        <option value="delete">Delete</option>
                        <option value="resetpassword">Send password reset</option>
                    </select>
                    <button type="submit" class="btn btn_border btn_sm">Apply</button>
                </form>
                <form>
                    <select class="form_select" aria-label="Default select example">
                        <option value="-1">Change role to…</option>
                        <option value="shop_manager">Shop manager</option>
                        <option value="customer">Customer</option>
                        <option value="subscriber">Subscriber</option>
                        <option value="contributor">Contributor</option>
                        <option value="author">Author</option>
                        <option value="editor">Editor</option>
                        <option value="administrator">Administrator</option>
                        <option value="none">— No role for this site —</option>
                    </select>
                    <button type="submit" class="btn btn_border btn_sm">Filter</button>
                </form>
            </div>
            <div class="pagination">
                <div class="row_count">2 items</div>
                <div class="page">
                    <router-link to="" class="link"><span>&laquo;</span></router-link>
                    <router-link to="" class="link">1</router-link>
                    <router-link to="" class="link">2</router-link>
                    <router-link to="" class="link">3</router-link>
                    <router-link to="" class="link"><span>&raquo;</span></router-link>
                </div>
            </div>
        </div>

        <div class="table_responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Refferal</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Dipankar</td>
                        <td>01741571104</td>
                        <td>None</td>
                        <td>Active</td>
                        <td class="actions">
                            <router-link to="" class="edit">Edit</router-link>
                            <router-link to="" class="delete">Delete</router-link>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Dipankar</td>
                        <td>01741571104</td>
                        <td>None</td>
                        <td>Active</td>
                        <td class="actions">
                            <router-link to="" class="edit">Edit</router-link>
                            <router-link to="" class="delete">Delete</router-link>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Dipankar</td>
                        <td>01741571104</td>
                        <td>None</td>
                        <td>Active</td>
                        <td class="actions">
                            <router-link to="" class="edit">Edit</router-link>
                            <router-link to="" class="delete">Delete</router-link>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Refferal</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="table_filter">
            <div class="actions">
                <form>
                    <select class="form_select" aria-label="Default select example">
                        <option value="-1">Bulk Actions</option>
                        <option value="delete">Delete</option>
                        <option value="resetpassword">Send password reset</option>
                    </select>
                    <button type="submit" class="btn btn_border btn_sm">Apply</button>
                </form>
            </div>
            <div class="pagination">
                <div class="row_count">2 items</div>
                <div class="page">
                    <router-link to="" class="link"><span>&laquo;</span></router-link>
                    <router-link to="" class="link">1</router-link>
                    <router-link to="" class="link">2</router-link>
                    <router-link to="" class="link">3</router-link>
                    <router-link to="" class="link"><span>&raquo;</span></router-link>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<style lang="scss" scoped>
.lists {
    .heading {
            font-size: 18px;
            font-weight: 600;
            color: #444;
            margin-bottom: 10px;
    }
    .data_view {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        row-gap: 12px;
        margin-bottom: 12px;
        .items {
            display: flex;
            list-style: none;
            .item {
                .link {
                    color: #5492bc;
                    font-size: 14px;
                    margin: 0 4px;
                    cursor: pointer;
                }
            }
        }
        .search {
            form {
                display: flex;
                flex-wrap: wrap;
                row-gap: 12px;
                input {
                    width: 200px;
                    outline: none;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 8px;
                }
                button {
                    border: none;
                    outline: none;
                    background-color: transparent;
                    border: 1px solid #5492bc;
                    color: #5492bc;
                    padding: 8px 16px;
                    margin-left: 8px;
                    border-radius: 4px;
                    cursor: pointer;
                }
            }
        }
    }
    .table_filter {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        row-gap: 12px;
        .actions {
            display: flex;
            flex-wrap: wrap;
            row-gap: 12px;
            column-gap: 12px;
            form {
                display: flex;
                flex-wrap: wrap;
                row-gap: 12px;
                column-gap: 12px;
                .form_select {
                    width: auto;
                    outline: none;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 8px;
                }
                button {
                    border: none;
                    outline: none;
                    background-color: transparent;
                    border: 1px solid #5492bc;
                    color: #5492bc;
                    padding: 8px 16px;
                    margin-left: 8px;
                    border-radius: 4px;
                    cursor: pointer;
                }
            }
        }
        .pagination {
            display: flex;
            gap: 20px;
            align-items: center;
            .row_count {
                font-size: 14px;
                color: #444;
            }
            .page {
                border: 1px solid #ddd;
                border-radius: 4px;
                overflow: hidden;
                .link {
                    border-right: 1px solid #ddd;
                    text-decoration: none;
                    padding: 4px 8px;
                    display: inline-block;
                    font-size: 13px;
                    cursor: pointer;
                    transition: all 0.3s ease 0s;
                    -webkit-transition: all 0.3s ease 0s;
                    &:last-child {
                        border-right: 0px solid #ddd;
                    }
                    &:hover {
                        background-color: #5492bc;
                        color: #fff;
                    }
                }
            }
        }
    }
    .table_responsive {
        width: 100%;
        overflow-x: auto;
        border: 1px solid #ddd;
        margin: 12px 0;
        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            td, th {
                padding: 12px 8px;
            }
            
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                color: #444;
                font-size: 14px;
            }
            td {
                font-size: 14px;
                color: #444;
            }
            thead {
                border-bottom: 1px solid #ddd;
            }
            tbody {
                tr {
                    border-bottom: 1px solid #ddd;
                }
                tr:nth-child(odd){
                    background-color: #f6f6f6;
                }
                tr:hover {
                    background-color: #eee;
                }
                .img {
                    span {
                        width: 40px;
                        height: 40px;
                        display: block;
                        img {
                            max-width: 100%;
                        }
                    }
                }
                .actions {
                    .edit, .delete { 
                        border-radius: 4px;
                        text-decoration: none;
                        color: #fff;
                        padding: 4px 8px;
                        font-size: 13px;
                        transition: all 0.3s ease 0s;
                        -webkit-transition: all 0.3s ease 0s;
                    }
                    .edit {
                        background-color: #5492bc;
                        &:hover {
                            background-color: #5da8da;
                        }
                    }
                    .delete {
                        background-color: #ca371a;
                        margin-left: 4px;
                        &:hover {
                            background-color: #dc492c;
                        }
                    }
                }
            }
            tfoot {
                th {
                    border-bottom: 0px solid #ddd;
                }
            }
        }
    }
}

</style>