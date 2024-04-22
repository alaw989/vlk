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
          <InfoSquares :homepage="home" />
      </div>
</template>

<script>

import Header from "./layout/Header.vue";
import Hero from "./home/Hero.vue";
import FiftyFifty from "./home/FiftyFifty.vue";
import BgParagraph from "./home/BgParagraph.vue";
import InfoSquares from "./home/InfoSquares.vue";
import axios from "axios";

export default {
    components: {
        InfoSquares,
        BgParagraph,
        Header,
        Hero,
        FiftyFifty
    },
    data() {
        return {
            home : ''
        }
    },
    mounted() {
        axios.get('/pages')
            .then(response => {
                this.pages = response.data;
                console.log(this.pages);

                // Find the page with slug '/'
                const homepage = this.pages.find(page => page.slug === '/');
                if (homepage) {
                    this.home = homepage
                    console.log("Homepage found:", homepage);
                } else {
                    console.log("Homepage not found");
                }
            })
            .catch(error => {
                console.error('Error ', error);
            });
    },


}

</script>

<style scoped>

</style>
