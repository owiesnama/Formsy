<script setup>
import Pagination from "@/Components/Pagination.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FormRenderer from "@/Components/FormRenderer.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps(["forms"]);
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Recent published forms
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div
                    v-for="form in forms.data"
                    :key="form.id"
                    class="p-2 md:mx-0 md:p-0 bg-white shadow-sm my-4 sm:rounded-lg w-full relative max-h-[300px] overflow-hidden"
                >
                    <div
                        class="absolute mb-0 bottom-0 bg-gradient-to-t from-gray-50 h-[200px] -mx-2 w-full flex items-end justify-center z-10"
                    >
                        <Link
                            :href="route('forms.show', form.id)"
                            class="pb-4 underline text-indigo-800"
                            >Show Form</Link
                        >
                    </div>
                    <form action="" class="p-4 sm:p-8">
                        <FormRenderer :form-data="form.form" />
                    </form>
                </div>
                <div>
                    <Pagination :links="forms.links"></Pagination>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
