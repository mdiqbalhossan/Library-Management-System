<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="pt-6 px-4">
            <!-- 1st Row -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4"
            >
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
                        <p class="text-2xl">1,257</p>
                        <p>Total Book Issue</p>
                    </div>
                </div>
                <div
                    class="bg-teal-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-teal-600 dark:border-gray-600 text-white font-medium group"
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
                        <p class="text-2xl">557</p>
                        <p>Total Book Returned</p>
                    </div>
                </div>
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
                        <p class="text-2xl">$11,257</p>
                        <p>Total Book Not return</p>
                    </div>
                </div>
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
                        <p class="text-2xl">$75,257</p>
                        <p>Total Fines Received</p>
                    </div>
                </div>
            </div>
            <!-- 1st Row -->

            <!-- 2nd Row -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4"
            >
                <div
                    class="bg-rose-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-rose-600 dark:border-gray-600 text-white font-medium group"
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
                        <p class="text-2xl">1,257</p>
                        <p>Total Book</p>
                    </div>
                </div>
                <div
                    class="bg-purple-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-purple-600 dark:border-gray-600 text-white font-medium group"
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
                        <p class="text-2xl">557</p>
                        <p>Total Author</p>
                    </div>
                </div>
                <div
                    class="bg-cyan-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-cyan-600 dark:border-gray-600 text-white font-medium group"
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
                        <p class="text-2xl">$11,257</p>
                        <p>Total Category</p>
                    </div>
                </div>
                <div
                    class="bg-emerald-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-emerald-600 dark:border-gray-600 text-white font-medium group"
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
                        <p class="text-2xl">$75,257</p>
                        <p>Total Location Rack</p>
                    </div>
                </div>
            </div>
            <!-- 2nd Row -->
        </div>
    </AuthenticatedLayout>
</template>
