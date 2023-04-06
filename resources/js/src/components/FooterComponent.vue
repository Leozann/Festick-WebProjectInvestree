<template>
    <div class="footer-section bg-cream">
        <div class="footer-header">
            <p>Copyright 2022 Festick . All Rights Reserved</p>
        </div>
        <div class="footer-container">
            <div class="footer-item">
                <a class="navbar-brand">Festick</a>
            </div>
            <div class="footer-item">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold" href="#">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ticket-menu">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold" href="#">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Refund Ticket</a>
                    </li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold" href="#">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms and Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="footer-item">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link disabled font-weight-bold" href="#">Follow Us</a>
                    </li>
                </ul>
                <div class="fu-icon">
                    <img class="fu-item" src="assets/img/follow-us/ig-icon.png" alt="">
                    <img class="fu-item" src="assets/img/follow-us/twt-icon.png" alt="">
                    <img class="fu-item" src="assets/img/follow-us/in-icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'footer-component'
}
</script>

<style lang="scss" scoped>
.footer-section {
    margin-top: 25px;
    width: 100%;
    height: 225px;
}

.footer-container {
    padding-top: 30px;
    display: flex;
    justify-content: space-around;
}

.footer-header {
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 15px;
    border-bottom: 2px solid rgba(251, 251, 251, 1);
}

.footer-header p {
    font-size: 14px;
    font-family: Rubik !important;
    letter-spacing: 3px;
}

li {
    list-style: none;
}

.font-weight-bold {
    font-weight: bold !important;
}

.navbar-brand {
    font-family: Rubik;
    font-size: 32px;
}

.fu-icon {
    padding-left: 20px;
    display: flex;
    width: 150px;
    max-height: 55px;
}

.fu-item {
    width: 25px;
    height: 25px;
    margin-left: 10px;
}
</style>