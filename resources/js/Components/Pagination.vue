<template>
    <div
        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
    >
        <span class="text-xs xs:text-sm text-gray-900">
            Showing {{ meta.from }} to {{ meta.to }} of {{ meta.total }} Entries
        </span>
        <div class="inline-flex mt-2 xs:mt-0">
            <Link
                v-if="links.prev !== null"
                :href="links.prev"
                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l"
            >
                Prev
            </Link>
            &nbsp; &nbsp;
            <Link
                v-if="links.next !== null"
                :href="links.next"
                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r"
            >
                Next
            </Link>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    props: {
        links: Object,
        meta: Object,
    },
    components: {
        Link,
    },
};
</script>
