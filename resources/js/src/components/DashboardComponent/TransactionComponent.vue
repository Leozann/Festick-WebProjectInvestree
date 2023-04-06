<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaction List Festick</h1>
            <a href="admin-create-transaction" class="btn btn-sm btn-primary shadow sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add Ttransaction
            </a>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket Name</th>
                                <th>User Name</th>
                                <th>Qty</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in AllTransaction" :key="item.message">
                                <td>{{ index + 1 }}</td>
                                <td><a :href="'transaction-detail/' + item.id" style="color:black">{{ item.ticket_name }}</a></td>
                                <td>{{ item.user_fullname }}</td>
                                <td>{{ item.ticket_quantity }}</td>
                                <td>{{ item.total_price }}</td>
                                <td>{{ item.transaction_status }}</td>
                                <td>
                                    <a :href="'transaction-detail/' + item.id" type="button" class="btn btn-primary">Detail</a>
                                    <router-link :to='{name:"admin_edit_transaction_page",params:{id:item.id}}' class="btn btn-success">Edit</router-link>
                                    <button class="btn btn-danger" v-on:click="deleteTransaction(item.id, index)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="admin" class="btn btn-sm btn-primary shadow">Back</a>
    </div>
</template>



<script>
import axios from 'axios'
export default {
    name: 'transaction-admin-component',
    data() {
        return {
            AllTransaction: {},
        }
    },
    methods: {
        async getAllTransaction() {
            try {
                await axios.get('api/admin-transaction').then(
                (response) => {
                    console.log(response.data.datas)
                    this.AllTransaction = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
        async deleteTransaction(id, index) {
            try{
                await axios.delete('api/admin-transaction/'+id).then(
                (response) => {
                    console.log(response.data.datas)
                    this.item.splice(index, 1);
                    this.$router.push('/admin-show-transaction')
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },

    },
    created() {
        this.getAllTransaction()
        this.deleteTransaction()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>
