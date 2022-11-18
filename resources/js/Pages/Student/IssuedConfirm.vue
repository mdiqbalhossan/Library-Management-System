<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
</script>

<template>
    <FrontendLayout>
        <div>
            <div
                class="shadow-lg rounded-2xl p-4 bg-gray-200 dark:bg-gray-800 w-64 m-auto"
            >
                <div class="w-full h-full text-center">
                    <div
                        class="flex h-full flex-col justify-between text-green-600"
                    >
                        <svg
                            class="h-10 w-10 my-4 m-auto text-green-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <p
                            class="text-gray-600 dark:text-gray-100 text-md py-2 px-6"
                        >
                            Book Issue Successfully !!
                            <span
                                class="text-green-600 dark:text-white font-bold text-xl"
                            >
                                {{ $page.props.flash.message }}
                            </span>
                            is your Issue Id. Please note the issue ID. Issue ID
                            may be required at the time of Book collection.
                        </p>
                        <div
                            class="flex items-center justify-between gap-4 w-full mt-8"
                        >
                            <Link
                                :href="route('student.dashboard')"
                                class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
                            >
                                Back
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
