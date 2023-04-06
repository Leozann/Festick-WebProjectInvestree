<template>
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Ticket</h1>
        </div>

        <a href="../admin-show-ticket" class="btn btn-sm btn-primary shadow mb-3">Back</a>

        <div class="card shadow">
            <div class="card-body">
                <form @submit.prevent="updateTicket">
                    <input type="hidden" name="_token" :value="csrf">
                    <div>
                        <label for="ticket_name">Ticket</label>
                        <input type="text" v-model="ticket.ticket_name" class="form-control" name="ticket_name" placeholder="ticket_name">
                    </div>
                    <div class="form-group">
                        <label for="ticket_image">Image</label>
                        <input type="text" v-model="ticket.ticket_image" class="form-control" name="ticket_image" placeholder="url image">
                    </div>
                    <div class="form-group">
                        <label for="ticket_desc">Description</label>
                        <textarea type="text" v-model="ticket.ticket_desc" class="d-block w-100 form-control" rows="10"  name="ticket_desc" placeholder="ticket_desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ticket_schedule">Schedule</label>
                        <input type="date" v-model="ticket.ticket_schedule" class="form-control" name="ticket_schedule" placeholder="ticket_schedule">
                    </div>
                    <div class="form-group">
                        <label for="ticket_location">Location</label>
                        <input type="text" v-model="ticket.ticket_location" name="ticket_location" class="form-control" placeholder="location">
                    </div>
                    <div class="form-group">
                        <label for="ticket_organizer">Organizer</label>
                        <input type="text" v-model="ticket.ticket_organizer" name="ticket_organizer" class="form-control" placeholder="organizer">
                    </div>
                    <div class="form-group">
                        <label for="ticket_startfrom">Start From</label>
                        <input type="text" v-model="ticket.ticket_startfrom" class="form-control" name="ticket_startfrom" placeholder="ticket_startfrom">
                    </div>
                    <div class="form-group">
                        <label for="catalogue_id">Catalogue</label>
                        <select class="form-select" v-model="ticket.catalogue_id">
                            <option value="1">Regular</option>
                            <option value="2">VIP</option>
                            <option value="3">VVIP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ticket_status">Ticket Status</label>
                        <select class="form-select" v-model="ticket.ticket_status">
                            <option value="Available">Available</option>
                            <option value="Sold Out">Sold Out</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block mt-3" type="submit">
                       Update Ticket
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'create-ticket-component',
        created() {
            if (!this.csrf) {
                console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
            }
        },
        data() {
            return {
                csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
                AllTicket: {},
                ticket:{
                    ticket_name: "",
                    ticket_desc: "",
                    ticket_image: "",
                    ticket_schedule: "",
                    ticket_location: "",
                    ticket_organizer: "",
                    ticket_startfrom: "",
                    catalogue_id: "",
                    ticket_status: "",
                    _method:"patch"
                }
            }
        },
        methods: {
            async updateTicket(){
                try {
                    const { data } = await axios.patch(`/api/admin-ticket/${this.$route.params.id}`, this.ticket)
                    .then(response=>{
                        console.log(response)
                        console.log(data)
                        this.$router.push('/admin-show-ticket')
                    })
                }
                catch (error) {
                    console.log(error.message)
                }
            }

        },
        created() {
            this.updateTicket()
        }
    }
</script>


<style lang="scss" scoped>
.container{
    padding: 80px;
}
</style>