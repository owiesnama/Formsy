<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FormBuilder from "@/Components/FormBuilder.vue";
import { useForm } from "@inertiajs/vue3";
import { Head } from "@inertiajs/vue3";
const submit = (event) => {
    useForm({
        form: event.formData,
    }).post(route("forms.store"));
};
</script>
<template>
    <Head title="Create a new form" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div
                    class="bg-white shadow-sm my-4 sm:rounded-lg  sm:w-full"
                >
                    <form action="" class="p-4 sm:p-8 overflow-scroll">
                        <FormBuilder class="min-w-[450px]" @saved="submit"></FormBuilder>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
