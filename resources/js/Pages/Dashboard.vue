<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
defineProps({
    total: Array,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="pt-6 px-4">
            <!-- 1st Row -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4"
            >
                <!-- Total Book Issued -->
                <div
                    class="bg-indigo-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-indigo-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="30"
                            height="30"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.issue_book }}</p>
                        <p>Total Book Issue</p>
                    </div>
                </div>
                <!-- Total Book Issued -->
                <!-- Total Book Returned -->
                <div
                    class="bg-teal-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-teal-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="30"
                            height="30"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 3.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 9H10a3 3 0 013 3v1a1 1 0 102 0v-1a5 5 0 00-5-5H8.414l1.293-1.293z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.return }}</p>
                        <p>Total Book Returned</p>
                    </div>
                </div>
                <!-- Total Book Returned -->
                <!-- Total Book Not Returned -->
                <div
                    class="bg-red-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-red-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="30"
                            height="30"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.not_return }}</p>
                        <p>Total Book Not return</p>
                    </div>
                </div>
                <!-- Total Book Not Returned -->
                <!-- Total Fined Received -->
                <div
                    class="bg-pink-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-pink-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="30"
                            height="30"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">${{ total.fines }}</p>
                        <p>Total Fines Received</p>
                    </div>
                </div>
                <!-- Total Fines Received -->
            </div>
            <!-- 1st Row -->

            <!-- 2nd Row -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4"
            >
                <!-- Total Book -->
                <div
                    class="bg-rose-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-rose-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="50"
                            height="50"
                            fill="none"
                            viewBox="0 0 20 20"
                            stroke="currentColor"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.book }}</p>
                        <p>Total Book</p>
                    </div>
                </div>
                <!-- Total Book -->
                <!-- Total Author -->
                <div
                    class="bg-purple-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-purple-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="50"
                            height="50"
                            fill="none"
                            viewBox="0 0 20 20"
                            stroke="currentColor"
                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.author }}</p>
                        <p>Total Author</p>
                    </div>
                </div>
                <!-- Total Author -->
                <!-- Total Category -->
                <div
                    class="bg-cyan-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-cyan-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="50"
                            height="50"
                            fill="none"
                            viewBox="0 0 20 20"
                            stroke="currentColor"
                            class="stroke-current text-cyan-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.category }}</p>
                        <p>Total Category</p>
                    </div>
                </div>
                <!-- Total Category -->
                <!-- Total Location Rack -->
                <div
                    class="bg-emerald-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-emerald-600 dark:border-gray-600 text-white font-medium group"
                >
                    <div
                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12"
                    >
                        <svg
                            width="50"
                            height="50"
                            fill="none"
                            viewBox="0 0 20 20"
                            stroke="currentColor"
                            class="stroke-current text-emerald-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ total.location }}</p>
                        <p>Total Location Rack</p>
                    </div>
                </div>
                <!-- Total Location Rack -->
            </div>
            <!-- 2nd Row -->
        </div>
    </AuthenticatedLayout>
</template>
