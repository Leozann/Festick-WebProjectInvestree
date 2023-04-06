<template>
    <div class="main-container">
        <div class="about-festick mb-5 mx-auto d-block" >
            <div class="row">
                <div class="col me-5">
                    <h1>Festick</h1>
                    <h4>Your Euphoria Partner</h4>
                    <p style="text-align: justify;">Festick is a platform that has superior technology Ticketing Management Service (TMS) in supporting music event connoisseurs starting from ticket distribution & management.
                        Some of the technologies that we provide are ready to facilitate event organizers in every stage of preparation which include:
                        <ul>
                            <li>The most complete ticket distributor that has worked with Festick to sell your tickets.</li>
                            <li>Diverse and secure payment systems make it easy for potential buyers to get higher conversions.</li>
                            <li>The safest and most convenient gate management for access during the event. Thus, events with a large number of spectators can be handled easily.</li>
                            <li>A complete and comprehensive data analysis system after the event takes place to make it easier for event organizers to determine the next event strategy.</li>
                        </ul>
                        There have been hundreds of events that we have collaborated with and all of them are spread throughout Indonesia. Now, it's time for you to join the event with us!</p>
                    <a href="/ticket-menu" type="button" class="btn btn-success">Find Ticket</a>
                </div>
                <div class="col my-auto mx-auto">
                    <iframe width="500" height="280" src="https://www.youtube.com/embed/fGHl_YIf4qM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col p-3">
                    <img src="assets/img/ticket.png" alt="ticket" class="rounded mx-auto d-block" style="width: 300px;">
                </div>
                <div class="col my-auto">
                    <h2 style="text-align: center; margin-bottom: 5%;">OUR VISION</h2>
                    <p style="text-align: center;">When you require music concerts wherever, Festick is committed to becoming your reliable partner. Spend little money to create memorable experiences. At every event we work on, we highlight the #FestickGoGreen campaign to all audiences in an effort to increase awareness of global warming.</p>
                </div>
            </div>
        </div>
        <div class="our-team mt-5">
            <h2 style="text-align: center;" class="pt-5">OUR TEAM</h2>
            <div class="row mb-5" style="margin: 30px">
                <div class="col">
                    <div class="card" style="width: 17rem; margin: 30px;">
                        <div class="card-thumbnail" style="background-image: url('assets/img/team/adzano.jpeg'); border-radius: 10px;"></div>
                        <div class="card-body" style="text-align: center;">
                          <h5 class="card-title">Adzano Barraz</h5>
                          <p class="card-text">BEST <br>Fullstack Engineer</p>
                          <h5>
                            <a href="https://www.linkedin.com/in/leozann360"><img class="fu-item" src="assets/img/follow-us/in-icon.png" alt="socmed"></a>
                            <a href="https://www.instagram.com/leoo.zann/"><img class="fu-item" src="assets/img/follow-us/ig-icon.png" alt="socmed"></a>
                          </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 17rem; margin: 30px;">
                        <div class="card-thumbnail" style="background-image: url('assets/img/team/syakira.jpeg'); border-radius: 5px;"></div>
                        <div class="card-body" style="text-align: center;">
                          <h5 class="card-title">Syakira Rahma</h5>
                          <p class="card-text">BEST <br>Fullstack Engineer</p>
                          <h5>
                            <a href="https://www.linkedin.com/in/syakira-rahma-fauziyah"><img class="fu-item" src="assets/img/follow-us/in-icon.png" alt="socmed"></a>
                            <a href="https://www.instagram.com/syakiraarf/"><img class="fu-item" src="assets/img/follow-us/ig-icon.png" alt="socmed"></a>
                          </h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 17rem; margin: 30px;">
                        <div class="card-thumbnail" style="background-image: url('assets/img/team/faiz.png'); border-radius: 5px;"></div>
                        <div class="card-body" style="text-align: center;">
                          <h5 class="card-title">Faiz Bilhaqq</h5>
                          <p class="card-text">BEST <br>Fullstack Engineer</p>
                          <h5>
                            <a href="https://www.linkedin.com/in/faizbilhaqq"><img class="fu-item" src="assets/img/follow-us/in-icon.png" alt="socmed"></a>
                            <a href="https://www.instagram.com/faizbilhaqq/"><img class="fu-item" src="assets/img/follow-us/ig-icon.png" alt="socmed"></a>
                          </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <h2 style="text-align: center;">OUR PARTNERS</h2>
                <img class="mt-5 mx-auto d-block" src="assets/img/partner.png" style="width:80%" alt="our partner">
            </div>
        </div>
    </div>
</template>

<script>
</script>

<style lang="scss" scoped>

.main-container {
    width: 100%;
    height: 100%;
    padding-bottom: 10%;
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 5%;
    overflow: hidden;
    font-family: Rubik;
}

.about-festick .row img:hover{
    -webkit-transform: translate(0px, -5px);
    -ms-transform: translate(0px, -5px);
    transform: translate(0px, -5px);
}
.card{
    background: linear-gradient(to right, #D6CDA4, #EEF2E6);
}
.card-thumbnail{
  height: 250px;
  background-size: cover;
  background-position: 0px 0px;
}
.card:hover {
  box-shadow: 0 15px 35px 0 rgba(28, 103, 88, 0.15);
  -webkit-transform: translate(0px, -2px);
  -ms-transform: translate(0px, -2px);
  transform: translate(0px, -2px);
}

.fu-item {
    width: 30px;
    height: 30px;
}

</style>