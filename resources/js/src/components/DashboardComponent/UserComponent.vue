<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User List Festick</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Bank</th>
                                <th>Account Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in listAllUser" :key="item.message">
                                <td>{{ index + 1 }}</td>
                                <td>{{ item.user_fullname }}</td>
                                <td>{{ item.email }}</td>
                                <td>{{ item.user_phone }}</td>
                                <td>{{ item.user_bank }}</td>
                                <td>{{ item.user_account }}</td>
                                <td>{{ item.user_status }}</td>
                                <td>
                                    <router-link :to='{name:"admin_edit_user_page",params:{id:item.id}}' class="btn btn-success">Edit</router-link>
                                    <button class="btn btn-danger" v-on:click="deleteUser(item.id, index)">Delete</button>
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
    name: 'user-all-component',
    data() {
        return {
            listAllUser: []
        }
    },
    methods: {
        async getListUser() {
            try {
                await axios.get('api/admin-user').then(
                (response) => {
                    console.log(response.data.datas)
                    this.listAllUser = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
        async deleteUser(id, index) {
            try{
                await axios.delete('api/admin-user/'+id).then(
                (response) => {
                    console.log(response.data.datas)
                    this.listAllUser = response.data.datas
                    this.item.splice(index, 1);
                    this.$router.push('/admin-show-user')
                })
            }
            catch(error){
                console.log(error.message)
            }
        },
    },
    created() {
        this.getListUser()
        this.deleteUser()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>