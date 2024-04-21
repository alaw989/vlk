<template>
    <div class="relative h-dvh">
        <Header/>
        <Hero/>
    </div>
    <div class="relative my-[6rem]">
        <FiftyFifty/>
    </div>
    <div class="relative my-[6rem]">
        <BgParagraph />
    </div>
      <div class="relative my-[6rem]">
          <InfoSquares />
      </div>
</template>

<script>

import Header from "./layout/Header.vue";
import Hero from "./home/Hero.vue";
import FiftyFifty from "./home/FiftyFifty.vue";
import BgParagraph from "./home/BgParagraph.vue";
import InfoSquares from "./home/InfoSquares.vue";

export default {
    components: {
        InfoSquares,
        BgParagraph,
        Header,
        Hero,
        FiftyFifty
    }
}

</script>

<style scoped>

</style>
