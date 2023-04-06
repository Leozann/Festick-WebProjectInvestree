<template>
    <div class="container-body">
        <div class="event-banner-section">
            <img :src="dataTicket.ticket_image_landscape" alt="">
        </div>
        <div class="event-section">
            <div class="event-header">
                <div class="event-information">
                    <p class="event-title">{{ dataTicket.ticket_name }}</p>
                    <p>{{ dataTicket.ticket_schedule }}</p>
                    <p>{{ dataTicket.ticket_location }}</p>
                </div>
                <div class="event-card">
                    <p class="text-uppercase text-center">Start from</p>
                    <p class="text-uppercase text-center" id="eventPrice" ref="priceStartfrom"> idr {{ convertPrice }}
                    </p>
                    <div class="ec-button">
                        <a href="#catalogueSection" class="btn btn-success">Find Ticket</a>
                    </div>
                </div>
            </div>
            <div class="event-body">
                <div class="desc-event mb-5">
                    <p class="eb-title heading02">Description</p>
                    <p class="desc-text">{{ dataTicket.ticket_desc }}</p>
                    <p class="desc-text text-capitalize">event organizer: {{ dataTicket.ticket_organizer }}</p>
                </div>
                <div class="detail-event">
                    <p class="eb-title heading02">Detail Event</p>
                    <p>{{ dataTicket.ticket_location }}</p>
                    <p>{{ dataTicket.ticket_schedule }}</p>
                </div>
            </div>
            <div class="event-expand">
                <div id="accordion">
                    <p class="heading02">Mandatory Information</p>
                    <div class="card mb-2">
                        <div class="card-header" id="headingOne">
                            <p class="mb-0">
                                <button class="btn collapsed btn-accordion" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Redeem Ticket
                                </button>
                            </p>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>Tickets purchased are only used for personal gain and are not for sale and
                                        purchase illegally. If the Promoter receives information that tickets are being
                                        traded, the Promoter will/can cancel sales that are unofficial or without the
                                        approval of the Promoter and/or Festick.com.</li>
                                    <li>Considering that the event will be held in an outdoor area and there is a
                                        possibility of rain during the event or ahead of the event, please be able to
                                        prepare yourself for this situation and maintain the health and safety of
                                        yourself and those around you.</li>
                                    <li>Specifically for general sales through Festick.com, 1 (one) name can only
                                        purchase 2 (two) tickets. If you are found to have purchased tickets for more
                                        than the stated quota, the Promoter and Festick.com have the right to cancel
                                        your order.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <p class="mb-0">
                                <button class="btn collapsed btn-accordion" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-controls="collapseTwo">
                                    Term & Condition
                                </button>
                            </p>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>In accordance with the regulations stated in the Circular Letter (SE) of the
                                        Covid-19 Handling Task Force 20/2022, all spectators must have received Complete
                                        Vaccination.</li>
                                    <li>All spectators must bring a printed Vaccine Certificate (to avoid signal
                                        interference and the PeduliLindungi application cannot be used).</li>
                                    <li>Complete payment up to 30 minutes after placing an order. E-tickets will not be
                                        issued if payment is made after the payment time is up.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalogue-section" id="catalogueSection">
                <div class="catalogue-header">
                    <p class="heading02">Package Catalogue</p>
                </div>
                <div class="catalogue-body">
                    <div class="cb-card">
                        <div class="cb-header">
                            <p class="text-capitalize">{{ dataTicket.ticket_name }}</p>
                            <p class="text-capitalize text-small">{{ dataTicket.catalogue.catalogue_name }}</p>
                            <!-- <small>{{ dataTicket.catalogue.catalogue_desc }}</small> -->
                        </div>
                        <div class="cb-body">
                            <div class="cbd-icon"></div>
                            <div class="cbd-ticket" :class="{ hide: isActive }">
                                <div class="cbd-text" id="textAlert">
                                    <p>*Transactions per Event can only be done in 1x process</p>
                                </div>
                                <div class="cbd-text">
                                    <p>Jumlah Ticket</p>
                                </div>
                                <div class="cbd-counter">
                                    <div class="btn-counter">
                                        <button @click="dataDecrease" class="btn btn-success btn-left"
                                            ref="nerfBtn">-</button>
                                    </div>
                                    <div class="result-counter">
                                        <p>{{ counterNum }}</p>
                                    </div>
                                    <div class="btn-counter">
                                        <button @click="dataIncreament" class="btn btn-success btn-right">+</button>
                                    </div>
                                </div>
                                <div class="cbd-text" :class="viewPrice">
                                    <p>Total:</p>
                                </div>
                                <div class="cbd-text" id='priceTotal'>
                                    <p>{{ calculatePrice }}</p>
                                </div>
                            </div>

                            <div class="cbd-bottom">
                                <div class="cbd-price">
                                    <p>Start From</p>
                                    <p id="priceValue" ref="priceValue">IDR {{ convertPrice }}</p>
                                </div>
                                <div class="cbd-button">
                                    <button class="btn btn-danger" @click="buyTicket"
                                        :class="{ hide: isActive }">Cancel</button>
                                    <button class="btn btn-success" :class="gatePayment"
                                        @click="handlePayment">PayNow</button>
                                    <button class="btn btn-success" @click="buyTicket"
                                        :class="btnClass">BuyTicket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapMutations } from 'vuex';
export default {
    data() {
        return {
            dataTicket: [],
            transactions: [],
            convertPrice: null,
            priceTicket: null,
            counterNum: 0,
            isActive: true,
            buySession: false,
            dummyPrice: 0,
            btnClass: '',
            viewPrice: '',
            gatePayment: 'hide',
            finalPrice: ''
        }
    },
    methods: {
        dataIncreament(event) {
            if (this.counterNum == 10) {
                this.counterNum == 10
            } else if (this.counterNum >= 0) {
                this.counterNum += 1
                this.gatePayment = ''
            }


        },
        dataDecrease(event) {
            if (this.counterNum == 0) {
                this.counterNum == 0
                this.gatePayment = 'disabled'
            }
            else if (this.counterNum == 1) {
                this.gatePayment = 'disabled'
                this.counterNum -= 1
            }
            else if (this.counterNum <= 10) {
                this.counterNum -= 1
            }


        },

        buyTicket(event) {
            if (this.buySession == false && this.isActive == true) {
                this.buySession = true
                this.isActive = false
                this.btnClass = 'hide'
                this.gatePayment = 'disabled'
            } else if (this.buySession == true && this.isActive == false) {
                this.buySession = false
                this.isActive = true
                this.btnClass = ''
                this.gatePayment = 'hide'
                console.log(this.gatePayment)
            }
        },
        async getTicket(id) {
            try {
                const getPath = this.$route.path
                const id = getPath.slice(15)
                await axios.get('/api/ticket-detail/' + id).then(
                    (response) => {
                        // console.log(response.data.datas)
                        this.dataTicket = response.data.datas
                        this.dummyPrice = response.data.datas.ticket_startfrom
                        this.convertPrice = this.dummyPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                    })
            }
            catch (error) {
                console.log(error.message)
            }
        },
        ...mapMutations([
            'ADD_DATA',
            'SEND_TICKET'
        ]),
        handlePayment(event) {
            const checkStorage = window.sessionStorage.getItem('vuex')
            if (checkStorage.length < 65) {
                this.$router.push({ name: 'login_page' })
                alert(`Sorry\nTo buy this ticket, you are expected to login first`)
            } else {
                this.ADD_DATA(
                    {
                        'total_price': this.finalPrice
                    }
                )
                this.ADD_DATA(
                    {
                        'total_ticket': this.counterNum
                    }
                )
                this.SEND_TICKET(this.dataTicket)
                this.$router.push({ path: `/ticket-detail/${this.dataTicket.id}/transaction` })
            }
        }
    },

    created() {
        this.getTicket();
    },


    computed: {
        calculatePrice() {
            const getDummy = this.dummyPrice
            const getCounter = this.counterNum
            let resultCalculate
            if (getCounter != 0) {
                this.viewPrice = ''
                resultCalculate = getCounter * getDummy
                this.finalPrice = resultCalculate
                return (`IDR. ${resultCalculate.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}`)
            } else {
                resultCalculate = getDummy
                this.viewPrice = 'hide'
            }

        },

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

.event-banner-section {
    width: 100%;
    height: 500px;
    margin-top: 25px;
    margin-bottom: 100px;
    padding-left: 150px;
    padding-right: 150px;

    img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
}

.event-section {
    width: 100%;
    height: 100%;
    margin-bottom: 50px;
}

.event-header {
    padding-left: 50px;
    padding-right: 50px;
    height: 225px;
    border-bottom: 1px solid rgba(59, 59, 59, .8);
    display: flex;
    justify-content: space-between;
}

.event-title {
    font-size: 30px;
    font-weight: 600;
    color: #030303;
    letter-spacing: 3px;
    margin-top: 0px !important;
    padding-bottom: 20px;
}


.event-information {
    padding-top: 20px;
}

.event-information p {
    margin-top: -20px;
}

.event-card {
    width: 250px;
    height: 100%;
    max-height: 170px;
    padding: 20px;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
    transition: 500ms;
    border-radius: 20px;
}

.event-card p {
    font-size: 14px;
}

#eventPrice {
    font-weight: 800;
    font-size: 18px !important;
}

.ec-button {
    width: 100%;
    display: flex;
    justify-content: center;
}

.event-body {
    padding-top: 25px;
    padding-left: 35px;
    padding-right: 35px;
    width: 100%;
}

.detail-event .eb-title {
    margin-top: 0px !important;
    padding-bottom: 20px;
}

.detail-event p {
    margin-top: -15px;
}

.event-expand {
    height: 200px;
    width: 100%;
    height: 100%;
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 100px;
}

.btn-accordion {
    width: 100%;
    text-align: start;
}

.btn-accordion:focus {
    border: none;
    outline: none;
}

.catalogue-section {
    padding-top: 100px;
    padding-left: 35px;
    padding-right: 35px;
    width: 100%;
}

.cb-card {
    margin-top: 40px;
    width: 100%;
    height: 100%;
    max-height: 350px;
    min-height: 225px;
    padding-bottom: 35px;
    border-radius: 20px;
    box-shadow: 5px 2px 12px rgba(3, 3, 3, 0.5);
}

.cb-header {
    width: 100%;
    height: 100px;
    padding: 25px;

    p {
        font-size: 20px;
        font-weight: 600;
        text-align: start;
    }

    .text-small {
        font-weight: 400 !important;
        font-size: 16px !important;
        margin-top: -10px;
        letter-spacing: 2px;
    }
}

.cb-body {
    width: 100%;
    padding-left: 25px;
    padding-right: 25px;
}

.cbd-icon {
    width: 100%;
    height: 50px;
    border-bottom: 2px dashed rgba(3, 3, 3, 0.2);
}

.cbd-ticket {
    width: 100%;
    height: 75px;
    display: flex;
    align-items: center;
}

.cbd-text {
    height: 25px;
    padding-right: 35px;
}

#textAlert p {
    padding-right: 75px;
    font-weight: 600;
    color: #C61A09;
}

#priceTotal {
    padding-right: 0px !important;

    p {
        font-weight: 700;
    }
}

.cbd-counter {
    padding: auto;
    margin-right: 50px;
    width: 125px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 20px;
    border: 2px solid #198754;
    overflow: hidden;
}

.result-counter {
    padding-top: 0px;
    width: 75px;
    height: 25px;

    p {
        text-align: center;
    }
}

.btn-counter {
    width: 50px;

    button {
        width: 100%;
    }
}

.btn-left {
    border-radius: 10px 0px 0px 10px;
}

.btn-right {
    border-radius: 0px 10px 10px 0px;
}

.cbd-bottom {
    padding-top: 25px;
    display: flex;
    justify-content: space-between;
    position: relative;
    width: 100%;
}

#priceValue {
    font-size: 22px;
    font-weight: bold;
}

.cbd-button {
    height: 55px;
    position: absolute;
    bottom: 0;
    right: 0;
}
</style>
