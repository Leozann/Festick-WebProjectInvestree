<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Catalogue Ticket List Festick</h1>
            <a href="admin-create-catalogue" class="btn btn-sm btn-primary shadow sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add Catalogue
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Catalogue</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in listAllCatalogue" :key="item.message">
                                <td>{{ index + 1 }}</td>
                                <td>{{ item.catalogue_name }}</td>
                                <td>{{ item.catalogue_desc }}</td>
                                <td>{{ item.catalogue_price}}</td>
                                <td>
                                    <router-link :to='{name:"admin_edit_catalogue_page",params:{id:item.id}}' class="btn btn-success">Edit</router-link>
                                    <button class="btn btn-danger" v-on:click="deleteCatalogue(item.id, index)">Delete</button>
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
    name: 'catalogue-admin-component',
    data() {
        return {
            listAllCatalogue: []
        }
    },
    methods: {
        async getListCatalogue() {
            try {
                await axios.get('api/admin-catalogue').then(
                (response) => {
                    console.log(response.data.datas)
                    this.listAllCatalogue = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },

        async deleteCatalogue(id, index) {
            try{
                const { data } = await axios.delete('api/admin-catalogue/'+id).then(
                (response) => {
                    console.log(response.data.datas)
                    this.item.splice(index, 1);
                    this.$router.push('/admin-show-catalogue')
                })
            }
            catch(error){
                console.log(error.message)
            }
        }
    },
    created() {
        this.getListCatalogue()
        this.deleteCatalogue(id, index)
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>