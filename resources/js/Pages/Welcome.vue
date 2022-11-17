<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

const form = useForm({
    student_id: "",
    password: "",
});

const submit = () => {
    form.post(route("student.login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="User Login" />

    <div
        class="flex flex-col w-full mx-auto my-20 max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10"
    >
        <div
            class="self-center mb-6 text-xl font-light text-gray-600 sm:text-2xl dark:text-white"
        >
            Login To Your Account
        </div>
        <div class="mt-8">
            <form @submit.prevent="submit" autoComplete="off">
                <div class="flex flex-col mb-2">
                    <div class="flex relative">
                        <span
                            class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm"
                        >
                            <svg
                                class="w-4 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <input
                            type="text"
                            id="student_id"
                            class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Student Id"
                            v-model="form.student_id"
                        />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <div class="flex relative">
                        <span
                            class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm"
                        >
                            <svg
                                width="15"
                                height="15"
                                fill="currentColor"
                                viewBox="0 0 1792 1792"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z"
                                ></path>
                            </svg>
                        </span>
                        <input
                            type="password"
                            id="sign-in-email"
                            class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Your password"
                            v-model="form.password"
                        />
                    </div>
                </div>
                <div class="flex items-center mb-6 -mt-4">
                    <div class="flex ml-auto">
                        <a
                            href="#"
                            class="inline-flex text-xs font-thin text-gray-500 sm:text-sm dark:text-gray-100 hover:text-gray-700 dark:hover:text-white"
                        >
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
                <div class="flex w-full">
                    <button
                        type="submit"
                        class="py-2 px-4 bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="flex items-center justify-center mt-6">
            <Link
                :href="route('register')"
                target="_blank"
                class="inline-flex items-center text-xs font-thin text-center text-gray-500 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white"
            >
                <span class="ml-2"> You don&#x27;t have an account? </span>
            </Link>
        </div>
    </div>
</template>
