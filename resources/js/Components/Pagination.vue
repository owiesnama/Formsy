<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Array,
});
</script>
<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap mt-8">
            <template v-for="(link, key) in links" :key="key">
                <div
                    v-if="link.url === null"
                    class="px-4 py-2.5 cursor-not-allowed mb-1 mr-1 text-sm leading-4 text-gray-400 border rounded-md"
                    v-html="link.label"
                ></div>

                <Link
                    v-else
                    class="px-4 py-2.5 hover:bg-gray-100 mb-1 mr-1 text-sm leading-4 border rounded-md focus:border-primary focus:text-primary"
                    :class="{ 'bg-white': link.active }"
                    :href="link.url"
                    :preserve-state="true"
                    v-html="link.label"
                />
            </template>
        </div>
    </div>
</template>
