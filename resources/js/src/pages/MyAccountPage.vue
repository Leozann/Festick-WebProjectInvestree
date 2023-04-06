<template>
    <div class="main-container">
        <div class="row">
            <div class="col-md-5 profile me-5">
                <div class="profile-name pt-5">
                    <img class="mx-auto d-block mb-3" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" style= "width: 120px;" alt="user">
                    <h3 class="user-name" style="text-align: center;"><b style="color:white">Halo, {{user.User_name}}!</b></h3>
                </div>
                <div class="profile-title mt-5">
                    <a href="/myaccount" class="active">My Account <hr class="mb-5"></a>
                    <a href="/historytransaction" class="title">History Transactions <hr></a>
                </div>
            </div>
            <div class="col-md-5 box my-account mx-auto d-block me-0">
                <h2>My Account <hr class="mb-5"></h2>
                 <div class="account-part">
                    <div class="box-account">
                        <h6><b>Fullname</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mb-5 mt-3">{{ user.User_name }}</h6>
                    </div>
                    <div class="box-account">
                        <h6><b>Email</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mb-5 mt-3">{{ user.User_email }}</h6>
                    </div>
                    <div class="box-account">
                        <h6><b>Phone Number</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mb-5 mt-3">{{ user.User_phone }}</h6>
                    </div>
                    <div class="box-account">
                        <h6><b>Bank</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mb-5 mt-3">{{ user.User_bank }}</h6>
                    </div>
                    <div class="box-account">
                        <h6><b>Account Number</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mb-5 mt-3">{{ user.User_account }}</h6>
                    </div>
                    <div class="box-account">
                        <h6><b>Status</b></h6>
                        <div class="strip mx-auto d-block"></div>
                        <h6 class="mt-3">{{ user.User_status }}</h6>
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
        isActive: true,
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
</style>