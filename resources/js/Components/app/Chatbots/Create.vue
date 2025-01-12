<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { ArrowUturnLeftIcon } from '@heroicons/vue/24/outline'
import { Link } from '@inertiajs/vue3'
import FormSection from '@/Components/FormSection.vue'
import Form from '@/Components/app/Chatbots/Form.vue'
import { chatbotForm, store } from '@/Forms/chatbot'

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
})

const form = chatbotForm(props.chatbot)

const handleSubmit = () => {
    store(form)
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
