<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { watch } from "vue";
const props = defineProps({
    books: {
        type: Object,
        default: () => ({}),
    },
    issueBooks: Object,
});

let search = ref("");
watch(search, (value) => {
    Inertia.post(
        "/student/search/book",
        { search: value },
        {
            preserveState: true,
        }
    );
});

const submit = (id) => {
    Inertia.post(`/student/book/issue`, {
        bookId: id,
    });
};
</script>
<template>
    <Head title="Search Book" />
    <frontend-layout>
        <div class="w-full bg-white md:p-12">
            <div class="header md:flex md:items-end md:justify-between mb-12">
                <div class="title">
                    <p class="text-4xl font-bold text-gray-800 mb-4">
                        All Book
                    </p>
                    <p class="text-2xl font-light text-gray-400">
                        All Available Book in our Library
                    </p>
                </div>
                <div class="text-end">
                    <form
                        class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center"
                    >
                        <div class="relative">
                            <input
                                type="text"
                                id="form-subscribe-Search"
                                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                placeholder="Enter Book name"
                                v-model="search"
                            />
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
                <div
                    class="overflow-hidden shadow-lg rounded-lg h-90 w-full md:w-80 cursor-pointer m-auto"
                    v-for="book in books.data"
                    :key="book.id"
                >
                    <a href="" disabled class="w-full block h-full">
                        <img
                            alt="blog photo"
                            src="https://www.tailwind-kit.com/images/blog/1.jpg"
                            class="max-h-40 w-full object-cover"
                        />
                        <div class="bg-white dark:bg-gray-800 w-full p-4">
                            <div
                                class="flex flex-wrap justify-starts items-center mt-4 mb-2"
                            >
                                <div
                                    class="text-xs mr-2 py-1.5 px-4 text-gray-600 bg-blue-100 rounded-2xl"
                                >
                                    {{ book.category.name }}
                                </div>
                            </div>

                            <p
                                class="text-gray-800 dark:text-white text-xl font-medium mb-2"
                            >
                                {{ book.name }}
                            </p>
                            <p
                                class="text-gray-400 dark:text-gray-300 font-light text-md"
                            >
                                Author name: {{ book.author.name }}
                            </p>
                            <p
                                class="text-gray-400 dark:text-gray-300 font-light text-md"
                            >
                                Available Copy: {{ book.no_of_copy }}
                            </p>
                            <div class="flex items-center mt-4">
                                <button
                                    class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                                    type="submit"
                                    @click.prevent="submit(book.id)"
                                >
                                    Issue Book
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <Pagination class="mt-6" :links="books.links" :meta="books.meta" />
        </div>
    </frontend-layout>
</template>
