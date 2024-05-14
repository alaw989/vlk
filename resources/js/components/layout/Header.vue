<template>
    <header class="flex justify-center py-4 z-1 z-10 relative"
            :style="{ backgroundColor: hover && $route.path === '/' ? '#fff' : handleHeaderColor() }" @mouseover="hover = true"
            @mouseleave="hover = false">
            <div class="w-full max-w-[75%]">
                <div class="flex items-center justify-between h-full px-5 sm:px-10 max-w-">
                    <div class="w-1/4">
                        <!-- Use router-link instead of anchor tag -->
                        <router-link :to="{ name: 'home' }">
                            <img class="hidden xl:block max-w-[250px] cursor-pointer" :src="imageUrl"
                                 alt="Example Image">
                        </router-link>
                    </div>
                    <ul class="w-3/4 flex justify-end list-none">
                        <li class="text-white cursor-pointer" v-for="(page, pageIndex) in pages" :key="pageIndex">
                            <!-- Use router-link instead of anchor tag -->
                            <router-link :to="{ name: 'page', params: { slug: page.slug } }"
                                         :class="hover && $route.path === '/' ? 'text-black' : 'text-white'"
                                         class="hidden xl:flex mx-2 2xl:mx-4">
                                {{ page.name }}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
</template>

<script>
import axios from "axios";

export default {
    name: "Header",
    data() {
        return {
            pages: [],
            imageUrl: this.$route.path === '/' ? '/images/vibelinkraft.png' : '/images/logo-white.png',
            hover: false,
            headerColor: ''
        }
    },
    mounted() {
        axios.get('/pages')
            .then(response => {
                this.pages = response.data
            })
            .catch(error => {
                console.error('Error ', error);
            });
    },
    methods: {
        handleHeaderColor() {
           return  this.$route.path === '/' ? 'transparent' : '#25375E'
        }
    }
}
</script>

<style scoped>
/* Add any additional styling you need */
</style>
