<template>
    <div class="helptools-section">
        <p class="heading01">Need Help?</p>
        <div class="helptool-row">
            <div v-for="getData in list_helptools" class="helptool-card bg-green">
                <a :href="`${getData.helptool_link}`">
                    <div class="helptool-img">
                        <img :id="`${getData.helptool_id}`" :src="`${getData.helptool_img}`" alt="">
                    </div>
                    <p class="helptool-text text-white text-center mt-3">{{ getData.helptool_name }}</p>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'help-tool-component',
    data() {
        return {
            list_helptools: [
                {
                    helptool_id: 'toolIcon1',
                    helptool_img: 'assets/img/nh-section/ticket_icon.png',
                    helptool_name: 'Ticket Information',
                    helptool_link: '#'
                },
                {
                    helptool_id: 'toolIcon2',
                    helptool_img: 'assets/img/nh-section/book_icon.png',
                    helptool_name: 'Booking Ticket',
                    helptool_link: '#'
                },
                {
                    helptool_id: 'toolIcon2',
                    helptool_img: 'assets/img/nh-section/dollar_icon.png',
                    helptool_name: 'Refund Ticket',
                    helptool_link: '#'
                },
                {
                    helptool_id: 'toolIcon2',
                    helptool_img: 'assets/img/nh-section/payment_icon.png',
                    helptool_name: 'Payment Error',
                    helptool_link: '#'
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.helptools-section {
    margin-top: 50px;
    padding-bottom: 50px;
}

.helptool-row {
    margin-top: 50px;
    display: flex;
    justify-content: space-evenly;
}

.helptool-card {
    width: 200px;
    height: 200px;
    border-radius: 20px;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    transition: 500ms;
}

.helptool-card:hover {
    transform: rotate(-3deg);
    transition: 500ms;
}

.helptool-img {
    margin-top: 25px;
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}

#toolIcon1 {
    width: 30px;
    height: 80px;
}

#toolIcon2 {
    width: 80px;
    height: 80px;
}
</style>