<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ticket List Festick</h1>
            <a href="admin-create-ticket" class="btn btn-sm btn-primary shadow sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add Ticket
            </a>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticket</th>
                                <th>Start From</th>
                                <th>Schedule</th>
                                <th>Location</th>
                                <th>Organizer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in AllTicket" :key="item.message">
                                <td>{{ index + 1 }}</td>
                                <td>{{ item.ticket_name }}</td>
                                <td>{{ item.catalogue_name }}</td>
                                <td>{{ item.ticket_startfrom }}</td>
                                <td>{{ item.ticket_schedule }}</td>
                                <td>{{ item.ticket_location }}</td>
                                <td>{{ item.ticket_organizer }}</td>
                                <td>{{ item.ticket_status }}</td>
                                <td>
                                    <button class="btn btn-success" type="button" @click="editTicket(item.id)">Edit</button>
                                    <button class="btn btn-danger" v-on:click="deleteTicket(item.id, index)">Delete</button>
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
    name: 'ticket-admin-component',
    data() {
        return {
            AllTicket: {},
        }
    },
    methods: {
        async getAllTicket() {
            try {
                await axios.get('api/admin-ticket').then(
                (response) => {
                    console.log(response.data.datas)
                    this.AllTicket = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
        async deleteTicket(id, index) {
            try{
                await axios.delete('api/admin-ticket/'+id).then(
                (response) => {
                    console.log(response.data.datas)
                    this.item.splice(index, 1);
                    this.$router.push('/admin-show-ticket')
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },

        editTicket(id) {
                this.$router.push(`/admin-edit-ticket/${id}`)
        }

    },
    created() {
        this.getAllTicket()
        this.deleteTicket()
        this.getEdit()
    }
}
</script>

<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>
