<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import LogoOA from "@/Components/LogoOA.vue";
</script>

<template>
    <div class="relative min-h-0 flex-1 flex flex-col xl:w-80">
        <div
            class="overflow-y-auto overflow-x-hidden px-4 py-6 lg:overflow-hidden lg:px-8 xl:px-16"
        >
            <Link href="/"><LogoOA /> </Link>
            <div class="pt-8">
                <ul class="divide-y py-2 divide-gray-200 space-y-2 font-medium">
                    <li class="hover:indent-2 transition cursor-pointer">
                        Artist
                    </li>
                    <li class="mt-2">Collective</li>
                    <li>Artwork</li>
                    <li>Event</li>
                    <li>Document</li>
                </ul>
            </div>
            <div class="pt-12">
                <ul class="divide-y py-2 divide-gray-200 space-y-2">
                    <li>FAQ</li>
                    <li>Manual</li>
                </ul>
            </div>
        </div>
    </div>
</template>
