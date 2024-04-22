<template>
    <div class="w-full flex justify-center">
        <div class="w-full max-w-[75%]">
            <div class="flex justify-center flex-col items-center text-center mb-6">
                <h1 class="text-4xl font-bold mb-4">Ready To Make Some Waves?</h1>
                <p class="max-w-[800px] text-center">Here at VibeLinkCreate, our mission is simple yet powerful: to
                    empower
                    creatives like you to unleash your full potential. We believe in fostering a supportive,
                    inclusive community where everyone feels welcome to explore, experiment, and express themselves
                    freely. Together, let's spark creativity, forge connections, and make magic happen!</p>
            </div>
            <div class="flex justify-center flex-col items-center relative">
                <div class="flex">
                    <ul class="text-left flex flex-col justify-center w-[25%]">
                        <li class="cursor-pointer">See Pricing</li>
                        <li class="cursor-pointer">Book a Session</li>
                        <li class="cursor-pointer">Sign Up For Classes</li>
                        <li class="cursor-pointer">Contact Us</li>
                    </ul>
                    <div class="flex pr-[150px]">
                        <img :src="imageUrl" alt="">
                    </div>
                </div>

                <div class="flex absolute top-[225px] right-[300px]">
                    <div class="box bg-white absolute w-[300px] h-[200px] shadow-md">
                        See Pricing
                    </div>
                    <div class="box bg-white absolute w-[300px] h-[200px] shadow-md">
                        Book a Session
                    </div>
                    <div class="box bg-white absolute w-[300px] h-[200px] shadow-md">
                        Sign Up for Classes
                    </div>
                    <div class="box bg-white absolute w-[300px] h-[200px] shadow-md">
                        Contact Us
                    </div>
                </div>

            </div>
        </div>


    </div>

</template>

<script>
import axios from "axios";

export default {
    name: "InfoSquares",
    props: ['home'],
    data() {
        return {
            imageUrl: '/images/office-1.jpg'
        }
    },
    mounted() {
        console.log(this.home)
    }
}
</script>

<style scoped>
.box {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    /* Adjust the values above to customize the shadow */
}
</style>
