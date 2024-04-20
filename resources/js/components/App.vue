<template>
    <div class="relative h-dvh">
        <Header/>
        <Hero/>
    </div>
    <div class="relative">
        <FiftyFifty/>
    </div>
</template>

<script>

import Header from "./layout/Header.vue";
import Hero from "./home/Hero.vue";
import FiftyFifty from "./home/FiftyFifty.vue";

export default {
    components: {
        Header,
        Hero,
        FiftyFifty
    }
}

</script>

<style scoped>

</style>
