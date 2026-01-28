<template>
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-10 py-5 flex justify-between items-center">
            <!-- Logo -->
            <Link href="/" class="flex-shrink-0 hover:opacity-80 transition">
                <img :src="logoImage" alt="MC BioTechnical Solutions logo" class="h-12 w-auto" />
            </Link>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex gap-10 items-center">
                <Link href="/" class="text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Home
                </Link>
                <Link href="/service" class="text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Services
                </Link>
                <Link href="/careers" class="text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Careers
                </Link>
                <Link href="/about" class="text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    About
                </Link>
            </div>

            <!-- Mobile Menu Button -->
            <button 
                @click="isMobileMenuOpen = !isMobileMenuOpen"
                class="md:hidden p-2 text-gray-800 hover:text-green-500 transition"
            >
                <svg v-if="!isMobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div 
            v-if="isMobileMenuOpen"
            class="md:hidden bg-white border-t border-gray-200"
        >
            <div class="px-4 sm:px-10 py-4 space-y-4">
                <Link href="/" class="block text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Home
                </Link>
                <Link href="/service" class="block text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Services
                </Link>
                <Link href="/careers" class="block text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    Careers
                </Link>
                <Link href="/about" class="block text-gray-800 font-medium text-sm hover:text-green-500 transition">
                    About
                </Link>
            </div>
        </div>
    </nav>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import logoImage from '/resources/images/logo.png'


const isMobileMenuOpen = ref(false)
</script>
