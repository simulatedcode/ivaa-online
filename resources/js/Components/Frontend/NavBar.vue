<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import LogoIVAA from "@/Components/LogoIVAA.vue";
</script>

<template>
    <div class="relative">
        <nav class="flex items-center mx-auto max-w-7xl pt-8">
            <!-- Archive Header outline -->
            <div class="flex text-white mr-12">
                <LogoIVAA />
            </div>
            <div class="flex text-gray-700 mr-12">
                <ul class="flex space-x-6">
                    <li>
                        <Link class="hover:text-purple-600">About</Link>
                    </li>
                    <li class="flex">
                        <Link
                            class="flex items-center gap-2 hover:text-purple-600"
                        >
                            <svg width="1em" height="1em" viewBox="0 0 32 32">
                                <path
                                    fill="currentColor"
                                    d="M20 21h-8a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2Zm-8-4v2h8v-2Z"
                                ></path>
                                <path
                                    fill="currentColor"
                                    d="M28 4H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v16a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-2 24H6V12h20Zm2-18H4V6h24v4Z"
                                ></path>
                            </svg>
                            Collection
                        </Link>
                    </li>
                    <li>
                        <Link class="hover:text-purple-600">Resources</Link>
                    </li>
                    <li>
                        <Link class="hover:text-purple-600">Event</Link>
                    </li>
                </ul>
            </div>
            <div class="relative w-full">
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                        aria-hidden="true"
                        class="w-5 h-5 text-gray-800 dark:text-gray-400"
                        fill="none"
                        stroke="#111600"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        ></path>
                    </svg>
                </div>
                <input
                    type="seach"
                    placeholder="Search Artist, Artwork, Event & Document"
                    required
                    class="block w-full p-2 pl-10 rounded-lg bg-[#CEC9C5] focus:outline-none"
                />
            </div>
        </nav>
    </div>
</template>
