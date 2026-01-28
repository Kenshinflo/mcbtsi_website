<template>
    <div class="min-h-screen bg-white">
        <!-- Navigation -->
        <Header />

        <!-- Hero Section -->
        <section class="py-12 px-4 sm:px-10 bg-white">
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
                        <img :src="medtech" alt="Laboratory workers" class="max-w-full h-auto w-full" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Green Divider -->
        <div class="h-14 bg-green-500 flex items-center justify-center">
            <p class="font-bold text-3xl text-white">
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
                        <div class=" bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                            <img :src="image1" alt="Company info" class="max-w-md rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bento Grid Section -->
        <section class="py-20 px-4 sm:px-10 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-black text-black mb-4">
                        Our Focus Areas
                    </h2>
                    <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                        We excel in multiple areas of laboratory enhancement and innovation
                    </p>
                </div>

                <!-- Bento Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Item 1 - Large -->
                    <div class="md:col-span-2 bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-black mb-2">Laboratory Information System</h3>
                        <p class="text-gray-600 text-sm">Advanced LIS solutions to streamline laboratory operations and enhance data management.</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-black mb-2">Equipment</h3>
                        <p class="text-gray-600 text-sm">State-of-the-art laboratory machinery and equipment.</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-black mb-2">Support</h3>
                        <p class="text-gray-600 text-sm">24/7 technical support for all our solutions.</p>
                    </div>

                    <!-- Item 4 - Large -->
                    <div class="md:col-span-2 bg-white rounded-2xl p-8 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-black mb-2">Consulting & Implementation</h3>
                        <p class="text-gray-600 text-sm">Expert consulting services to help implement and optimize our solutions for your laboratory needs.</p>
                    </div>

                    <!-- Item 5 -->
                    <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-black mb-2">Training</h3>
                        <p class="text-gray-600 text-sm">Comprehensive training programs for your team.</p>
                    </div>

                    <!-- Item 6 -->
                    <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-black mb-2">Innovation</h3>
                        <p class="text-gray-600 text-sm">Continuous innovation in laboratory solutions.</p>
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
import medtech from '/resources/images/medtech.png'
import { Link } from '@inertiajs/vue3'
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
// If you have a lab-illustration image, import it here:
// import labImage from '@/resources/images/lab-illustration.svg'

// For now, using placeholder path - replace with actual image when available

</script>