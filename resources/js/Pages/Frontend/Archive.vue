<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/Frontend/NavBar.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <Head title="Archive" />
    <div class="relativ min-h-screen backdrop-filter backdrop-blur-lg dark:bg-[#111600]">
        <NavBar />
        <div>
            <h1>Lorem Ipsum</h1>
        </div>
        <div class="relative mt-10">
            <div class="relative lg:flex overflow-hidden">
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-cyan-500 opacity-75"></div>
                    <h1 class="relative text-white text-5xl">Testing</h1>
                </div>
                <div class="relative lg:w-7/12 bg-gray-200">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative  text-gray-700 leading-relaxed">
                        <div class="relative text-gray-700 leading-relaxed">
                            <img class="w-full aspect-video"
                                src="https://cdn.pixabay.com/photo/2022/08/28/01/40/cyberpunk-city-7415576__480.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="relative lg:w-7/12 bg-gray-200">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative text-gray-700 leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://wallpapersmug.com/download/3840x2160/13377a/cyberpunk-city-buildings-art.jpg" />
                    </div>
                </div>
                <div class="h-45 lg:h-5/12 lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-red-700 opacity-75"></div>
                    <h1 class="relative text-white text-5xl">Testing</h1>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-green-900 opacity-75"></div>
                    <h1 class="relative text-white text-5xl">Testing</h1>
                </div>
                <div class="relative lg:w-7/12 bg-gray-200">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative text-gray-700 leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://c4.wallpaperflare.com/wallpaper/227/620/1007/3-316-16-9-aspect-ratio-s-sfw-wallpaper-preview.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="relative lg:flex overflow-hidden">
                <div class="relative lg:w-7/12 bg-gray-200">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative text-gray-700 leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://www.ekinops.com/images/articles/ekinops_Q4_vignette.png" />
                    </div>
                </div>
                <div class="h-56 lg:h-auto lg:w-5/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-yellow-600 opacity-75"></div>
                    <h1 class="relative text-white text-5xl">Testing</h1>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="relative lg:flex overflow-hidden" id="test">
                <div class="h-50 lg:h-auto lg:w-4/12 relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-red-400 opacity-75"></div>
                    <h1 class="relative text-white text-5xl">Testing</h1>
                </div>
                <div class="relative lg:w-8/12 bg-gray-200">
                    <svg class="absolute h-full text-gray-200 w-24 -ml-12" fill="currentColor" viewBox="0 0 100 100"
                        preserveAspectRatio="none">
                    </svg>
                    <div class="relative text-gray-700 leading-relaxed">
                        <img class="w-full aspect-video"
                            src="https://cdn.pixabay.com/photo/2022/08/28/01/40/cyberpunk-city-7415576__480.jpg"
                             />
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>
