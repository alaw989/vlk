<template>
    <div class="w-full flex justify-center h-dvh items-center absolute z-0 top-0">
        <video class="w-full h-full object-cover" autoplay muted loop>
            <source :src="videoUrl" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex flex-col absolute z-10 items-center">
            <h1 class="text-[48px] text-white  mb-8  text-center font-bold mt-[205px]">Welcome to VibeLinKraft!</h1>
            <p class="mb-[50px] w-full max-w-[600px] text-center text-white hidden lg:block"> Welcome to our bustling Post Production House, where projects of all sizes—from indie gems to blockbuster hits—come to life in vibrant detail. Join us in the heart of creativity, where every idea has the potential to transform into cinematic brilliance. Need social media edits or captivating commercials? We've got you covered. </p>
            <div class="flex justify-center">
                <ul class="flex flex-col justify-between items-center w-full lg:flex-row">
                    <li class="mb-6 py-6 xl:py-8 px-6 text-white bg-[#3eb488] text-center rounded-md w-[95%] max-w-[550px] xl:w-[400px] mx-2">
                        <h3 class="font-bold">VIBE</h3>
                        <p class="mt-4"> Discover the advantages of membership in our thriving coworking community, where collaboration fuels innovation and opportunities abound. Whether you're seeking a dedicated workspace or a day pass, we offer flexible options tailored to your needs.  </p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Learn More</button>
                    </li>
                    <li class="mb-6 py-6 xl:py-8 px-6 text-white bg-[#3eb488] text-center rounded-md w-[95%] max-w-[550px] xl:w-[400px] mx-2">
                        <h3 class="font-bold">Link</h3>
                        <p class="mt-4">Discover the advantages of membership in our thriving coworking community, where collaboration fuels innovation and opportunities abound. Whether you're seeking a dedicated workspace or a day pass, we offer flexible options tailored to your needs.
                        </p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Learn More</button>
                    </li>
                    <li class="mb-8 py-6 xl:py-8 px-6 text-white bg-[#3eb488] text-center rounded-md w-[95%] max-w-[550px] xl:w-[400px] mx-2">
                        <h3 class="font-bold">KRAFT</h3>
                        <p class="mt-4">Elevate your skills with our comprehensive suite of services, including networking events, educational classes, self-taping auditions, photo studio and editing bay rentals, the ultimate Pre-production HQ, and social media edits and commercials.
                        </p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Learn More</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Hero",
    data() {
        return {
            videoUrl: '/videos/home.mp4'
        }
    }
}
</script>

<style scoped>

</style>
