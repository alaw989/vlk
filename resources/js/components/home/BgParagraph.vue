<template>
    <div class="parallax-container relative">
        <!-- Dark overlay -->
        <div class="dark-overlay absolute inset-0"></div>
        <!-- Background image -->
        <div class="parallax-background absolute"></div>
        <!-- Content -->
        <div class="content-container absolute w-full">
            <div class="w-full flex justify-center absolute">
                <div class="flex justify-center flex-col items-center text-center w-full max-w-[75%]">
                    <h1 class="text-4xl text-white font-bold mb-4">Our Mission</h1>
                    <p class="text-white text-center max-w-[800px]">Here at VibeLinkCreate, our mission is simple yet powerful: to empower
                        creatives like you to unleash your full potential. We believe in fostering a supportive,
                        inclusive community where everyone feels welcome to explore, experiment, and express themselves
                        freely. Together, let's spark creativity, forge connections, and make magic happen!</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BgParagraph",
}
</script>

<style scoped>
.parallax-container {
    height: 500px; /* Adjust height as needed */
    position: relative;
    overflow: hidden;
}

.dark-overlay {
    background-color: rgba(0, 0, 0, 0.5); /* Adjust alpha value for darkness */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9;
}

.parallax-background {
    /*background-image: url('/images/bg.jpg');*/
    min-height: 500px;
    width: 100%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 8;
}

.content-container {
    position: relative;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%; /* Ensure content container covers the entire parallax container */
}
</style>
