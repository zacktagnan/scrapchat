<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { ArrowUturnLeftIcon } from '@heroicons/vue/24/outline'
import { Link, useForm } from '@inertiajs/vue3'
import FormSection from '@/Components/FormSection.vue'
import Form from '@/Components/app/Chatbots/Form.vue'

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
})

const form = useForm({
    name: props.chatbot.name,
    system_prompt: props.chatbot.system_prompt,
    model: props.chatbot.model,
    temperature: String(props.chatbot.temperature),
})

const handleSubmit = () => {
    // console.log('FORM_DATA', form.data())
    form.post(route('chatbots.store'), {
        preserveScroll: true,
    })
}
</script>

<template>
    <FormSection @submitted="handleSubmit">
        <template #title>{{ $t('app.chatbots.actions.create.header.title') }}</template>
        <template #description>{{ $t('app.chatbots.actions.create.header.description') }}</template>
        <template v-slot:backTo>
            <Link :href="route('chatbots.index')"
                class="flex items-center space-x-2 mr-4 md:ml-4 text-sm text-gray-600 hover:underline dark:text-gray-400"
                :aria-label="$t('app.chatbots.actions.back_to_list')">
            <ArrowUturnLeftIcon class="size-4" />
            <span>{{ $t('app.chatbots.actions.back_to_list') }}</span>
            </Link>
        </template>
        <template #form>
            <Form :form="form" />
        </template>
        <template #actions>
            <PrimaryButton :aria-label="$t('app.chatbots.actions.create.actions.save_changes')" :class="{
                'cursor-not-allowed opacity-50': form.processing
            }" :disabled="form.processing">
                {{ $t('app.chatbots.actions.create.actions.save_changes') }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
