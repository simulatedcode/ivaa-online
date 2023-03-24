<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import ArtistTable from "@/Components/Admin/ArtistTable.vue";
</script>

<template>
    <AppLayout title="Artists">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Artists
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end items-center">
                    <div class="bg-indigo-600 px-4 py-3">
                        <span
                            class="text-white hover:text-indigo-100 cursor-pointer mr-6 text-sm"
                            >Add Artist</span
                        >
                    </div>
                </div>
                <div class="overflow-hidden">
                    <ArtistTable />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
