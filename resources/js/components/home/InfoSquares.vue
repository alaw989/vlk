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
            <div class="flex justify-center flex-col items-center">
                <ul class="text-left">
                    <li>See Pricing</li>
                    <li>Book a Session</li>
                    <li>Sign Up For Classes</li>
                    <li>Contact Us</li>
                </ul>
                <div>
                    <img :src="imffffageUrl" alt="">
                </div>

            </div>
        </div>


    </div>

</template>

<script>
export default {
    name: "InfoSquares",
    data() {
        return {
            imageUrl: '/images/office-1.jpg'
        }
    }
}
</script>

<style scoped>

</style>
