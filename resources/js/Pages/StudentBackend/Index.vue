<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import SuccessAlert from "@/Components/SuccessAlert.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
const showModal = ref(false);
const id = "";
defineProps({
    students: Object,
});
</script>

<template>
    <Head title="Student" />
    <authenticated-layout>
        <div class="bg-white p-8 rounded-md w-full">
            <div class="flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold">Student</h2>
                    <span class="text-xs">All Student</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex bg-gray-50 items-center p-2 rounded-md">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <input
                            class="bg-gray-50 outline-none ml-1 block"
                            type="text"
                            name=""
                            id=""
                            placeholder="search..."
                        />
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <SuccessAlert />
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div
                        class="inline-block min-w-full shadow rounded-lg overflow-hidden"
                    >
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        ID
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Dept
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Year
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Session
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Session
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="student in students.data"
                                    :key="student.id"
                                >
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.student_id }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.name }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.dept }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.year }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.semester }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ student.session }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            <button
                                                type="button"
                                                class="bg-red-600 hover:bg-red-800 px-1 py-1 mx-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                                                @click="
                                                    (showModal = !showModal),
                                                        (id = student.id)
                                                "
                                            >
                                                <svg
                                                    class="w-6 h-6"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <Pagination
                            class="mt-6"
                            :links="students.links"
                            :meta="students.meta"
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div
            id="popup-modal"
            tabindex="-1"
            class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 xl:left-auto z-50 md:inset-0 h-modal md:h-full"
            :class="{ hidden: !showModal }"
        >
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div
                    class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                >
                    <button
                        type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="popup-modal"
                        @click="showModal = !showModal"
                    >
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
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            ></path>
                        </svg>
                        <h3
                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
                        >
                            Are you sure you want to delete this product?
                        </h3>
                        <Link
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                            as="button"
                            method="delete"
                            :href="route('student.destroy', id)"
                            @click="showModal = !showModal"
                        >
                            Yes, I'm sure
                        </Link>
                        <button
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            @click="showModal = !showModal"
                        >
                            No, cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </authenticated-layout>
</template>
