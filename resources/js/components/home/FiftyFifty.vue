<template>
    <ul>
        <li class="w-full flex justify-center mb-[6rem]">
            <ul class="flex flex-col lg:flex-row justify-center w-full max-w-[75%]">
                <li class="w-full lg:w-[1-2]">
                    <img :src="imageUrl" alt="Value Image" class="w-full rounded-md h-auto lg:w-[600px]">
                </li>
                <li class="w-[20px]"></li>
                <li class="w-full lg:w-[1/2] flex flex-col p-0 lg:pl-20">
                    <div class="lg:px-5 flex flex-col h-full justify-center">
                        <h1 class="text-2xl font-bold mb-4">Success is the space you work in</h1>
                        <p class="text-lg">Thoroughly professional and thoughtfully designed, our flexible
                            workplaces support teams of all sizes and stages — from startups to Fortune 500s. And
                            thanks to our flexible terms, it's easy to adapt your space as your business
                            evolves.</p>
                        <button
                            class="border-2 px-4 py-2 mt-6 rounded-full max-w-[200px] border-[#3eb488] text-[#3eb488] font-bold">
                            See Workspaces
                        </button>
                    </div>
                </li>
            </ul>
        </li>

        <li class="w-full flex justify-center mb-[6rem]">
            <ul class="flex flex-col lg:flex-row-reverse justify-center w-full max-w-[75%]">
                <li class="w-full lg:w-[1-2]">
                    <img :src="imageUrl" alt="Value Image" class="w-full rounded-md h-auto lg:w-[600px]">
                </li>
                <li class="w-[20px]"></li>
                <li class="w-full lg:w-[1/2] flex flex-col p-0 lg:pl-20">
                    <div class="flex flex-col h-full justify-center">
                        <h1 class="text-2xl font-bold mb-4">Success is the space you work in</h1>
                        <p class="text-lg">Thoroughly professional and thoughtfully designed, our flexible
                            workplaces support teams of all sizes and stages — from startups to Fortune 500s. And
                            thanks to our flexible terms, it's easy to adapt your space as your business
                            evolves.</p>
                        <button
                            class="border-2 px-4 py-2 mt-6 rounded-full max-w-[200px] border-[#3eb488] text-[#3eb488] font-bold">
                            See Workspaces
                        </button>
                    </div>
                </li>
            </ul>
        </li>

        <li class="w-full flex justify-center mb-[6rem]">
            <ul class="flex flex-col lg:flex-row justify-center w-full max-w-[75%]">
                <li class="w-full lg:w-[1-2]">
                    <img :src="imageUrl" alt="Value Image" class="w-full rounded-md h-auto lg:w-[600px]">
                </li>
                <li class="w-[20px]"></li>
                <li class="w-full lg:w-[1/2] flex flex-col p-0 lg:pl-20">
                    <div class="lg:px-5 flex flex-col h-full justify-center">
                        <h1 class="text-2xl font-bold mb-4">Success is the space you work in</h1>
                        <p class="text-lg">Thoroughly professional and thoughtfully designed, our flexible
                            workplaces support teams of all sizes and stages — from startups to Fortune 500s. And
                            thanks to our flexible terms, it's easy to adapt your space as your business
                            evolves.</p>
                        <button
                            class="border-2 px-4 py-2 mt-6 rounded-full max-w-[200px] border-[#3eb488] text-[#3eb488] font-bold">
                            See Workspaces
                        </button>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</template>

<script>
export default {
    name: "FiftyFifty",
    data() {
        return {
            imageUrl: '/images/office-1.jpg'
        }
    }
}
</script>

<style scoped>
/* Add any additional styling you need */
</style>
