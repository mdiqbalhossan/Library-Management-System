<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    author: Object,
});

const form = useForm({
    name: props.author.data?.name,
    status: props.author.data?.status,
});

const submit = () => {
    Inertia.post(`/admin/author/${props.author.data.id}`, {
        _method: "PUT",
        name: form.name,
        status: form.status,
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Author Edit" />
        <div
            class="p-4 w-full max-w-sm bg-white rounded-lg border mx-auto my-10 border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
        >
            <form class="space-y-6" @submit.prevent="submit">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">
                    Edit Author
                </h5>
                <div>
                    <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Author Name</label
                    >
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="John Doe"
                        required=""
                        v-model="form.name"
                    />
                </div>
                <div>
                    <label
                        for="small"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                        >Select Status</label
                    >
                    <select
                        id="small"
                        v-model="form.status"
                        class="block p-2 mb-6 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                        <option selected>Choose a Status</option>
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
                </div>
                <div class="mb-10">
                    <input
                        type="submit"
                        value="Update"
                        class="w-full cursor-pointer text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                    />
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
