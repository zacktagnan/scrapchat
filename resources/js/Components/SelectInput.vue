<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
    options: {
        type: Array,
        required: true,
    },
    placeholder: {
        type: String,
        default: 'Seleccionar una opción',
    }
});

defineEmits(['update:modelValue']);

const select = ref(null);

onMounted(() => {
    if (select.value.hasAttribute('autofocus')) {
        select.value.focus();
    }
});

defineExpose({ focus: () => select.value.focus() });
</script>

<template>
    <select ref="select"
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        :value="modelValue" @change="$emit('update:modelValue', $event.target.value)">
        <option value="" disabled>{{ placeholder }}</option>
        <option v-for="(option, index) in options" :key="`${option.value}-${index}`" :value="option.value">{{
            option.label }}</option>
    </select>
</template>
