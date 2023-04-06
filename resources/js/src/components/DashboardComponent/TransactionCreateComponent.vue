<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Data Transaction</h1>
        </div>
        <a href="admin-show-transaction" class="btn btn-sm btn-primary shadow mb-3">Back</a>
        <div class="card shadow">
            <div class="card-body">
                <form @submit.prevent="createDataTransaction">
                    <input type="hidden" name="_token" :value="csrf">
                    <div class="form-group">
                        <label for="ticket_id">Ticket ID</label>
                        <input type="text" v-model="transaction.ticket_id" class="form-control" name="ticket_id" placeholder="ticket_id">
                    </div>
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" v-model="transaction.user_id" class="form-control" name="user_id" placeholder="user_id">
                    </div>
                    <div class="form-group">
                        <label for="ticket_quantity">Qty</label>
                        <input type="number" v-model="transaction.ticket_quantity" class="form-control" name="ticket_quantity" placeholder="ticket_quantity">
                    </div>
                    <div class="form-group">
                        <label for="transaction_schedule">Total Price</label>
                        <input type="text" v-model="transaction.total_price" class="form-control" name="total_price" placeholder="total_price">
                    </div>
                    <div class="form-group">
                        <label for="transaction_status">Transaction Status</label>
                        <select class="form-select" v-model="transaction.transaction_status">
                            <option value="pending">Pending</option>
                            <option value="success">Success</option>
                            <option value="refund">Refund</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block mt-3" type="submit">
                       Add Transaction
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'create-transaction-component',
    created() {
        if (!this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        }
    },
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
            listAllCatalogue: {},
            transaction:{
                ticket_id: "",
                user_id: "",
                ticket_quantity: "",
                total_price: "",
                transaction_status: "",
            }
        }
    },
    methods: {
        async createDataTransaction(){
            try {
                await axios.post('api/admin-transaction', this.transaction).then(response=>{
                    console.log(response)
                    this.$router.push('/admin-show-transaction')
                })
            }
            catch (error) {
                console.log(error.message)
            }

        }
    },
    created() {
        this.createDataTransaction()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>