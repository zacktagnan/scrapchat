<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    form: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="name" value="Nombre" />
        <TextInput id="name" v-model="form.name"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.name" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="system_prompt" value="System Prompt" />
        <TextInput id="system_prompt" v-model="form.system_prompt"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.system_prompt" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="model" value="Modelo" />
        <TextInput id="model" v-model="form.model"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.model" class="mt-1" />
    </div>

    <div class="col-span-6 sm:col-span-4">
        <InputLabel for="temperature" value="Temperatura" />
        <TextInput id="temperature" type="number" max="1" min="0" step="0.1" v-model="form.temperature"
            class="mt-1 block w-full"
        />
        <InputError :message="form.errors.temperature" class="mt-1" />
    </div>
</template>
