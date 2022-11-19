<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div v-if="!$page.props.auth.user.is_profile_complete">
        <div
            id="alert-border-2"
            class="flex p-4 mb-4 mx-auto w-full max-w-xl bg-red-100 border-t-4 border-red-500 dark:bg-red-200"
            role="alert"
        >
            <svg
                class="flex-shrink-0 w-5 h-5 text-red-700"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"
                ></path>
            </svg>
            <div class="ml-3 text-sm font-medium text-red-700">
                Your Profile is not complete. Please complete the profile
                <Link
                    :href="route('student.profile')"
                    class="font-semibold underline hover:text-red-800"
                    >by clicking</Link
                >. this link.
            </div>
            <button
                type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-100 dark:bg-red-200 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 dark:hover:bg-red-300 inline-flex h-8 w-8"
                data-dismiss-target="#alert-border-2"
                aria-label="Close"
            >
                <span class="sr-only">Dismiss</span>
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
        </div>
    </div>
</template>
