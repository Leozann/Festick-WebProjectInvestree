<template lang="">
    <div>
        <div class="split left bg-darkgreen">
            <div class="centered">
                <img src="assets/img/loud_music_1.png">
            </div>
        </div>

        <div class="split right">
            <div class="split-header">
                <p class="heading01 text-center" id="splitHeader">Register</p>
                <p class="split-text text-center">Have an Account?
                    <span><a href="/login">Login</a></span></p>
            </div>
            <div class="centered" id="scrollCentered">
                <div class="input-form-container">
                        <form @submit.prevent="handleRegister" method="post">
                        <input type="hidden" name="_token" :value="csrf"></input>
                        <div class="mb-3">
                            <p class="text-left">Fullname</p>
                            <input type="text" class="form-control" placeholder="Hello World" v-model="form.user_fullname">
                                <p class="input-form-alert">{{textMandatory}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="text-left">Email</p>
                            <input type="email" class="form-control" placeholder="helloworld@gmail.com"  v-model="form.email">
                                <p class="input-form-alert">{{textMandatory}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="text-left">Phone Number</p>
                            <input type="text" class="form-control" placeholder="+6281208263010" v-model="form.user_phone">
                                <p class="input-form-alert">{{textMandatory}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="text-left">Password</p>
                            <input type="password" class="form-control" placeholder="12345" v-model="form.password">
                                <p class="input-form-alert">{{textMandatory}}</p>
                            <p class="input-form-alert next-alert">{{limitPassword}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="text-left pt-3">Confirm Password</p>
                            <input type="password" class="form-control"   v-model="form.passwordConfirm">
                            <p class="input-form-alert">{{textMandatory}}</p>
                            <p class="input-form-alert next-alert" :id="matchColor">{{checkData}}</p>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-success" :class="buttonView" >Register</button>
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
export default {
    created() {
        if (!this.csrf) {
            console.warn('The CSRF token is missing. Ensure that the HTML header includes the following: <meta name="csrf-token" content="{{ csrf_token() }}">');
        }
    },
    data() {
        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '',
            textMandatory: '*Required',
            buttonView: 'disabled',
            matchColor: '',
            form: {
                user_fullname: '',
                email: '',
                user_phone: '',
                password: '',
                passwordConfirm: ''
            }
        }
    },
    computed: {
        limitPassword() {
            if (this.form.password.length == 0) {
                return ''
            } else if (this.form.password.length < 8) {
                return '*The password you entered is less than 8 digits'

            } else {
                return ''
            }
        },
        checkData() {
            if (this.form.password.length == 0 && this.form.passwordConfirm.length == 0) {
                this.buttonView = 'disabled'
                return ''
            }
            else if (this.form.password.length > 0 && this.form.passwordConfirm.length == 0) {
                this.buttonView = 'disabled'
                return ''
            }
            else if (this.form.password === this.form.passwordConfirm) {
                this.buttonView = ''
                this.matchColor = 'success'
                return '-Password Match!'
            } else {
                this.matchColor = ''
                this.buttonView = 'disabled'
                return "*Password doesn't match"
            }
        }
    },
    methods: {
        async handleRegister(event) {
            await axios.post('api/register/create-user', this.form).then(
                (response) => {
                    console.log(response)
                    this.$router.push({ name: 'login_page' })
                })
        }
    }
}
</script>

<style lang="scss" scoped>
.main-container {
    width: 100%;
    max-width: 1280px;
    height: 100%;
    z-index: 10;
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

#scrollCentered {
    height: 100%;
    position: relative !important;
    display: flex;
    justify-content: center;
}

.centered img {
    width: 450px;
    border-radius: 50%;
}

.input-form-container {
    padding-top: 10px;
    padding-left: 15px;
    padding-right: 15px;
    width: 400px;
    height: 100%;
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

.input-form-alert {
    margin-top: 5px;
    margin-left: 10px;
    color: #9C254D;
    font-size: 10px;
    text-align: start;
}

#success {
    margin-top: 5px;
    margin-left: 10px;
    color: #3D8361;
    font-size: 10px;
    text-align: start;
}

.next-alert {
    margin-top: -15px !important;
}

.form-button {
    width: 100%;
    padding-top: 50px;
}

body::-webkit-scrollbar {
    width: 1em;
}

body::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

body::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    outline: 1px solid slategrey;
}
</style>