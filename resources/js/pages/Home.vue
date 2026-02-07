<template>
    <div class="min-h-screen bg-white overflow-x-hidden">
        <Header />

        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-10 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="max-w-7xl mx-auto">
                <!-- Content Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-11 items-center mb-20">
                    <!-- Left Content -->
                    <div class="">
                        <div>
                            <h1 class="text-5xl text-wrap md:text-nowrap sm:text-6xl font-rale font-semibold text-black/80 leading-10 tracking-tight">
                                Optimizing Laboratories
                            </h1>
                            <h2 class="text-4xl sm:text-5xl font-extrabold text-green-500 font-zalando leading-tight -tracking-wide mt-2">
                                It Starts Here!
                            </h2>
                        </div>

                        <p class="text-gray-600 text-md text-balance font-rale leading-tight mt-3 mb-8 max-w-lg">
                            Empowering laboratories for better patient care, for better future.
                        </p>

                        <Link href="/service" class="px-7 py-4 mt-14 bg-green-500 text-white  font-bold text-md tracking-wide hover:bg-black  transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg">
                            Explore our Solutions
                        </Link>
                    </div>

                    <!-- Right Image -->
                    <div class="flex justify-center items-center translate-y-0 opacity-100 transition-all duration-750 dark:text-[#F61500] starting:translate-y-36 starting:opacity-0">
                        <img :src="image1" alt="Laboratory workers" class="max-w-md h-auto w-full" />
                    </div>
                </div>

                <!-- Video Cards Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    <!-- Video Card 1 -->
                    <div class="group relative bg-linear-to-br from-gray-300 to-gray-200 rounded-xl overflow-hidden aspect-video flex items-center justify-center cursor-pointer hover:scale-105 transition-transform duration-300">
                        <svg class="w-20 h-20 text-black/80 opacity-70 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="group relative bg-gradient-to-br from-gray-300 to-gray-200 rounded-xl overflow-hidden aspect-video flex items-center justify-center cursor-pointer hover:scale-105 transition-transform duration-300">
                        <svg class="w-20 h-20 text-black/80 opacity-70 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services Section -->
        <section class="py-20 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mb-20">
                    <!-- Left Image -->
                    <div class="flex justify-center items-center order-2 lg:order-1">
                        <div class="w-full bg-gray-300 rounded-3xl h-80"></div>
                    </div>

                    <!-- Right Content -->
                    <div class="order-1 lg:order-2 space-y-8">
                        <div>
                            <p class="text-blue-500 font-semibold text-sm mb-2">Our Services</p>
                            <h2 class="text-4xl sm:text-4xl font-semibold font-zalando text-black/80 leading-tight tracking-tight">
                                We help laboratories enhance accuracy and productivity.
                            </h2>
                            <p class="text-gray-600 text-sm mt-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>

                        <!-- Service Card -->
                        <div class="bg-blue-50 rounded-2xl p-6 space-y-4">
                            <h3 class="text-lg font-bold text-black/80">HCLAB WAM & LIS</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            </p>
                            <button class="px-6 py-2 bg-black text-white font-semibold text-sm hover:bg-green-500 hover:text-black/80 transition-all duration-300">
                                Read More
                            </button>
                        </div>

                        <!-- Special Modules Section -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-black/80">HCLAB Special Modules</h4>
                                <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 24/7 Support Section -->
        <section class="pb-20 px-4 sm:px-10 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Content -->
                    <div class="space-y-12">
                        <div>
                            <h2 class="text-4xl sm:text-4xl font-semibold font-zalando text-black/80 leading-tight mb-4">
                                We offer 24/7 Technical Support
                            </h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                        </div>

                        <!-- Support Cards Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                            <!-- IT Support Card -->
                            <div class="space-y-4">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-black/80">IT Support</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>

                            <!-- Machine Support Card -->
                            <div class="space-y-4">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M12 4a1 1 0 011 1v2h4a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2h4V5a1 1 0 011-1h2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-black/80">Machine Support</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="flex justify-center items-center">
                        <div class="w-full bg-gray-300 rounded-3xl h-96"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Providing Service Toward Success Section -->
        <section class="py-20 px-4 sm:px-10 bg-blue-600">
            <div class="max-w-7xl mx-auto space-y-12">
                <!-- Header -->
                <div class="text-white">
                    <h2 class="text-3xl sm:text-4xl font-zalando font-semibold mb-2">
                        Providing service toward success →
                    </h2>
                    <p class="text-blue-100 text-md max-w-2xl">
                        We believe that real is the essence in health services, so we try to improve that
                    </p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <!-- Services Provided Card -->
                    <div class="bg-white rounded-2xl p-6 border-l-4 border-green-500 space-y-4">
                        <p class="text-gray-600 font-semibold text-sm">Services Provided:</p>
                        <p class="text-5xl font-black text-black/80">1500+</p>
                    </div>

                    <!-- Clients Card -->
                    <div class="bg-white rounded-2xl p-6 border-l-4 border-green-500 space-y-4">
                        <p class="text-gray-600 font-semibold text-sm">Clients:</p>
                        <p class="text-5xl font-black text-black/80">20+</p>
                    </div>

                    <!-- Branches Card -->
                    <div class="bg-white rounded-2xl p-6 border-l-4 border-green-500 space-y-4">
                        <p class="text-gray-600 font-semibold text-sm">Branches:</p>
                        <p class="text-5xl font-black text-black/80">10...</p>
                    </div>
                </div>

                <!-- Testimonial Card -->
                <div class="bg-gray-800 rounded-2xl p-8 text-center space-y-4 relative">
                    <button @click="previousTestimonial" class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-green-500 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <Transition
                        enterActiveClass="animate-swipeIn"
                        leaveActiveClass="animate-swipeOut"
                        mode="out-in"
                    >
                        <div :key="currentIndex" class="space-y-4 transition-all duration-500 h-36">
                            <p class="text-gray-300 text-xl leading-relaxed max-w-2xl mx-auto">
                                {{ currentTestimonial.text }}
                            </p>
                            <p class="text-white font-semibold text-md">- {{ currentTestimonial.author }}, {{ currentTestimonial.title }}</p>
                        </div>
                    </Transition>

                    <button @click="nextTestimonial" class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-green-500 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-20 px-4 sm:px-10 bg-blue-50">
            <div class="max-w-7xl mx-auto">
                <!-- About Us Header -->
                <div class="text-center mb-16">
                    <div class="inline-block bg-white rounded-full shadow-md px-4 py-2 mb-6">
                        <p class="text-blue-500 font-semibold text-sm">About us</p>
                    </div>
                    <div class="flex justify-center mb-6">
                        <img :src="logoImage" alt="MC BioTechnical Solutions" class="h-20 w-auto" />
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="bg-white rounded-3xl shadow-lg p-8 lg:p-12 mb-16">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-16">
                        <!-- Video Player -->
                        <div class="flex justify-center items-center">
                            <video class="w-full bg-gray-300 rounded-3xl aspect-video object-cover" controls>
                                <source :src="mcbtsi_vid" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <!-- Description -->
                        <div class="space-y-6">
                            <p class="text-gray-700 text-sm leading-relaxed">
                                <strong class="text-green-500">MC Biotechnical Solutions Inc.</strong>, or <strong class="text-green-500">MCBTSi</strong> as we call ourselves, is part of a group of companies called <strong>Zafire Group of Companies</strong>. We at MCBTSi focus on Laboratory enhancement with our machines and laboratory information system (LIS).
                            </p>
                        </div>
                        
                    </div>
                    <div class="mb-16 overflow-x-auto pb-4">
                            <div class="flex gap-6 min-w-max">
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                                
                                <div class="w-48 h-32 bg-gray-300 rounded-2xl flex-shrink-0 hover:shadow-lg transition"></div>
                            </div>
                        </div>
                </div>

                <!-- Gallery/Products Carousel -->
                

                <!-- Career Section -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <!-- Top Colored Cards Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- Interested Card -->
                        <div class="bg-gradient-to-br from-purple-700 to-purple-900 p-8 text-white">
                            <h3 class="text-2xl sm:text-3xl font-bold">
                                Interested to be part of our team?
                            </h3>
                        </div>

                        <!-- Growing Family Card -->
                        <div class="bg-gradient-to-br from-green-400 to-green-600 p-8 text-white">
                            <h3 class="text-2xl sm:text-3xl font-bold">
                                Come. Be part of our growing family →
                            </h3>
                        </div>
                    </div>

                    <!-- Careers Info Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center p-8">
                        <!-- Careers Content -->
                        <div class="space-y-4">
                            <h3 class="text-2xl sm:text-3xl font-black text-black/80">Careers</h3>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                MC Biotechnical Solutions Inc. is dedicated to making laboratories easier and faster by providing innovative solutions and services tailored to meet the needs of modern scientific research.
                            </p>
                        </div>

                        <!-- View Careers Button -->
                        <div class="flex justify-start lg:justify-end">
                            <button class="w-14 h-14 bg-black rounded-full flex items-center justify-center text-white hover:bg-green-500 transition-all duration-300 cursor-pointer">
                                
                                <p class="font-inter text-2xl">-></p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
            



    </div>
    <Footer />
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { ref, onMounted, onUnmounted} from 'vue'
import Footer from '@/components/Footer.vue'
import Header from '@/components/Header.vue'
import logoImage from '/resources/images/logo.png'
import image1 from '/resources/images/image1.png'
import mcbtsi_vid from '/resources/images/mcbtsi_vid.mp4'


interface Testimonial {
  text: string
  author: string
  title: string
}

const testimonials = ref<Testimonial[]>([
  {
    text: "MC Biotechnical Solutions Inc. has revolutionized the way laboratories operate. Their innovative solutions have made our work faster and more efficient.",
    author: "Jerome Ibardollasa",
    title: "RMT"
  },
  {
    text: "The HCLAB LIS system has streamlined our entire laboratory workflow. Implementation was smooth and the support team is exceptional.",
    author: "Dr. Maria Santos",
    title: "Lab Director"
  },
  {
    text: "Outstanding customer service and reliable equipment. MCBTSi has been a game-changer for our clinical laboratory.",
    author: "Antonio Cruz",
    title: "Hospital Administrator"
  },
  {
    text: "Their 24/7 technical support has saved us countless times. The team truly understands laboratory operations and challenges.",
    author: "Dr. Jennifer Lee",
    title: "Chief Technologist"
  }
])

const currentIndex = ref(0)
const currentTestimonial = ref(testimonials.value[0])
let autoAdvanceInterval: ReturnType<typeof setInterval> | null = null

const nextTestimonial = () => {
  currentIndex.value = (currentIndex.value + 1) % testimonials.value.length
  currentTestimonial.value = testimonials.value[currentIndex.value]
}

const previousTestimonial = () => {
  currentIndex.value = (currentIndex.value - 1 + testimonials.value.length) % testimonials.value.length
  currentTestimonial.value = testimonials.value[currentIndex.value]
}

const startAutoAdvance = () => {
  autoAdvanceInterval = setInterval(() => {
    nextTestimonial()
  }, 10000) // Change testimonial every 5 seconds
}

const stopAutoAdvance = () => {
  if (autoAdvanceInterval) {
    clearInterval(autoAdvanceInterval)
  }
}

onMounted(() => {
  startAutoAdvance()
})

onUnmounted(() => {
  stopAutoAdvance()
})
</script>

<style scoped>
@keyframes swipeIn {
  from {
    opacity: 0;
    transform: translateX(100%);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes swipeOut {
  from {
    opacity: 1;
    transform: translateX(0);
  }
  to {
    opacity: 0;
    transform: translateX(-100%);
  }
}

.animate-swipeIn {
  animation: swipeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards !important;
}

.animate-swipeOut {
  animation: swipeOut 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards !important;
}
</style>
