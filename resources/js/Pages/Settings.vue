<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SuccessAlert from "@/Components/SuccessAlert.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import InputError from "@/Components/InputError.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    setting: Object,
});

const form = useForm({
    library_name: props.setting?.library_name,
    library_address: props.setting?.library_address,
    library_phone: props.setting?.library_phone,
    library_email: props.setting?.library_email,
    fines: props.setting?.fines,
});

const submit = () => {
    Inertia.post(`/admin/setting/`, {
        library_name: form.library_name,
        library_address: form.library_address,
        library_phone: form.library_phone,
        library_email: form.library_email,
        fines: form.fines,
    });
};
</script>

<template>
    <Head title="Student Profile" />
    <AuthenticatedLayout>
        <div class="mx-auto my-4 w-full max-w-lg">
            <SuccessAlert />
        </div>
        <div class="space-y-4 md:flex my-4 md:mx-4 md:space-x-4 md:space-y-0">
            <div class="w-full max-w-lg mx-auto">
                <div
                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <!-- Profile Details -->

                    <div class="space-y-4">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Settings
                        </h5>

                        <form @submit.prevent="submit">
                            <div class="overflow-x-auto relative">
                                <div>
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Library Name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="John Doe"
                                        required=""
                                        v-model="form.library_name"
                                    />
                                </div>
                                <div>
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Library Address</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="John Doe"
                                        required=""
                                        v-model="form.library_address"
                                    />
                                </div>
                                <div>
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Library Phone</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="John Doe"
                                        required=""
                                        v-model="form.library_phone"
                                    />
                                </div>
                                <div>
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Library Email</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="John Doe"
                                        required=""
                                        v-model="form.library_email"
                                    />
                                </div>
                                <div>
                                    <label
                                        for="student_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Late Return Fine (Tk/Per Day)</label
                                    >
                                    <input
                                        type="number"
                                        name="student_id"
                                        id="student_id"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="2100"
                                        required=""
                                        v-model="form.fines"
                                    />
                                </div>
                            </div>
                            <div class="mb-10">
                                <input
                                    type="submit"
                                    value="Update"
                                    class="w-20 cursor-pointer text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
