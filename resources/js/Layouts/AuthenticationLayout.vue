<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <div
        class="flex w-full mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 min-h-screen"
    >
        <div
            class="hidden bg-cover lg:block lg:w-1/2 border-r"
            style="background-image: url('/imgs/login.jpg')"
        ></div>

        <div class="flex flex-col items-center flex-1 justify-center">
            <nav class="w-full text-center p-8">
                <Link
                    :href="route('login')"
                    as="button"
                    :class="
                        route().current('login') ? 'bg-gray-100' : 'bg-white'
                    "
                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-l-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                    >Login</Link
                >
                <Link
                    :href="route('register')"
                    as="button"
                    :class="
                        route().current('register') ? 'bg-gray-100' : 'bg-white'
                    "
                    class="inline-flex items-center px-4 py-2 border border-l-0 border-gray-300 rounded-r-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                    >Register</Link
                >
            </nav>
            <slot></slot>
        </div>
    </div>
</template>
