<template>
    <div class="main-container">
        <div class="row">
            <div class="col-md-5 profile me-5">
                <div class="profile-name pt-5">
                    <img class="mx-auto d-block mb-3" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" style= "width: 120px;" alt="user">
                    <h3 class="user-name" style="text-align: center;"><b style="color:white">Halo, {{user.User_name}}!</b></h3>
                </div>
                <div class="profile-title mt-5">
                    <a href="/myaccount" class="title">My Account <hr ></a>
                    <a href="/historytransaction" class="active">History Transactions <hr class="mb-5"></a>
                </div>
            </div>
            <div class="col-md-5 box my-account mx-auto d-block me-0">
                <div class="judulTabel">
                    <h1>History Transaction</h1>
                </div>
                <div class="tabelTransaksi">
                    <table >
                        <tr>
                          <th>No</th>
                          <th>Ticket Name</th>
                          <th>Total Price</th>
                          <th>Status</th>
                          <th> </th>
                        </tr>
                        <tr>
                        </tr>
                      </table>
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
      isActive: true,
      AllTransaction: []

    }
  },
  computed: {
    ...mapState([
      'user', 'isLogin',
    ]),

  },
  methods: {
    popUpEvent(event) {
      if (this.isActive == false) {
        this.isActive = true
      } else {
        this.isActive = false
      }

    },
    ...mapMutations([
      'MANIPULATE_VIEW'
    ])

  },

  created() {
    this.getAllTransaction()
  }
}
</script>

<style lang="scss" scoped>

.main-container{
    width: 100%;
    height: 100%;
    padding-bottom: 10%;
    padding-left: 15%;
    padding-right: 15%;
    padding-top: 5%;
}
.profile{
    float: left;
    color: #FFFFFF;
    border: 1px solid;
    background-color: #1C6758;
    border-radius: 8px;
}
.user-name{
    font-size: 18px;
    padding-top:4%;
}
.profile-title{
    font-size: 12px;
    padding: 10%;
}
.profile-title .active{
    color: #FFFFFF;
}
.profile-title a{
    text-decoration: none;
    color: #6D7D8B;
    font-size: 14px;
}
.profile-title .title:hover{
    color: #FFFFFF;
}
.my-account{
    text-align: center;
    float: right;
}

.account-part{
    padding: 50px;
    border: 1px solid;
    border-radius: 10px;
}

.box-account{
    text-align: center;
}

.strip {
    width: 80px;
    height: 4px;
    background: #1C6758;
    border-radius: 10px;
}

.judulTabel{
    text-align: center;
    margin-top: 80px;
    margin-left: 47px;
    width: 350px
}

table{
    margin-left: auto;
    margin-right: auto;
    // width: 100%;
    width: 450px;
    border-top: 1px solid #ddd;
}

td{
    text-align: center;
    height: 30px;
    color: #aaa;
}

th{
    height: 60px;
    padding: 10px;
}



</style>


