<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    category: Object,
});

const form = useForm({
    name: props.category?.name,
});

const submit = () => {
    Inertia.post(`/admin/category/${props.category.id}`, {
        _method: "PUT",
        name: form.name,
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Category Edit" />
        <div
            class="p-4 w-full max-w-sm bg-white rounded-lg border mx-auto my-10 border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
        >
            <form class="space-y-6" @submit.prevent="submit">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">
                    Edit Category
                </h5>
                <div>
                    <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >Category Name</label
                    >
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Laravel"
                        required=""
                        v-model="form.name"
                    />
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
