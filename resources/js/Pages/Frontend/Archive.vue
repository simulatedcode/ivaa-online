<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import ArchiveNav from "@/Components/Frontend/ArchiveNav.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div>
        <Head title="Archive" />
        <div class="relative overflow-auto bg-gray-100 dark:bg-[#111600]">
            <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
                <aside
                    class="hidden fixed top-0 bottom-0 left-0 z-20 h-screen w-16 bg-gradient-to-b from-white to-gray-100 transition-all duration-300 overflow-hidden lg:sticky lg:w-80 lg:shrink-0 lg:flex lg:flex-col lg:justify-end lg:items-end 2xl:max-w-lg 2xl:w-full dark:from-dark-800 dark:to-dark-700"
                >
                    <ArchiveNav class="py-6" />
                </aside>
                <header class="lg:hidden"></header>
                <section class="flex-1 dark:bg-dark-700">
                    <div class="max-w-screen-lg px-8 sm:px-16 lg:px-24"></div>
                </section>
            </div>
            <Footer />
        </div>
    </div>
</template>
