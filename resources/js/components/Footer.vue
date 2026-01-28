<template>
    <footer class="bg-gray-50 border-t border-gray-200">
        <!-- Main Footer Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-10 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start mb-16">
                <!-- Left Section - Let's Talk -->
                <div class="space-y-8">
                    <h2 class="text-5xl sm:text-6xl font-black text-black leading-tight">
                        Let's Talk
                    </h2>

                    <!-- Email Section -->
                    <div class="flex items-center gap-4">
                        <button class="px-6 py-3 bg-gray-800 text-white font-bold text-sm hover:bg-green-500 hover:text-black transition-all duration-300">
                            Email us
                        </button>
                        <a href="mailto:mcbtsi@gmail.com" class="text-gray-600 font-medium text-sm hover:text-green-500 transition">
                            mcbtsi@gmail.com
                        </a>
                    </div>
                </div>

                <!-- Right Section - Navigation Links -->
                <div class="space-y-6">
                    <Link href="/" class="block text-gray-800 font-semibold text-lg hover:text-green-500 transition">
                        Home
                    </Link>
                    <Link href="/service" class="block text-gray-800 font-semibold text-lg hover:text-green-500 transition">
                        Services
                    </Link>
                    <Link href="/careers" class="block text-gray-800 font-semibold text-lg hover:text-green-500 transition">
                        Careers
                    </Link>
                    <Link href="/about" class="block text-gray-800 font-semibold text-lg hover:text-green-500 transition">
                        About Us
                    </Link>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200 my-12"></div>

            <!-- Bottom Footer -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6">
                <!-- Copyright -->
                <p class="text-gray-600 text-sm">
                    ©2025 MC Biotechnical Solutions, Inc.
                </p>

                <!-- Tagline -->
                <p class="text-gray-600 text-sm italic">
                    Keep it fun
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>
