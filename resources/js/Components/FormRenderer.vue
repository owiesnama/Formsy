<script setup>
import { FormeoRenderer } from "formeo";
import { onMounted } from "vue";
import { ref } from "vue";

const props = defineProps(["formData"]);
const formRoot = ref(null);
onMounted(() => {
    const options = {
        renderContainer: formRoot.value,
    };
    let form = JSON.parse(props.formData);
    const renderer = new FormeoRenderer(options);
    renderer.render(form);
});
</script>
<template>
    <div ref="formRoot"></div>
</template>
