<template lang="">
    <div>
        <div class="split left bg-darkgreen">
            <div class="centered">
                <img src="assets/img/loud_music_2.png">
            </div>
        </div>

        <div class="split right">
            <div class="split-header">
                <p class="heading01 text-center" id="splitHeader">Login</p>
                <p class="split-text text-center">Don’t Have an Account?
                    <span><a href="/register">Register</a></span></p>
            </div>
            <div class="centered">
                <div class="input-form-container">
                        <form @submit.prevent="handleLogin" method="post">
                        <input type="hidden" name="_token" :value="csrf"></input>
                        <div class="mb-3">
                            <p class="text-left">Email</p>
                            <input type="email" class="form-control" placeholder="name@example.com" v-model="form.email">
                        </div>
                        <div class="mb-3">
                            <p class="text-left">Password</p>
                            <input type="password" class="form-control" placeholder="12345" v-model="form.password">
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-success">Login</button>
                            <a href="/" class="btn btn-outline-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { mapMutations } from 'vuex';
export default {
    created() {
        if (!this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        };
    },
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
            form: {
                email: '',
                password: ''
            },
        }
    },
    methods: {
        ...mapMutations([
            'CHANGE_USER',
            'MANIPULATE_VIEW'
        ]),
        async handleLogin(event) {
            await axios.post('api/login/check-user', this.form).then(
                (response) => {
                    console.log(response)
                    // set local storage
                    // this.CHANGE_USER(response.data.datas)
                    // this.$router.push({ name: 'landing_page' })
                    // this.MANIPULATE_VIEW('')
                    const logUser = response.data.status
                    if (response.data.status == 'error') {
                        alert(`Login Failed\nPlease check your username and password`)
                    } else {
                        this.CHANGE_USER(response.data.datas)
                        this.$router.push({ name: 'landing_page' })
                        this.MANIPULATE_VIEW('')
                    }
                })
        }
    },
}
</script>

<style lang="scss" scoped>
.navbar-section {
    display: none !important;
}

.footer-section {
    display: none !important;
}

.split {
    height: 100%;
    width: 50%;
    position: fixed;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
}

.right {
    right: 0;
    background-color: #FBFBFB;
}

.split-header {
    padding-top: 50px;
    width: 100%;
    height: 150px;
    position: relative;
}

.split-text span a {
    color: #3D8361 !important;
    text-decoration: underline;
}

.split-text span a:hover {
    cursor: pointer;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.centered img {
    width: 450px;
    border-radius: 50%;
}

.input-form-container {
    padding-top: 100px;
    padding-left: 15px;
    padding-right: 15px;
    width: 400px;
    height: 400px;
}

.text-left {
    text-align: start;
}

.form-label {
    width: 100%;
}

.form-control {
    border-color: #1C6758;
    border-radius: 15px;
}

.form-button {
    width: 100%;
    padding-top: 50px;
}
</style>