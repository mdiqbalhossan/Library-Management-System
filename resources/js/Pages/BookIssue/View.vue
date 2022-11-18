<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    issue: Object,
    book: Object,
});

const statusForm = useForm({
    return_date: "",
    status: "",
});

const returnForm = useForm({
    returned_date: "",
    fine_received: "",
});

const statusUpdate = () => {
    Inertia.post(`/admin/issue/book/status/${props.issue.data.id}`, {
        return_date: statusForm.return_date,
        status: statusForm.status,
    });
};

const returnUpdate = () => {
    Inertia.post(`/admin/issue/book/returned/${props.issue.data.id}`, {
        returned_date: returnForm.returned_date,
        fine_received: returnForm.fine_received,
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Issue Book view" />
        <div class="flex my-4 mx-4 space-x-4">
            <div class="w-full md:w-2/3">
                <div
                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <!-- Book Details -->
                    <div class="space-y-4">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Book Details
                        </h5>

                        <div class="overflow-x-auto relative">
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Book Name
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ book.data.name }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            ISBN Number
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ book.data.isbn_no }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Category
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ book.data.category.name }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Author
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ book.data.author.name }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Location
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ book.data.location.name }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Student Details -->
                    <div class="space-y-4 my-2">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Student Details
                        </h5>

                        <div class="overflow-x-auto relative">
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Name
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.name }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Dept
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.dept }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Year
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.year }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Semester
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.semester }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Session
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.session }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Student ID
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.student.student_id }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Issue Details -->
                    <div class="space-y-4 my-2">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Book Issue Details
                        </h5>

                        <div class="overflow-x-auto relative">
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Apply Date
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.apply_date }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Issue Date
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.issue_date }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Return Date
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.return_date }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Fine
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.late_return_fine }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Unique Id
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.unique_id }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Status
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.status }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Returned Date
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.returned_date }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="py-2 text-lg px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                        >
                                            Fine Received
                                        </th>
                                        <td class="py-2 text-lg px-6">
                                            {{ issue.data.fine_received }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div
                    class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <form class="space-y-6" @submit.prevent="statusUpdate">
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
                                v-model="statusForm.return_date"
                            />
                        </div>
                        <div>
                            <label
                                for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Select Status</label
                            >
                            <select
                                v-model="statusForm.status"
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
                <div
                    class="w-full p-4 mt-2 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <form class="space-y-6" @submit.prevent="returnUpdate">
                        <h5
                            class="text-xl font-medium text-gray-900 dark:text-white"
                        >
                            Update Returned Data
                        </h5>
                        <div>
                            <label
                                for="return_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Returned Date</label
                            >
                            <input
                                type="date"
                                name="return_date"
                                id="return_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="21-12-2022"
                                required
                                v-model="returnForm.returned_date"
                            />
                        </div>
                        <div>
                            <label
                                for="fine_recived"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                >Fines Received</label
                            >
                            <input
                                type="number"
                                name="fine_recived"
                                id="fine_recived"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="50"
                                v-model="returnForm.fine_received"
                            />
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
    </AuthenticatedLayout>
</template>
