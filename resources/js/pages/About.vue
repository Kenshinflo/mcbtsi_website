<template>
    <div class="min-h-screen bg-white">
        <!-- Navigation -->
        <Header />

        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <!-- Welcome Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-0">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <div>
                            <h1 class="-mb-6 text-5xl sm:text-3xl font-black text-black leading-tight -tracking-wide">
                                Welcome to
                            </h1>
                            <p class="text-4xl sm:text-6xl font-black text-green-500 leading-relaxed ">
                                MC Biotechnical
                            </p>
                            <p class="text-4xl sm:text-6xl font-black text-green-500 leading-relaxed -mt-9">
                                Solutions Inc.
                            </p>
                        </div>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lorem Ipsum
                        </p>
                    </div>

                    <!-- Right Image -->
                    <div class="flex justify-center items-center">
                        <img :src="image1" alt="Laboratory workers" class="max-w-full h-auto w-full" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Green Divider -->
        <div class="h-14 bg-green-500">
            <p class="mx-auto text-center  font-bold text-3xl">
                Providing Services Beyond Expectations
            </p>
        </div>

        <!-- What About Us Section -->
        <section class="py-20 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Content with Green Border -->
                    <div class="border-l-8 border-green-500 pl-8 space-y-6">
                        <h2 class="text-4xl sm:text-5xl font-black text-black">
                            What About Us?
                        </h2>

                        <div class="space-y-4 text-gray-700 text-sm leading-relaxed">
                            <p>
                                <strong>MC Biotechnical Solutions</strong>, or most commonly known as <strong>MCBTSi</strong> is a dynamic engineering company founded on March 22, 2022, emerging from a dedicated team of four individuals at Zafire Distributors Inc. during its NCR operation in 2003.
                            </p>

                            <p>
                                With a workforce that has since expanded to 38 personnel in 2022, and fueled by the continuous expansion of Zafire's business, we took the initiative to establish our independent entity. With the company's tag line, "Providing Services Beyond Expectations", we are poised for continual growth and embrace emerging opportunities in our pursuit of excellence.
                            </p>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="flex justify-center items-center">
                        <div class="w-full bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                            <img :src="image1" alt="Company info" class="max-w-full h-auto w-full rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
            


    <Footer />
    </div>
    
</template>

<script setup lang="ts">
import logoImage from '/resources/images/logo.png'
import image1 from '/resources/images/image1.png'
import { Link } from '@inertiajs/vue3'
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
// If you have a lab-illustration image, import it here:
// import labImage from '@/resources/images/lab-illustration.svg'

// For now, using placeholder path - replace with actual image when available

</script>