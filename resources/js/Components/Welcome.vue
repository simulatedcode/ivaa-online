<script setup>
import LoginLogoIVAA from "@/Components/LoginLogoIVAA.vue";
</script>

<template>
    <div>
        <div class="p-6 sm:px-10 bg-white border-b border-gray-200">
            <div class="text-2xl font-semibold">Welcome to Online Archive</div>

            <div class="text-gray-500 mt-2 text-justify">
                We're excited to help you manage your files and keep your
                information organized. Whether you're looking to store personal
                or professional documents, our user-friendly interface and
                efficient system will make it easy to access and manage your
                data. Thank you for choosing our archive application, and we
                hope you find it useful for all your archiving needs.
            </div>
        </div>

        <div class="p-6 sm:px-10 text-zinc-600 border-b border-gray-200">
            <h1 class="mb-4 text-2xl font-medium">Last Update</h1>
            <div class="mb-4">
                <div>
                    <dl>
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt
                                class="text-sm font-medium text-gray-500 hover:text-indigo-600 cursor-pointer"
                            >
                                Title direct to detail
                            </dt>
                            <dd
                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"
                            >
                                date
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div class="p-6 sm:px-10 border-b border-gray-200">
            <div>
                <h1 class="mb-6 text-2xl font-medium text-zinc-600 ml-2">
                    Archive
                </h1>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <div
                    class="col-span-6 md:col-span-4 lg:col-span-4 border border-gray-200 rounded-lg px-6 py-4"
                >
                    <div>
                        <div>
                            <h1 class="text-lg font-medium">Artists</h1>
                        </div>
                        <span
                            ><p
                                class="mt-2 font-semibold text-4xl text-indigo-600"
                            >
                                1000
                            </p>
                        </span>
                        <div
                            class="mt-2 text-sm text-gray-600 hover:text-indigo-600 cursor-pointer"
                        >
                            Add Artist
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-6 md:col-span-4 lg:col-span-4 border border-gray-200 rounded-lg px-6 py-4"
                >
                    <div>
                        <div>
                            <h1 class="text-lg font-medium">Collectives</h1>
                        </div>
                        <span
                            ><p
                                class="mt-2 font-semibold text-4xl text-indigo-600"
                            >
                                234
                            </p>
                        </span>
                        <div
                            class="mt-2 text-sm text-gray-600 hover:text-indigo-600 cursor-pointer"
                        >
                            Add Collective
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-6 md:col-span-4 lg:col-span-4 border border-gray-200 rounded-lg px-6 py-4"
                >
                    <div>
                        <div>
                            <h1 class="text-lg font-medium">Artworks</h1>
                        </div>
                        <span
                            ><p
                                class="mt-2 font-semibold text-4xl text-indigo-600"
                            >
                                30000
                            </p>
                        </span>
                        <div
                            class="mt-2 text-sm text-gray-600 hover:text-indigo-600 cursor-pointer"
                        >
                            Add Artwork
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-6 md:col-span-4 lg:col-span-4 border border-gray-200 rounded-lg px-6 py-4"
                >
                    <div>
                        <div>
                            <h1 class="text-lg font-medium">Events</h1>
                        </div>
                        <span
                            ><p
                                class="mt-2 font-semibold text-4xl text-indigo-600"
                            >
                                2000
                            </p>
                        </span>
                        <div
                            class="mt-2 text-sm text-gray-600 hover:text-indigo-600 cursor-pointer"
                        >
                            Add Event
                        </div>
                    </div>
                </div>
                <div
                    class="col-span-6 md:col-span-4 lg:col-span-4 border border-gray-200 rounded-lg px-6 py-4"
                >
                    <div>
                        <div>
                            <h1 class="text-lg font-medium">Documents</h1>
                        </div>
                        <span
                            ><p
                                class="mt-2 font-semibold text-4xl text-indigo-600"
                            >
                                2000
                            </p>
                        </span>
                        <div
                            class="mt-2 text-sm text-gray-600 hover:text-indigo-600 cursor-pointer"
                        >
                            Add Document
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 flex justify-center">
            <span class="text-sm text-gray-800"
                >Online Archive © Indonesian Visual Archive. 2023
            </span>
        </div>
    </div>
</template>
