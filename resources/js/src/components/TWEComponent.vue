<template>
    <div class="twe-section">
        <p class="heading01">This Week's Event</p>
        <div class="row row-cols-5 px-5 mt-5">
            <div v-for="cardEvent in card_events.slice(0, 4)" class="col-3 mb-5">
                <div class="tw-event-card">
                    <a :href="'ticket-detail/' + cardEvent.id">
                        <div class="tw-img">
                            <img :src="`${cardEvent.ticket_image}`" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'card-weekly-component',
    data() {
        return {
            card_events: [],
        }
    },
    methods: {
        async getListTicket() {
            try {
                await axios.get('api/ticket-menu').then(
                    (response) => {
                        // console.log(response.data.datas)
                        this.card_events = response.data.datas
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
.twe-section {
    width: 100%;
    height: 550px;
}

.tw-event-card {
    position: relative;
    width: 200px;
    height: 300px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    transition: 500ms;
}

.tw-event-card a {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
}

.tw-event-card:hover {
    transform: scale(1.1);
    transition: 500ms;
}

.tw-img img {
    object-fit: cover;
    width: 200px;
    height: 300px;
}
</style>