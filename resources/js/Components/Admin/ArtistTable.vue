<script>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="overflow-x-auto">
        <div
            class="min-w-screen flex items-center justify-center bg-slate-100 overflow-hidden"
        >
            <div class="w-full">
                <div class="bg-white overflow-hidden">
                    <table class="min-w-max w-full table-auto">
                        <caption
                            class="py-5 px-6 text-2xl text-left bg-zinc-200/70 font-semibold text-zinc-600"
                        >
                            Artist list
                            <p class="mb-6 text-sm font-normal leading-relaxed">
                                last update of artists
                            </p>
                        </caption>
                        <thead>
                            <tr
                                class="text-sm leading-relaxed bg-zinc-300 border-b border-zinc-400"
                            >
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    ID
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Name
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Category
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Collective
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Artwork
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Events
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Khazanahs
                                </td>
                                <td
                                    class="border py-3 px-6 text-left font-semibold"
                                >
                                    Created
                                </td>
                                <td
                                    class="border py-3 px-6 text-center font-semibold"
                                >
                                    Status
                                </td>
                                <td
                                    class="border py-3 px-6 text-center font-semibold"
                                >
                                    Action
                                </td>
                            </tr>
                        </thead>
                        <tbody class="text-neutral-600 text-sm">
                            <tr
                                class="border-b border-gray-200 hover:bg-zinc-100/60"
                            >
                                <td class="border py-3 px-6 text-left">1</td>
                                <td
                                    class="border py-3 px-6 text-left whitespace-nowrap hover:text-indigo-600 cursor-pointer"
                                >
                                    Fullname of artist
                                </td>
                                <td class="border py-3 px-6 text-left">
                                    seniman
                                </td>
                                <td class="border py-3 px-6 text-left">
                                    Collective name
                                </td>
                                <td class="border py-3 px-6 text-left">1</td>
                                <td class="border py-3 px-6 text-left">20</td>
                                <td class="border py-3 px-6 text-left">45</td>

                                <td
                                    class="font-mono border py-3 px-6 text-left"
                                >
                                    March 13, 2020
                                </td>
                                <td
                                    class="border-hidden py-3 px-6 text-center flex items-center"
                                >
                                    Active
                                </td>

                                <td class="border py-3 px-6 text-center">
                                    <div
                                        class="flex item-center justify-center space-x-2"
                                    >
                                        <div
                                            class="w-4 mr-2 transform text-blue-700 hover:text-blue-500 hover:scale-110 cursor-pointer"
                                        >
                                            ✏️
                                        </div>
                                        <div
                                            class="w-4 mr-2 transform text-red-700 hover:text-red-500 hover:scale-110 cursor-pointer"
                                        >
                                            🗑️
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="font-mono relative bg-zinc-100/80 border">
                        <div
                            class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between py-6 px-6"
                        >
                            <div class="inline-flex justify-start mr-60">
                                <p class="text-sm font-normal leading-relaxed">
                                    <span class="mr-2">Total per page:</span
                                    >artists
                                </p>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-700"></p>
                            </div>
                            <div class="flex mr-12">
                                <p class="text-sm text-zinc-700">
                                    <span> </span>
                                    of
                                </p>
                            </div>
                            <div class="flex justify-end space-x-4">
                                <Link
                                    class="text-sm hover:text-zinc-700"
                                    preserve-scroll
                                    >Prev</Link
                                >
                                <Link
                                    class="text-sm hover:text-zinc-700"
                                    preserve-scroll
                                    >Next</Link
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
