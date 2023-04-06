<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data User</h1>
        </div>

        <a href="../admin-show-user" class="btn btn-sm btn-primary shadow">Back</a>

        <div class="card shadow">
            <div class="card-body">
                <form @submit.prevent="editDataUser">
                    <input type="hidden" name="_token" :value="csrf">
                    <div class="form-group">
                        <label for="user_phone">Phone Number</label>
                        <input type="text" v-model="user.user_phone" class="form-control" name="user_phone" placeholder="user_phone">
                    </div>
                    <div class="form-group">
                        <label for="user_bank">Bank</label>
                        <input type="text" v-model="user.user_bank" name="user_bank" class="form-control" placeholder="bank">
                    </div>
                    <div class="form-group">
                        <label for="user_account">Account Number</label>
                        <input type="text" v-model="user.user_account" name="user_account" class="form-control" placeholder="account">
                    </div>
                    <div class="form-group">
                        <label for="user_status">User Status</label>
                        <select class="form-select" v-model="user.user_status">
                            <option value="Actived">Actived</option>
                            <option value="Deleted">Deleted</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block mt-3" type="submit">
                       Update User
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'edit-user-component',
    created() {
        if (!this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        }
    },
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
            AllUser: {},
            user:{
                user_phone: "",
                user_bank: "",
                user_account: "",
                user_status: "",
            }
        }
    },
    methods: {
        async editDataUser(){
            try {
                const { data } = await axios.patch(`/api/admin-user/${this.$route.params.id}`, this.user)
                .then(response=>{
                    console.log(response)
                    console.log(data)
                    this.$router.push('/admin-show-user')
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
    },
    created() {
        this.editDataUser()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>
