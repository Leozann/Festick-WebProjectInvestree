<template>
    <div>
        <div class="container-body">
            <ticket-best-component></ticket-best-component>
            <ticket-all-component></ticket-all-component>
        </div>
    </div>
</template>

<script>
import TicketBestComponent from '../components/TicketBestComponent.vue';
import TicketAllComponent from '../components/TicketAllComponent.vue';
export default {
    components: { TicketBestComponent, TicketAllComponent }
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