<template>
    <div v-if="onHomePage">
        <div class="relative h-dvh">
            <Header @emitPageName="handlePageClick" />
            <Hero/>
        </div>
        <div class="relative my-[6rem]">
            <FiftyFifty/>
        </div>
        <div class="relative my-[6rem]">
            <BgParagraph/>
        </div>
        <div class="relative my-[6rem]">
            <InfoSquares :home="home"/>
        </div>
        <div class="relative mt-[6rem] ">
            <Footer :pages="pages"/>
        </div>
    </div>
    <div v-if="!onHomePage">
        <Internal></Internal>
    </div>

</template>

<script>

import Header from "./layout/Header.vue";
import Hero from "./home/Hero.vue";
import FiftyFifty from "./home/FiftyFifty.vue";
import BgParagraph from "./home/BgParagraph.vue";
import InfoSquares from "./home/InfoSquares.vue";
import Footer from "./layout/Footer.vue";
import axios from "axios";
import Internal from "./Internal.vue";

export default {
    components: {
        InfoSquares,
        BgParagraph,
        Header,
        Hero,
        FiftyFifty,
        Footer,
        Internal
    },
    data() {
        return {
            home: '',
            pages: '',
            onHomePage: true
        }
    },
    mounted() {
        axios.get('/pages')
            .then(response => {
                this.pages = response.data;

                // Find the page with slug '/'
                const homepage = this.pages.find(page => page.slug === '/');

                if (homepage) {
                    this.home = homepage
                }
            })
            .catch(error => {
                console.error('Error ', error);
            });
    },
    methods: {
        handlePageClick(pageName) {
            console.log('received', pageName)
            this.onHomePage = false;

        }
    }
}

</script>

<style scoped>

</style>
