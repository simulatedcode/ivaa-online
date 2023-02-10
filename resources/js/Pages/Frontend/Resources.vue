<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/Frontend/NavBar.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div>
        <Head title="Resources" />
        <div class="relative bg-gray-100 min-h-screen dark:bg-[#111600]">
            <NavBar />
            <section
                class="relative overflow-hidden pt-28 pb-20 dark:bg-[#111600]"
            >
                <div class="lg:max-w-3xl mx-auto min-h-screen px-6">
                    <h1
                        class="text-5xl mx-auto font-bold text-center md:text-6xl lg:text-7xl"
                    >
                        Resources
                    </h1>
                    <p
                        class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10"
                    >
                        Explore documents that record the dynamics of visual
                        arts in Indonesia, related to artists or collective and
                        their works, as well as art events.
                    </p>
                </div>
            </section>
            <Footer />
        </div>
    </div>
</template>
