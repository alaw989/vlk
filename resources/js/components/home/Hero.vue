<template>
    <div class="w-full flex justify-center h-dvh items-center absolute z-0 top-0">
        <video class="w-full h-full object-cover" autoplay muted loop>
            <source :src="videoUrl" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex flex-col absolute z-10 items-center">
            <h1 class="text-[48px] text-white  text-center font-bold">Welcome to VibeLinkCreate!</h1>
            <p class="mb-[50px] w-full max-w-[600px] text-center text-white">Hey there, fellow creatives! Ready to dive
                into a world where imagination knows no bounds? Welcome to VibeLinkCreate, your ultimate destination for
                all things creative and captivating! #VibesForCreatives</p>
            <div class="flex justify-center">
                <ul class="flex justify-between w-full">
                    <li class="py-8 px-6 text-white bg-[#3eb488] text-center rounded-md max-w-[400px] mx-2">
                        <h3 class="font-bold">AND HERE?</h3>
                        <p class="mt-4">and here here here here here here here here here here here here here here here
                            here here here here here here here here here here here here here here here here here here
                            here here here</p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Access</button>
                    </li>
                    <li class="py-8 px-6 text-white bg-[#3eb488] text-center rounded-md max-w-[400px] mx-2">
                        <h3 class="font-bold">AND HERE?</h3>
                        <p class="mt-4">and here here here here here here here here here here here here here here here
                            here here here here here here here here here here here here here here here here here here
                            here here here</p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Access</button>
                    </li>
                    <li class="py-8 px-6 text-white bg-[#3eb488] text-center rounded-md max-w-[400px] mx-2">
                        <h3 class="font-bold">AND HERE?</h3>
                        <p class="mt-4">and here here here here here here here here here here here here here here here
                            here here here here here here here here here here here here here here here here here here
                            here here here</p>
                        <button class="border-2 px-4 py-2 mt-6 rounded-full">Access</button>
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
