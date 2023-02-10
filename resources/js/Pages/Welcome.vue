<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import NavBar from "@/Components/Frontend/NavBar.vue";
import LogoIVAA from "@/Components/LogoIVAA.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Archive" />
    <div class="relative bg-gray-100 min-h-screen dark:bg-[#111600]">
        <NavBar />
        <section class="relative overflow-hidden pt-28 pb-20 dark:bg-[#111600]">
            <div class="lg:max-w-3xl mx-auto min-h-screen px-6">
                <h1
                    class="text-5xl mx-auto font-bold text-center md:text-6xl lg:text-7xl"
                >
                    Discover the digital
                    <br class="hidden lg:inline" />
                    <span>archive of Indonesian contemporary art</span>
                </h1>
                <p
                    class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10"
                >
                    Explore documents that record the dynamics of visual arts in
                    Indonesia, related to artists or collective and their works,
                    as well as art events.
                </p>
            </div>
        </section>
        <footer class="relative buttom-0 left-0 z-20">
            <div class="max-w-screen-2xl mx-auto w-full px-5">
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
                    <div class="col-span-12 lg:col-span-4">
                        <div class="max-w-sm">
                            <LogoIVAA />

                            <p class="mt-5 text-sm text-gray-600">
                                <strong
                                    >INDONESIAN VISUAL ART ARCHIVE
                                    (IVAA)</strong
                                >
                                <br />
                                Jln. Ireda Gang Hiperkes, Dipowinatan 188 A/B
                                <br />
                                RT. 14, RW. 03 Keparakan, Mergangsan -
                                Yogyakarta 55152
                                <br />
                                Telp./ Fax.: +62 274 375262
                                <br />
                                Email: program@ivaa-online.org
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t pt-6 pb-16 border-gray-200">
                    <div class="text-sm text-gray-600">
                        <p class="max-w-sm">
                            Indonesian Visual Art Archive (IVAA) is licensed
                            under a Creative Commons BY-NC Unported License.
                        </p>
                        <br />
                        <p>
                            Copyright © 2022. Made with Laravel v{{
                                laravelVersion
                            }}
                            (PHP v{{ phpVersion }})
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
