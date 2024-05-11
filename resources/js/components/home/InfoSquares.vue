<template>
    <div class="w-full flex justify-center">
        <div class="w-full max-w-[75%]">
            <!-- Your existing content -->
            <div class="flex justify-center flex-col items-center relative">
                <div class="flex flex-col lg:flex-row">
                    <!-- List of items -->
                    <ul class="text-center flex-wrap lg:flex-nowrap lg:text-left flex flex-row lg:flex-col justify-around lg:justify-center lg:w-[25%] ">
                        <li class="cursor-pointer mb-6 uppercase text-[#3eb488] font-bold tracking-wide"
                            v-for="(home, index) in home.info_squares" :key="index"
                            @click="showDiv(index)">
                            {{ home.item }}
                        </li>
                    </ul>
                    <div class="flex lg:pr-[150px] w-full lg:w-[95%]">
                        <img :src="imageUrl" alt="">
                    </div>
                </div>

                <!-- Divs to be shown based on selection -->
                <div
                    class="flex w-full justify-center mt-[-25px] lg:absolute lg:bottom-[30px] lg:top-[150px] lg:right-[-250px] ">
                    <div v-for="(home, index) in home.info_squares" :key="index" v-show="selectedHomeIndex === index"
                         class="box lg:w-[500px] bg-white lg:absolute w-[95%] lg:w-[200px] shadow-md p-10 flex flex-col justify-center">
                        <div class="text-2xl font-bold pb-4">
                            {{ home.item }}
                        </div>
                        <div class="text-md lg:text-lg">
                            {{ home.text }}
                        </div>
                        <div>
                            <button class="text-white text-md lg:text-lg px-4 py-2 mt-6 rounded-full bg-[#3eb488]">Learn
                                More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "InfoSquares",
    props: {
        home: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            images: [
                '/images/office-1.jpg',
                '/images/bg.jpg',
                '/images/office-1.jpg',
                '/images/bg.jpg',
                '/images/office-1.jpg',
                '/images/bg.jpg',
            ],
            selectedHomeIndex: 0 // To keep track of the selected index
        }
    },
    mounted() {

    },
    computed: {
        imageUrl() {
            return this.images[this.selectedHomeIndex];
        }
    },
    methods: {
        showDiv(index) {
            this.selectedHomeIndex = index; // Update the selected index
        }
    }
}
</script>

<style scoped>
.box {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    /* Adjust the values above to customize the shadow */
}
</style>
