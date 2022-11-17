<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
const form = useForm({
    name: "",
    password: "",
    student_id: "",
});

const submit = () => {
    form.post(route("register.post"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="User Register" />
    <div>
        <div
            class="flex flex-col max-w-md mx-auto my-20 px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10"
        >
            <div
                class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white"
            >
                Create a new account
            </div>
            <span
                class="justify-center text-sm text-center text-gray-500 flex-items-center dark:text-gray-400"
            >
                Already have an account ?
                <Link
                    :href="route('student.login')"
                    target="_blank"
                    class="text-sm text-blue-500 underline hover:text-blue-700"
                >
                    Sign in
                </Link>
            </span>
            <div class="p-6 mt-8">
                <form @submit.prevent="submit">
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                type="text"
                                id="name"
                                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                name="name"
                                placeholder="Name"
                                v-model="form.name"
                            />
                        </div>
                    </div>

                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                type="text"
                                id="student_id"
                                name="student_id"
                                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                placeholder="Student Id"
                                v-model="form.student_id"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                placeholder="password"
                                v-model="form.password"
                            />
                        </div>
                    </div>
                    <div class="flex w-full my-4">
                        <button
                            type="submit"
                            class="py-2 px-4 bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
                        >
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
