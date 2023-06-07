<script setup>
import { FormeoEditor } from "formeo";
import "formeo/dist/formeo.min.css";
import { onMounted } from "vue";
import { ref } from "vue";
const formRoot = ref(null);
const emit = defineEmits([
    "saved",
    "rendered",
    "added",
    "updated",
    "confirmClearAll",
]);

onMounted(() => {
    const options = {
        editorContainer: formRoot.value,
        events: {
            onSave(event) {
                emit("saved", event);
            },
            onRender(event) {
                emit("rendered", event);
            },
            onAdd(event) {
                emit("added", event);
            },
            onUpdate(event) {
                emit("updated", event);
            },
            confirmClearAll(event) {
                emit("confirmClearAll", event);
            },
        },
    };
    new FormeoEditor(options);
});
</script>
<template>
    <div ref="formRoot"></div>
</template>
