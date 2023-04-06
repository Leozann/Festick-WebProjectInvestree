<template>
    <div class="ue-section">
        <p class="heading01">Upcoming Event</p>
        <div class="ues-card-container">
            <div v-for="cardData in UETicket.slice(0, 2)" class="ue-event-card">
                <a :href="'ticket-detail/' + cardData.id">
                    <img class="ue-card-img" :src="`${cardData.ticket_image}`" alt="">
                    <div class="ue-card-content">
                        <a class="heading02 text-white text-center" href="">{{ cardData.ticket_name }}</a>
                    </div>
                </a>
            </div>
        </div>
        <div class="ues-card-container">
            <div v-for="cardData in UETicket.slice(2, 4)" class="ue-event-card">
                <a :href="'ticket-detail/' + cardData.id">
                    <img class="ue-card-img" :src="`${cardData.ticket_image}`" alt="">
                    <div class="ue-card-content">
                        <a class="heading02 text-white text-center" href="">{{ cardData.ticket_name }}</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'ue-component',
    data() {
        return {
            UETicket: [],
        }
    },
    methods: {
        async getListTicket() {
            try {
                await axios.get('api/ticket-menu').then(
                    (response) => {
                        this.UETicket = response.data.datas
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
.ue-section {
    width: 100%;
    height: 800px;

}

.ues-card-container {
    padding-top: 75px;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    // overflow: hidden;
}

.ue-event-card {
    width: 350px;
    height: 250px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    transition: all 2s ease;
    position: relative;
    overflow: hidden;
}

.ue-card-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.ue-card-content {
    display: none;
    background-color: #030303;
    opacity: .7;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    transition: 500ms;
    padding: 15px;
}


.ue-event-card:hover .ue-card-content {
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 2s ease;
}
</style>
