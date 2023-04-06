<template>
    <div class="ticket-section" id="showAllticket">
        <div class="ts-header">
            <p class="heading01">All Ticket</p>
        </div>
        <div class="row row-cols-4">
            <div v-for="ticketItem in listAllTicket" :key="ticketItem.message" class="col-3 mb-5">
                <div v-if="`${ticketItem.ticket_status}` == 'available'">
                    <div class="ts-event-card">
                        <a :href="'ticket-detail/' + ticketItem.id">
                            <div class="ts-img">
                                <img :src="`${ticketItem.ticket_image}`" alt="">
                            </div>
                            <div class="ts-header">
                                <p>{{ ticketItem.ticket_name }}</p>
                            </div>
                            <div class="ts-body">
                                <p class="ts-location">{{ ticketItem.ticket_location }}</p>
                                <p class="ts-date">{{ ticketItem.ticket_schedule }}</p>
                            </div>

                            <div class="ts-bottom">
                                <p class="ts-price">Rp. {{
                                        ticketItem.ticket_startfrom.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
                                }}</p>
                                <div class="ts-status">
                                    <p class="text-capitalize">{{ ticketItem.ticket_status }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div v-else>
                    <div class="ts-event-card" id="eventCardNotAvail">
                        <div class="ts-event-card-overlay"></div>
                        <a href="javascript:void(0)">
                            <div class="ts-img">
                                <img :src="`${ticketItem.ticket_image}`" alt="">
                            </div>
                            <div class="ts-header">
                                <p>{{ ticketItem.ticket_name }}</p>
                            </div>
                            <div class="ts-body">
                                <p class="ts-location">{{ ticketItem.ticket_location }}</p>
                                <p class="ts-date">{{ ticketItem.ticket_schedule }}</p>
                            </div>

                            <div class="ts-bottom">
                                <p class="ts-price">Rp. {{
                                        ticketItem.ticket_startfrom.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')
                                }}</p>
                                <div class="ts-status">
                                    <p id="sold" class="text-capitalize">{{ ticketItem.ticket_status }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'ticket-all-component',
    data() {
        return {
            listAllTicket: [],
        }
    },
    methods: {
        async getListTicket() {
            try {
                await axios.get('api/ticket-menu').then(
                    (response) => {
                        this.listAllTicket = response.data.datas
                    })
            }
            catch (error) {
                console.log(error.message)
            }
        },

    },
    created() {
        this.getListTicket()
    },
}
</script>

<style lang="scss" scoped>
.ticket-section {
    width: 100%;
    height: 100%;
    margin-bottom: 50px;
}

#showAllticket {
    margin-top: 100px;
}

.ts-header {
    margin-bottom: 50px;
}

.ts-event-card {
    position: relative;
    width: 200px;
    height: 360px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    transition: 500ms;
    border: 1px solid rgba(28, 103, 88, 1);
}

.ts-event-card-overlay {
    position: absolute;
    background-color: #030303;
    opacity: .5;
    width: 100%;
    height: 100%;
    z-index: 3;
}

.ts-event-card a {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
}

.ts-event-card:hover {
    transform: scale(1.1);
    transition: 500ms;
}

#eventCardNotAvail:hover {
    transform: scale(1) !important;
}

.ts-img {
    width: 200px;
    height: 230px;
    overflow: hidden;
}

.ts-img img {
    object-fit: cover;
    width: 200px;
    height: 300px;
}

.ts-header {
    width: 100%;
    max-width: 175px;
    padding-left: 10px;
    padding-top: 10px;
}

.ts-event-card .ts-header p {
    font-size: 14px;
    font-weight: 300;
    letter-spacing: 1.5px;
}

.ts-body {
    width: 100%;
    position: relative;
    top: 0;
    left: 0;
    margin-top: -45px;
    margin-left: 10px;
}

.ts-event-card .ts-body p {
    font-size: 10px;
    opacity: .6;
    margin-top: -15px
}

.ts-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 25px;
    padding-left: 10px;
    padding-bottom: 30px;
}

.ts-price {
    font-size: 15px !important;
    margin-top: -5px !important;
    opacity: 1 !important;
}

.ts-status {
    width: 100%;
    max-width: 50px;
    height: 30px;
    position: absolute;
    bottom: 0;
    right: 0;
    margin-right: 0px;
}

.ts-status p {
    font-size: 10px;
    color: #1C6758;
    font-weight: 700;
}

#sold {
    color: red !important;
}
</style>