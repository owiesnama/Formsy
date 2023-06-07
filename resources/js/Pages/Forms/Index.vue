<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FormRenderer from "@/Components/FormRenderer.vue";
import { Link , Head} from "@inertiajs/vue3";

defineProps({
    forms: {
        required: true,
    },
});
</script>
<template>
    <Head title="My Forms" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="text-right">
                    <Link
                        as="button"
                        :href="route('forms.create')"
                        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                        >Create a new form</Link
                    >
                </div>
                <div
                    v-for="form in forms"
                    :key="form.id"
                    class="bg-white shadow-sm my-4 sm:rounded-lg w-1/3 sm:w-full relative max-h-[300px] overflow-hidden"
                >
                    <div
                        class="absolute mx-auto mb-0 bottom-0 bg-gradient-to-t from-gray-50 h-[200px]  w-1/3 sm:w-full flex items-end justify-center z-10"
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
            </div>
        </div>
    </AuthenticatedLayout>
</template>
