<script setup>
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import SuccessAlert from "@/Components/SuccessAlert.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    student: Object,
});

const form = useForm({
    name: props.student?.name,
    dept: props.student?.dept,
    year: props.student?.year,
    semester: props.student?.semester,
    session: props.student?.session,
    student_id: props.student?.student_id,
});

const submit = () => {
    Inertia.post(`/student/profile/`, {
        name: form.name,
        dept: form.dept,
        year: form.year,
        semester: form.semester,
        session: form.session,
        student_id: form.student_id,
    });
};
</script>

<template>
    <Head title="Student Profile" />
    <FrontendLayout>
        <div class="flex my-4 mx-4 space-x-4">
            <div class="w-full md:w-2/3">
                <div
                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <!-- Profile Details -->

                    <div class="space-y-4">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Profile
                        </h5>
                        <SuccessAlert />
                        <form @submit.prevent="submit">
                            <div class="overflow-x-auto relative">
                                <div>
                                    <label
                                        for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="John Doe"
                                        required=""
                                        v-model="form.name"
                                    />
                                </div>
                                <div class="flex flex-row gap-4">
                                    <div class="basis-2/4">
                                        <label
                                            for="dept"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            >Dept</label
                                        >
                                        <input
                                            type="text"
                                            name="dept"
                                            id="dept"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="CSE"
                                            required=""
                                            v-model="form.dept"
                                        />
                                    </div>
                                    <div class="basis-2/4">
                                        <label
                                            for="year"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            >Year</label
                                        >
                                        <input
                                            type="text"
                                            name="year"
                                            id="year"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="1st"
                                            required=""
                                            v-model="form.year"
                                        />
                                    </div>
                                </div>
                                <div class="flex flex-row gap-4">
                                    <div class="basis-2/4">
                                        <label
                                            for="semester"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            >Semester</label
                                        >
                                        <input
                                            type="text"
                                            name="semester"
                                            id="semester"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="2nd"
                                            required=""
                                            v-model="form.semester"
                                        />
                                    </div>
                                    <div class="basis-2/4">
                                        <label
                                            for="session"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                            >Session</label
                                        >
                                        <input
                                            type="text"
                                            name="session"
                                            id="session"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="2021-22"
                                            required=""
                                            v-model="form.session"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        for="student_id"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                        >Student Id</label
                                    >
                                    <input
                                        type="text"
                                        name="student_id"
                                        id="student_id"
                                        class="bg-gray-50 border mb-6 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="2100"
                                        required=""
                                        v-model="form.student_id"
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
            <div class="w-full md:w-1/2">
                <div
                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <form class="space-y-6" @submit.prevent="">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Update Status Data
                        </h5>
                        <div>
                            <label
                                for="return_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Return Date</label
                            >
                            <input
                                type="date"
                                name="return_date"
                                id="return_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="21-12-2022"
                                required
                            />
                        </div>
                        <div>
                            <label
                                for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Select Status</label
                            >
                            <select
                                id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                                <option selected>Choose Status</option>
                                <option value="accepted">Accepted</option>
                                <option value="cancel">Cancel</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>

                        <button
                            type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </FrontendLayout>
</template>
