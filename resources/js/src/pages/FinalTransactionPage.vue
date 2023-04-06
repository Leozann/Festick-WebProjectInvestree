<template lang="">
    <div class="container-body">
        <h3 class="text-center">Transaction Detail</h3>
        <div class="event-title">
            <!-- <p class="heading01 mb-1">We The Fest</p> -->
            <p class="heading01 mb-1">{{selectedTicket.ticket_name}}</p>
            <p>{{selectedTicket.ticket_schedule}}</p>
            <p>{{selectedTicket.ticket_location}}</p>
        </div>
        
        <div class="event-confirmation">
            <div class="ec-details">
                <div class="ecd-img">
                    <img :src="`${selectedTicket.ticket_image}`" alt="">
                </div>
                <div class="ecd-data-profile">
                    <p class="heading02 text-center">User Identity</p>
                    <div class="ecd-flexbox">
                        <div class="ecd-user left">
                            <p class="ecd-data-text mb-1">Name</p>
                            <input disabled type="text" class="text-capitalize" :value=user.User_name>
                            <p class="ecd-data-text mb-1">Email</p>
                            <input disabled type="text" :value=user.User_email></input>
                        </div>

                        <div class="ecd-user right">
                            <p class="ecd-data-text mb-1" >Phone Number</p>
                            <input disabled type="text" :value=user.User_phone></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-data">
                <p class="heading02 text-center">Order Detail</p>
                <div class="ec-data-detail">
                    <p>Jumlah Tiket:</p>
                    <p>{{totalTicket}}</p>
                </div>
                <div class="ec-data-detail">
                    <p>Total Harga Tiket:</p>
                    <p>{{totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}}</p>
                </div>
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Payment Method</option>
                        <option value="1">BCA VA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;102908129304871</option>
                    </select>
                </div>
                <div class="ec-data-btn">
                    <button  class="btn btn-success w-100" type="button" data-toggle="modal" data-target="#alertSuccess">Confirm</button>
                </div>
            </div>

            <div class="modal fade" id="alertSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Transaction Success</h5>
                        </div>
                        <div class="modal-body">
                            <div class="modal-img">
                                <img src="/assets/img/success.png" alt="">
                            </div>
                            <h4 class="text-center mt-3">Congratulation</h4>
                            <p class="text-center">Pembayaranmu Berhasil ! <br>Silahkan tunggu email penerbitan e-voucher dikirim ke emailmu</br></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="flowTransactionSuccess">Close</button>
                        </div>
                    </div>
                </div>
            </div>
</div>
            

        </div>

    </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex';
export default {
    data() {
        return {
            dataTicket: []
        }
    },
    computed: {
        ...mapState([
            'memories', 'user', 'selectedTicket'
        ]),
        totalPrice() {
            return parseInt(this.memories.map(value => value.total_price).slice(0))
        },

        totalTicket() {
            return this.memories.map(value => value.total_ticket).slice(1).toString()
        }

    },
    methods: {
        ...mapMutations([
            'DELETE_DATA', 'MANIPULATE_VIEW'
        ]),
        handleDelete(event) {
            this.DELETE_DATA()

        },
        flowTransactionSuccess(event) {
            this.DELETE_DATA()

            this.$router.push({ name: 'landing_page' })
        },
        async getTicket(id) {
            try {
                const getPath = this.$route.path
                const id = getPath.slice(15)
                await axios.get('/api/ticket-detail/' + id).then(
                    (response) => {
                        console.log(response.data.datas)
                        this.dataTicket = response.data.datas
                    })
            }
            catch (error) {
                console.log(error.message)
            }
        },
    },
    created() {
        this.getTicket();
    },
    mounted() {
        console.log(this.dataTicket);
    }
}
</script>

<style lang="scss" scoped>
.container-body {
    width: 100%;
    height: 100%;
    padding: 50px;
    overflow: hidden;
}

.event-title {
    margin-top: 15px;

    p {
        margin-bottom: -3px;
        text-align: center;
    }
}

.event-confirmation {
    width: 100%;
    margin-top: 50px;
    padding: 25px;
    position: relative;
    padding-bottom: 100px;
}

.ec-details {
    display: flex;
    justify-content: space-between;
}

.ecd-img {
    width: 500px;
    height: 550px;
    border-radius: 15px;
    overflow: hidden;

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

.ecd-data-profile {
    min-width: 400px;
    max-width: 550px;
    width: 100%;
    height: 250px;
    border-radius: 15px;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    padding: 15px;

    .ecd-flexbox {
        display: flex;
        justify-content: space-around;
    }

    input[type=text] {
        width: 225px;
        padding-left: 5px;
        padding-right: 5px;
    }
}

.ecd-user {

    p {
        margin-top: 10px;
        margin-bottom: -2px;
    }
}

.ec-data {
    position: absolute;
    bottom: 0;
    right: 0;
    min-width: 400px;
    max-width: 550px;
    width: 100%;
    height: 250px;
    margin-right: 25px;
    margin-bottom: 100px;
    border-radius: 15px;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    padding: 15px;
    padding-left: 25px;
    padding-right: 25px;
}

.ec-data-detail {
    margin-top: -5px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.ec-data-btn {
    margin-top: 15px;
    width: 100%;
    height: 40px;
    display: flex;
    justify-content: center;

}

.modal-img {
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: center;

    img {
        width: 50px;
        height: 50px;
    }
}
</style>