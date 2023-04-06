<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Data Catalogue</h1>
        </div>

        <a href="admin-show-catalogue" class="btn btn-sm btn-primary shadow mb-3">Back</a>

        <div class="card shadow">
            <div class="card-body">
                <form @submit.prevent="createDataCatalogue">
                    <input type="hidden" name="_token" :value="csrf">
                    <div class="form-group">
                        <label for="catalogue_name">Catalogue Name</label>
                        <input type="text" v-model="catalogue.catalogue_name" class="form-control" name="catalogue_name" placeholder="catalogue_name">
                    </div>
                    <div class="form-group">
                        <label for="catalogue_desc">Description</label>
                        <textarea type="text" v-model="catalogue.catalogue_desc" class="form-control" name="catalogue_desc" placeholder="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="catalogue_price">Price</label>
                        <input type="text" v-model="catalogue.catalogue_price" class="form-control" name="catalogue_price" placeholder="price">
                    </div>
                    <button class="btn btn-primary btn-block mt-3" type="submit">
                       Add Catalogue
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'create-catalogue-component',
    created() {
        if (!this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        }
    },
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
            listAllCatalogue: {},
            catalogue:{
                catalogue_name: "",
                catalogue_desc: "",
                catalogue_price: "",
            }
        }
    },
    methods: {
        async createDataCatalogue(){
            try {
                await axios.post('api/admin-catalogue', this.catalogue).then(response=>{
                    console.log(response)
                    this.$router.push('/admin-show-catalogue')
                })
            }
            catch (error) {
                console.log(error.message)
            }

        }
    },
    created() {
        this.createDataCatalogue()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>
