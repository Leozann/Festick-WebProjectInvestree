<template>
    <div class="banner-section">
        <p class="heading01 text-center">See All</p>
        <div class="banner-container">
            <img class="banner-img" src="assets/festick-banner.png" alt="">
        </div>
    </div>
</template>

<script>
export default {
    name: 'banner-component'
}
</script>

<style lang="scss" scoped>
.banner-section {
    margin-top: 25px;
    padding-bottom: 75px;
}

.banner-container {
    margin-top: 75px;
    height: 100%;
    height: 450px;
    overflow: hidden;
}

.banner-img {
    object-fit: cover;
    height: 100%;
    width: 100%;
}
</style>