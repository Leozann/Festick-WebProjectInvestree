<template>
    <div>
        <carousel-component></carousel-component>
        <div class="container-body">
            <card-weekly-component></card-weekly-component>
            <card-event-component></card-event-component>
            <banner-component></banner-component>
            <help-tool-component></help-tool-component>
        </div>
    </div>
</template>

<script>
import CarouselComponent from '../components/CarouselComponent.vue';
import CardWeeklyComponent from '../components/TWEComponent.vue';
import CardEventComponent from '../components/UEComponent.vue'
import BannerComponent from '../components/BannerComponent.vue'
import HelpToolComponent from '../components/HelpToolComponent.vue'
export default {
    components: { CarouselComponent, CardWeeklyComponent, CardEventComponent, BannerComponent, HelpToolComponent }
}
</script>

<style lang="scss" scoped>
.container-body {
    width: 100%;
    height: 100%;
    padding: 50px;
    overflow: hidden;
}
</style>