<template lang="">
    <div class="carousel-section">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true" data-ride="carousel"
                data-interval="5000">
                <div class="carousel-nav">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                </div>
                <div class="carousel-overlay"></div>
                <div class="carousel-inner">
                    <div class="carouser-overlay"></div>
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Your Music, Your Vibes!</h5>
                            <p class="text-white">Create Unforgettable Moments with Lively Concerts</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1583795484071-3c453e3a7c71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Enjoy The Vibes!</h5>
                            <p class="text-white">Grab Our Best Deal Tickets</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">Easy Pay, Easy Fun!</h5>
                            <p class="text-white">Enjoy Your Dream Concerts Here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name: 'carousel-component'
}
</script>

<style lang="scss" scoped>
.carousel-section {
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.carousel-inner {
    position: relative;
}

.carousel-overlay {
    position: absolute;
    background-color: #030303;
    opacity: .4;
    width: 100%;
    height: 400px;
    z-index: 1;
    filter: blur(5px);
    -webkit-filter: blur(5px);
}

.carousel-indicators-active {
    background-color: #000;
    opacity: .7 !important;
}

.carousel-item img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.carousel-caption {
    z-index: 2;
}
</style>
