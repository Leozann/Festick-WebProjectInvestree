<template>
    <div class="container">
        <h3>Transaction Detail</h3>

        <div class="row satu">
            <div class="column">
                <img class="poster" :src="transaction.ticket.ticket_image" alt="">
            </div>
            <div class="column judul_konser">
                <h1>{{ transaction.ticket.ticket_name }}</h1>
                <p>{{ transaction.ticket.ticket_schedule }}</p>
                <p>{{ transaction.ticket.ticket_location }}</p>
            </div>
        </div>

        <div class="totalPemesanan">
            <div class="row dua">
                <div class="column mt-5">
                    <p>User Name</p>
                    <p>Qty</p>
                    <p>Price</p>
                    <p>Unique Code</p>
                    <p><b>Total</b></p>
                    <p><b>Payment Method</b></p>
                </div>
                <div class="column mt-5">
                    <p>{{ transaction.user.user_fullname }}</p>
                    <p>{{ transaction.ticket_quantity }} Ticket</p>
                    <p>Rp {{ transaction.total_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') }}</p>
                    <p>Rp 275</p>
                    <p class="pBiru"><b>Rp {{ (transaction.total_price + 275).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.')}}</b></p>
                    <p class="pBiru"><b>BCA VA</b></p>
                </div>
            </div>

            <button>Upload</button>
            <p class="keterangan mt-3">*Please upload your proof of payment</p>
        </div>

    </div>

</template>

<script>
export default{
    data(){
        return{
            transaction:[]
        }
    },
    methods: {
        async getTransaction(id) {
            try {
                const getPath = this.$route.path
                const id = getPath.slice(20)
                await axios.get('/api/transaction-detail/' + id).then(
                (response) => {
                    console.log(response.data.datas)
                    this.transaction = response.data.datas
                })
            }
            catch (error) {
                console.log(error.message)
            }
        },
    },
    created(){
        this.getTransaction();
    },
    mounted() {
        console.log(this.transaction);
    }
}
</script>

<style lang="scss" scoped>
.container{
    width: 500px;
    height: 1000px;
    padding: 20px 30px;
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    margin: auto;
    margin-top: 80px;
}

.satu .column {
    float: left;
    width: 50%;
}

.satu{
    height: 260px;
    margin-top: 30px;
}

.dua .column {
    float: left;
    width: 50%;
    margin-top: 10px;
}

.totalPemesanan{
border-width: 5px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
height: 400px;
margin-top: 10px;
padding: 0px 30px;
margin-bottom: 30px;
border-radius: 20px;
}
.poster{
    width: 200px;
    height: 250px;
    border-radius: 25px;
    margin: auto;
}

.judul_konser{
    margin-top: 50px;   
    margin-bottom: 140px; 
}

button{
    background-color: #1C6758;
    border-radius: 15px;
    border-width: 0ch;
    width: 110px;
    height: 40px;
    color: white;
    font-size: 12px;
    margin-left:270px;
    margin-top: 5px;
    margin-bottom: 2px;
    
}

.keterangan{
    font-weight: bold;
    font-size: smaller;
    margin-left: 135px;
}

.pBiru{
    color:blue;
}

/* .dua {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-width: 5px;
} */
</style>