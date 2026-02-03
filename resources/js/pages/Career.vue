<template>
    <div class="min-h-screen bg-white">
        <!-- Navigation -->
        <Header />

        <!-- Careers Hero Section -->
        <section class="bg-white min-h-96">
            <div class="flex h-96">
                <!-- Left Content -->
                <div class="w-full lg:w-1/2 px-4 sm:px-10 flex items-center justify-start">
                    <div class="max-w-md">
                        <div class="px-12">
                            <h1 class="text-4xl text-right sm:text-4xl font-inter font-extrabold  text-black leading-tight">
                                Join us in
                            </h1>
                            <p class="text-4xl sm:text-6xl font-inter font-bold text-green-500 leading-tight">
                                MCBTSi!
                            </p>
                        </div>

                        <p class="text-gray-700 text-sm leading-relaxed px-12">
                            You can be part of our growing family
                        </p>
                    </div>
                </div>

                <!-- Right Image - Full Height, No Margins -->
                <div class="hidden lg:flex w-1/2">
                    <img :src="medtech" alt="Laboratory scientist" class="w-full h-full object-cover" />
                </div>
            </div>
        </section>

        <!-- Green Divider -->
        <div class="h-12 bg-green-500"></div>

        <!-- Careers Opportunities Section -->
        <section class="py-20 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <!-- Introduction -->
                <div class="mb-16 max-w-3xl">
                    <p class="text-gray-700 text-md leading-relaxed">
                        As we strive for a more efficient laboratory experience, we invite passionate professionals to join us in shaping the future of healthcare technology. Be part of our mission to streamline lab operations and empower health care efficiency.
                    </p>
                </div>

                <!-- Careers Heading -->
                <h2 class="text-3xl sm:text-4xl font-black text-black mb-12">
                    Here are the careers we offer:
                </h2>

                <!-- Career Positions - Bento Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- IT Specialist -->
                    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow border-t-4 border-blue-500 space-y-4">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl"></div>
                        <h3 class="text-xl sm:text-2xl font-black text-black">
                            IT Specialist
                        </h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Responsible for connecting laboratory instruments to the Laboratory Information System (LIS), ensuring seamless data flow and operational efficiency.
                        </p>
                        <button class="px-6 py-2 cursor-pointer bg-black text-white font-semibold text-sm hover:bg-green-500 hover:text-blac transition-all duration-300">
                            Apply now
                        </button>
                    </div>

                    <!-- Field Service Engineer -->
                    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow border-t-4 border-red-500 space-y-4">
                        <div class="w-16 h-16 bg-red-500 rounded-2xl"></div>
                        <h3 class="text-xl sm:text-2xl font-black text-black">
                            Field Service Engineer
                        </h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Provides on-site technical support, maintenance, and troubleshooting for laboratory instruments and equipment, ensuring optimal performance.
                        </p>
                        <button class="px-6 py-2 cursor-pointer bg-black text-white font-semibold text-sm hover:bg-green-500 transition-all duration-300">
                            Apply now
                        </button>
                    </div>

                    <!-- Service Coordinator -->
                    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow border-t-4 border-green-500 space-y-4">
                        <div class="w-16 h-16 bg-green-500 rounded-2xl"></div>
                        <h3 class="text-xl sm:text-2xl font-black text-black">
                            Service Coordinator
                        </h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Acts as a communication bridge between clients, engineers, and IT teams by managing service reports and ensuring timely resolution.
                        </p>
                        <button class="px-6 py-2 cursor-pointer bg-black text-white font-semibold text-sm hover:bg-green-500  transition-all duration-300">
                            Apply now
                        </button>
                    </div>
                </div>
            </div>
        </section>

    <Footer />
    </div>
    
</template>

<script setup lang="ts">

import medtech from '/resources/images/medtech.png'
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';

// If you have a lab-illustration image, import it here:
// import labImage from '@/resources/images/lab-illustration.svg'

// For now, using placeholder path - replace with actual image when available

</script>