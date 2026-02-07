<template>
    <div class="min-h-screen bg-white">
        <!-- Navigation -->
        <Header />

        <!-- Hero Section -->
        <section class="py-12 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <!-- Welcome Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-0">
                  
                    <div class="space-y-6">
                        <div>
                            <p class="text-4xl sm:text-6xl font-inter font-bold text-black leading-relaxed tracking-tight">
                                Smart Services. 
                            </p>
                            <p class="text-4xl sm:text-6xl font-inter font-semibold text-green-500 leading-relaxed -mt-9 tracking-tight">
                                Seamless Results.
                            </p>
                        </div>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            At MC Biotechnical, we deliver smart solutions backed by a team that goes beyond expectations. 
                            From field engineers and IT specialists to our dedicated office staff, 
                            we ensure seamless operations and responsive service. With 24-hour support, we keep your workforce uninterrupted—because your uptime
                             is our priority, and your trust is our commitment.
                        </p>
                    </div>

                    
                    <div class="flex justify-center items-center">
                        <img :src="medtech" alt="Laboratory workers" class="max-w-full h-auto w-full" />
                    </div>
                </div>
                

                <!-- Right Image - Full Height, No Margins -->
                
            </div>
        </section>

        <!-- Green Divider -->
        <!-- <div class="h-14 bg-green-500 flex items-center justify-center">
            <p class="font-bold text-3xl text-white">
                Providing Services Beyond Expectations
            </p>
        </div> -->

        <!-- What About Us Section -->
        <section class="py-20 px-4 sm:px-10 bg-black/90">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Content with Green Border -->
                    <div class="border-l-8 border-green-500 pl-8 space-y-6">
                        <h2 class="text-4xl sm:text-5xl font-black text-white">
                            What We Do?
                        </h2>

                        <div class="space-y-4 text-white text-sm leading-relaxed">
                            <p>
                                <strong>HCLAB Smart Client</strong>, or most commonly known as <strong>MCBTSi</strong> is a dynamic engineering company founded on March 22, 2022, emerging from a dedicated team of four individuals at Zafire Distributors Inc. during its NCR operation in 2003.
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
            
        <div class="h-14 bg-blend-color flex items-center justify-center mb-10">
            <p class="font-bold font-rale text-5xl text-black">
                Here's what we offer:
            </p>
        </div>
        <!-- HCLAB Section -->
        <section class="py-20 px-4 sm:px-10 bg-black/90">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
                    <!-- Left Content with Green Border -->
                    <div class="border-l-8 border-green-500 pl-8 space-y-6">
                        <h2 class="text-4xl sm:text-5xl font-zalando font-extrabold text-white shadow-2xs shadow-amber-400">
                            HCLAB
                        </h2>

                        <div class="space-y-4 text-white text-sm leading-relaxed">
                            <p>
                                <strong>HCLAB Smart Client</strong>, is a Laboratory Information System (LIS) developed by Sysmex, designed to streamline diagnostic workflows across multiple disciplines such as haematology, biochemistry, immunology, microbiology, and pathology. It is highly scalable, supporting laboratories from small clinics to large multi-site hospitals, and manages the entire process from test requests to results reporting.
                            </p>
                            <p>
                                Key features include sample tracking, quality control management, instrument interfacing, and robust reporting capabilities. HCLAB enhances laboratory efficiency, reduces errors, and improves patient care by providing real-time data access and integration with other healthcare systems.
                            </p>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="flex justify-center items-center">
                        <div class=" bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                            <img :src="image1" alt="Company info" class="max-w-md rounded-lg" />
                        </div>
                    </div>

                    <div class="bg-black/30 rounded-2xl p-6 shadow-md border-2 border-gray-600 hover:shadow-lg hover:scale-105 duration-300 transition-all cursor-pointer">
                        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">WAM</h3>
                        <p class="text-gray-100 text-sm">Workload Management System.</p>
                    </div>

                    <div class="bg-black/30 rounded-2xl p-6 shadow-md border-2 border-gray-600 hover:shadow-lg hover:scale-105 duration-300 transition-all cursor-pointer">
                        <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">LIS</h3>
                        <p class="text-gray-100 text-sm">Laboratory Information System.</p>
                    </div>

                    <div class="md:col-span-2 bg-black/30 rounded-2xl border-2 border-gray-600 p-8 shadow-md hover:shadow-lg transition-all hover:scale-105 duration-300 cursor-pointer">
                        <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.5 1.5H2.25A.75.75 0 001.5 2.25v15.5c0 .414.336.75.75.75h15.5a.75.75 0 00.75-.75V10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Special Modules</h3>
                        <p class="text-gray-100 text-sm">Microbiology, Blood Bank, Anatomical Pathology</p>
                    </div>
                </div>
            </div>
        </section>


    <Footer />
    </div>
    
</template>

<script setup lang="ts">

import image1 from '/resources/images/image1.png'
import medtech from '/resources/images/medtech.png'
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';

// If you have a lab-illustration image, import it here:
// import labImage from '@/resources/images/lab-illustration.svg'

// For now, using placeholder path - replace with actual image when available

</script>