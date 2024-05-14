<template>
    <div>
        <!-- Use Vue Router's $route to access current route -->
        <div v-if="isHomePage($route.path)">
            <!-- Components for the home page -->
            <div class="relative h-dvh">
                <Header @emitPageName="handlePageClick"/>
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

        <div v-else>
            <!-- Component for internal pages -->
            <div class="relative h-[75vh]">
                <Header/>
                <InternalHero/>
            </div>
            <div class="relative mt-[6rem] ">
                <Footer :pages="pages"/>
            </div>
        </div>
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
import InternalHero from "./InternalHero.vue";

export default {
    components: {
        InfoSquares,
        BgParagraph,
        Header,
        Hero,
        FiftyFifty,
        Footer,
        InternalHero
    },
    data() {
        return {
            home: '',
            pages: '',
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
            // Optionally, you can add logic here to handle page navigation
        },
        isHomePage(path) {
            // Check if the current route is the home page
            return path === '/';
        }
    }
}
</script>

<style scoped>
/* Add any additional styling you need */
</style>
