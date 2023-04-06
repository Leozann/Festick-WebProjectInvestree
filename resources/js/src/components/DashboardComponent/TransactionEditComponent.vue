<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Transaction</h1>
        </div>

        <a href="../admin-show-transaction" class="btn btn-sm btn-primary shadow mb-3">Back</a>

        <div class="card shadow">
            <div class="card-body">
                <form @submit.prevent="updateTransaction">
                    <input type="hidden" name="_token" :value="csrf">
                    <div class="form-group">
                        <label for="transaction_status">Transaction Status</label>
                        <select class="form-select" v-model="transaction.transaction_status">
                            <option value="pending">Pending</option>
                            <option value="success">Success</option>
                            <option value="refund">Refund</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block mt-3" type="submit">
                       Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'edit-transaction-component',
        created() {
            if (!this.csrf) {
                console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
            }
        },
        data() {
            return {
                csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
                AllTransaction: [],
                listAllCatalogue: [],
                transaction:{
                    transaction_status: "",
                    _method:"patch"
                }
            }
        },
        methods: {
            async updateTransaction(){
                try {
                    const { data } = await axios.patch(`/api/admin-transaction/${this.$route.params.id}`, this.transaction)
                    .then(response=>{
                        console.log(response)
                        console.log(data)
                        this.$router.push('/admin-show-transaction')
                    })
                }
                catch (error) {
                    console.log(error.message)
                }
            }

        },
        created() {
            this.updateTransaction()
        }
    }
</script>


<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>