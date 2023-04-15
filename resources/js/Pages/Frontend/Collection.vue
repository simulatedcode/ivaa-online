<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/Frontend/NavBar.vue";
import Footer from "@/Components/Frontend/Footer.vue";
import ImgSearch from "@/Components/ImgSearch.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div>
        <Head title="Collection" />
        <div class="relative bg-gray-100 min-h-screen dark:bg-[#111600]">
            <NavBar />
            <section
                class="relative overflow-hidden pt-28 pb-32 dark:bg-[#111600]"
            >
                <div class="lg:max-w-3xl mx-auto px-6">
                    <h1
                        class="text-5xl mx-auto font-bold text-center md:text-6xl lg:text-7xl"
                    >
                        Collection
                    </h1>
                    <p
                        class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10"
                    >
                        Where you'll find an extensive range of
                        <mark>artists, events, artworks, and documents</mark>.
                        We've curated a diverse selection of creatives and their
                        masterpieces, as well as important historical documents
                        that provide insight into the evolution of art. Explore
                        this page to discover and appreciate the rich and
                        dynamic world of art.
                    </p>
                </div>
            </section>
            <div
                class="relative max-w-screen-xl w-full mx-auto h-screen xl:px-5"
            >
                <div class="relative w-full grid gap-12 lg:grid-cols-2">
                    <div
                        class="overflow-hidden flex justify-center lg:order-last"
                    >
                        <ImgSearch />
                    </div>
                    <div
                        class="translate-x-32 sm:translate-x-0 lg:translate-x-20 xl:translate-x-0"
                    >
                        <div
                            class="w-full flex justify-center items-center px-5 xl:px-0"
                        >
                            <div class="sm:max-w-[480px]">
                                <h1 class="text-4xl font-bold">Artists</h1>
                                <p class="mt-6 leading-relaxed">
                                    This archive page is dedicated to presenting
                                    an impressive range of contemporary artists
                                    and their artworks. Take a journey through
                                    their creative minds and discover the beauty
                                    and diversity of modern art.
                                </p>
                                <div
                                    class="group relative inline-flex border-b border-gray-600 focus:outline-none mt-6"
                                >
                                    <Link
                                        href="/archive"
                                        class="text-xl font-bold py-1 hover:text-purple-600"
                                        >Explore</Link
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <Footer />
        </div>
    </div>
</template>
