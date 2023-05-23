<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/Frontend/NavBar.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <Head title="Archive" />
    <div class="relativ min-h-screen backdrop-filter backdrop-blur-lg dark:bg-[#111600]">
        <NavBar />
    <!-- Card 1 -->
    <a href="">
        <div class="relative mt-10">
            <div class="relative lg:flex overflow-hidden">
                <div class="h-50 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-cyan-500 opacity-75"></div>
                    <h1 class="absolute top-10 left-10 text-3xl font-bold md:text-5xl lg:text-6xl">Lorem Ipsum Dolor</h1>
                    <h2 class="absolute bottom-10 left-10 text-2xl mx-auto font-bold md:text-3xl lg:text-4xl">Lorem Ipsum
                    </h2>
                </div>
                <div class="relative lg:w-8/12">
                    <div class="relative leading-relaxed">
                        <div class="relative leading-relaxed">
                            <img class="w-full aspect-video"
                                src="https://cdn.pixabay.com/photo/2022/08/28/01/40/cyberpunk-city-7415576__480.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
     <!-- Card 2 -->
     <a href="">
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="relative lg:w-8/12">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://wallpapersmug.com/download/3840x2160/13377a/cyberpunk-city-buildings-art.jpg" />
                    </div>
                </div>
                <div class="h-50 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-red-700 opacity-75"></div>
                    <h1 class="absolute top-10 left-10 text-3xl font-bold md:text-5xl lg:text-6xl">Lorem Ipsum Dolor</h1>
                    <h2 class="absolute bottom-10 left-10 text-2xl mx-auto font-bold md:text-3xl lg:text-4xl">Lorem Ipsum
                    </h2>
                </div>
            </div>
        </div>
    </a>
    <!-- Card 3 -->
    <a href="">
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="h-50 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-green-900 opacity-75"></div>
                    <h1 class="absolute top-10 left-10 text-3xl font-bold md:text-5xl lg:text-6xl">Lorem Ipsum Dolor</h1>
                    <h2 class="absolute bottom-10 left-10 text-2xl mx-auto font-bold md:text-3xl lg:text-4xl">Lorem Ipsum
                    </h2>
                </div>
                <div class="relative lg:w-8/12">
                    <div class="relativeleading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://c4.wallpaperflare.com/wallpaper/227/620/1007/3-316-16-9-aspect-ratio-s-sfw-wallpaper-preview.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </a>
    <!-- Card 4 -->
    <a href="">
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="relative lg:w-8/12">
                    <div class="relative leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://www.ekinops.com/images/articles/ekinops_Q4_vignette.png" />
                    </div>
                </div>
                <div class="h-50 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-yellow-600 opacity-75"></div>
                    <h1 class="absolute top-10 left-10 text-3xl font-bold md:text-5xl lg:text-6xl">Lorem Ipsum Dolor</h1>
                    <h2 class="absolute bottom-10 left-10 text-2xl mx-auto font-bold md:text-3xl lg:text-4xl">Lorem Ipsum
                    </h2>
                </div>
            </div>
        </div>
    </a>
    <!-- Card 5 -->
    <a href="">
        <div class="relative">
            <div class="relative lg:flex overflow-hidden" id="test">
                <div class="h-50 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-red-400 opacity-75"></div>
                    <h1 class="absolute top-10 left-10 text-3xl font-bold md:text-5xl lg:text-6xl">Lorem Ipsum Dolor</h1>
                    <h2 class="absolute bottom-10 left-10 text-2xl mx-auto font-bold md:text-3xl lg:text-4xl">Lorem Ipsum
                    </h2>
                </div>
                <div class="relative lg:w-8/12">
                    <div class="relative">
                        <img class="w-full aspect-video"
                            src="https://cdn.pixabay.com/photo/2022/08/28/01/40/cyberpunk-city-7415576__480.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </a>
        <Footer />
</div></template>
