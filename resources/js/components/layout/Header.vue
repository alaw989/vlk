<template>
    <header class="flex justify-center py-4 z-1 z-10 relative"
            :style="{ backgroundColor: hover ? '#fff' : 'transparent' }" @mouseover="hover = true"
            @mouseleave="hover = false">
        <div class="w-full max-w-[75%]">
            <div class="flex items-center justify-between h-full px-5 sm:px-10 max-w-">
                <div class="w-1/4">
                    <a href="">
                        <img class="hidden xl:block max-w-[250px] cursor-pointer" :src="imageUrl" alt="Example Image">
                    </a>
                </div>
                <ul class="w-3/4 flex justify-end list-none">
                    <li class="text-white cursor-pointer" v-for="(page, pageIndex) in pages" :key="pageIndex">
                        <a   :class="hover ? 'text-black' : 'text-white'"
                           class="hidden xl:flex mx-2 2xl:mx-4" @click="handlePageClick(page.name)">
                            {{ page.name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script>
import axios from "axios";

export default {
    name: "Header.vue",
    data() {
        return {
            pages: [],
            imageUrl: '/images/vibelinkraft.png',
            hover: false
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
        handlePageClick(pageName) {
            // Do something with the page name, for example:
            console.log('Clicked page:', pageName);
            this.$emit('emitPageName', pageName);
        }
    }
}
</script>

<style scoped>
/* Add any additional styling you need */
</style>
