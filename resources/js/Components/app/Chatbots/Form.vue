<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'
import TextArea from '@/Components/TextArea.vue'
import SelectInput from '@/Components/SelectInput.vue'

defineProps({
    form: {
        type: Object,
        required: true,
    },
})

const modelOptions = [
    { label: 'gpt-4o', value: 'gpt-4o' },
    { label: 'gpt-4o-mini', value: 'gpt-4o-mini' },
    { label: 'gpt-4', value: 'gpt-4' },
    { label: 'gpt-4-turbo', value: 'gpt-4-turbo' },
    { label: 'gpt-3', value: 'gpt-3' },
    { label: 'gpt-3-turbo', value: 'gpt-3-turbo' },
]
</script>

<template>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="name" value="Nombre" />
        <TextInput id="name" v-model="form.name" class="mt-1 block w-full" />
        <InputError :message="form.errors.name" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="system_prompt" value="System Prompt" />
        <TextArea id="system_prompt" v-model="form.system_prompt" class="mt-1 block w-full" />
        <InputError :message="form.errors.system_prompt" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="model" value="Modelo" />
        <SelectInput id="model" v-model="form.model" :options="modelOptions" placeholder="Seleccionar un modelo"
            class="mt-1 block w-full" />
        <InputError :message="form.errors.model" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="temperature" value="Temperatura" />
        <TextInput id="temperature" type="number" max="1" min="0" step="0.1" v-model="form.temperature"
            class="mt-1 block w-full" />
        <InputError :message="form.errors.temperature" class="mt-1" />
    </div>
</template>
