<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Success Transaction List Festick</h1>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in AllTransaction" :key="item.message">
                                <td>{{ index + 1 }}</td>
                                <td>{{ item.ticket_name }}</td>
                                <td>{{ item.user_fullname }}</td>
                                <td>{{ item.ticket_quantity }}</td>
                                <td>{{ item.total_price }}</td>
                                <td>{{ item.transaction_status }}</td>
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
                await axios.get('api/success-transaction').then(
                (response) => {
                    console.log(response.data.datas)
                    this.AllTransaction = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
    },
    created() {
        this.getAllTransaction()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>
