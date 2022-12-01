<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- component -->
    <!-- This is an example component -->
    <div>
        <!-- Nav Bar -->
        <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button
                            id="toggleSidebarMobile"
                            aria-expanded="true"
                            aria-controls="sidebar"
                            class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded"
                            @click="
                                showingNavigationDropdown =
                                    !showingNavigationDropdown
                            "
                        >
                            <svg
                                id="toggleSidebarMobileHamburger"
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <svg
                                id="toggleSidebarMobileClose"
                                class="w-6 h-6 hidden"
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
                        </button>
                        <Link
                            :href="route('dashboard')"
                            class="text-xl font-bold flex items-center lg:ml-2.5"
                        >
                            <span
                                class="self-center whitespace-nowrap text-3xl font-bold font-serif text-gray-800"
                                >LMS</span
                            >
                        </Link>
                        <form
                            action="#"
                            method="GET"
                            class="hidden lg:block lg:pl-32"
                        >
                            <label for="topbar-search" class="sr-only"
                                >Search</label
                            >
                            <div class="mt-1 relative lg:w-64">
                                <div
                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                                >
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    name="email"
                                    id="topbar-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                                    placeholder="Search"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center">
                        <button
                            id="toggleSidebarMobileSearch"
                            type="button"
                            class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg"
                            @click="
                                showingNavigationDropdown =
                                    !showingNavigationDropdown
                            "
                        >
                            <span class="sr-only">Search</span>
                            <svg
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="flex items-center md:order-2 cursor-pointer"
                            @click="
                                showingNavigationDropdown =
                                    !showingNavigationDropdown
                            "
                        >
                            <img
                                class="w-8 h-8 rounded-full"
                                src="../../assets/user.png"
                                alt="user photo"
                            />
                            <p class="text-gray-800 font-semibold px-2">
                                {{ $page.props.auth.user.name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- NavBar -->
        <div class="flex overflow-hidden bg-white pt-16">
            <!-- SideBar -->
            <aside
                id="sidebar"
                class="fixed z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
                aria-label="Sidebar"
                :class="{ hidden: !showingNavigationDropdown }"
            >
                <div
                    class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0"
                >
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex-1 px-3 bg-white divide-y space-y-1">
                            <ul class="space-y-2 pb-2">
                                <li>
                                    <form
                                        action="#"
                                        method="GET"
                                        class="lg:hidden"
                                    >
                                        <label
                                            for="mobile-search"
                                            class="sr-only"
                                            >Search</label
                                        >
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                                            >
                                                <svg
                                                    class="w-5 h-5 text-gray-500"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <input
                                                type="text"
                                                name="email"
                                                id="mobile-search"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                                placeholder="Search"
                                            />
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <Link
                                        :href="route('dashboard')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/dashboard'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"
                                            ></path>
                                            <path
                                                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Dashboard</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('category.index')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/category'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Category</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('author.index')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/author'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Author</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('location.index')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/location'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Location Rack</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('book.index')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/book'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Book</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('student.index')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/student'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Student</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('book.issue')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/issue/book'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"
                                            ></path>
                                            <path
                                                fill-rule="evenodd"
                                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Issue Book</span>
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        :href="route('settings')"
                                        class="text-base font-normal rounded-lg flex items-center p-2 group"
                                        :class="{
                                            active: $page.url.startsWith(
                                                '/admin/setting'
                                            ),
                                        }"
                                    >
                                        <svg
                                            class="w-6 h-6"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        <span class="ml-3">Settings</span>
                                    </Link>
                                </li>
                            </ul>
                            <div class="space-y-2 pt-2">
                                <a
                                    href="#"
                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2"
                                >
                                    <svg
                                        class="w-6 h-6"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                    <Link
                                        :href="route('logout')"
                                        method="post"
                                        as="button"
                                        class="ml-4"
                                        >Logout</Link
                                    >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Sidebar -->
            <div
                class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10"
                id="sidebarBackdrop"
            ></div>
            <div
                id="main-content"
                class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64"
            >
                <main>
                    <slot />
                </main>
                <p class="text-center text-sm text-gray-500 my-10">
                    &copy; 2022
                    <a href="#" class="hover:underline" target="_blank"
                        >Library Management System</a
                    >. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</template>
