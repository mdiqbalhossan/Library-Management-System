<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import SuccessAlert from "@/Components/SuccessAlert.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

import { Inertia } from "@inertiajs/inertia";
import { watch } from "vue";

const showModal = ref(false);
const id = "";
const props = defineProps({
    issueBooks: {
        type: Object,
        default: () => ({}),
    },
});

let search = ref("");
watch(search, (value) => {
    Inertia.post(
        "/admin/issue/book",
        { search: value },
        {
            preserveState: true,
        }
    );
});
</script>

<template>
    <Head title="Books" />
    <authenticated-layout>
        <div class="bg-white p-8 rounded-md w-full">
            <div class="flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold">Issue Books</h2>
                    <span class="text-xs">All Issue Books</span>
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
                            v-model="search"
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
                                        ISBN NO
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Student Roll
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Issue ID
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Issue Date
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Return Date
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Fine
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        status
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
                                    v-for="book in issueBooks.data"
                                    :key="book.id"
                                >
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.book.isbn_no }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.student.student_id }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.unique_id }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.issue_date }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.return_date }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            {{ book.late_return_fine }}
                                        </p>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <span
                                            class="bg-indigo-100 text-indigo-800 text-sm font-medium mr-2 px-5 py-1 rounded dark:bg-indigo-200 dark:text-indigo-900"
                                            >{{ book.status }}</span
                                        >
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        <p
                                            class="text-gray-900 whitespace-no-wrap"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'book.issue.view',
                                                        book.id
                                                    )
                                                "
                                                type="button"
                                                class="bg-teal-600 hover:bg-teal-800 px-1 py-1 mx-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                                            >
                                                <svg
                                                    class="w-6 h-6"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M10 12a2 2 0 100-4 2 2 0 000 4z"
                                                    ></path>
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd"
                                                    ></path>
                                                </svg>
                                            </Link>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <Pagination
                            class="mt-6"
                            :links="issueBooks.links"
                            :meta="issueBooks.meta"
                        />
                    </div>
                </div>
            </div>
        </div>
    </authenticated-layout>
</template>
