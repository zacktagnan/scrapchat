<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import { ArrowUturnLeftIcon, PencilIcon, ChatBubbleBottomCenterIcon } from '@heroicons/vue/24/outline'
import { Link, usePage } from '@inertiajs/vue3'
import { dayjsWithLocale } from '@/Utils/dayjs'
import FormSection from '@/Components/FormSection.vue'
import ActionMessage from '@/Components/ActionMessage.vue'

const appLocale = usePage().props.appLocale
const dayjs = dayjsWithLocale(appLocale)

defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <FormSection>
        <template #title>{{ $t('app.chatbots.actions.edit.header.title') }}</template>
        <template #description>{{ $t('app.chatbots.actions.edit.header.description') }}</template>
        <template v-slot:backTo>
            <Link
                :href="route('chatbots.index')"
                class="flex items-center space-x-2 mr-4 md:ml-4 text-sm text-gray-600 hover:underline dark:text-gray-400"
                :aria-label="$t('app.chatbots.actions.back_to_list')"
            >
                <ArrowUturnLeftIcon class="size-4" />
                <span>{{ $t('app.chatbots.actions.back_to_list') }}</span>
            </Link>
        </template>
        <template #form>FORM</template>
        <template #actions>
            <ActionMessage :on="false" class="me-3">{{ $t('app.chatbots.actions.edit.actions.updated') }}</ActionMessage>
            <PrimaryButton
                :aria-label="$t('app.chatbots.actions.edit.actions.save_changes')"
                :class="{
                    'cursor-not-allowed opacity-50': false
                }"
                :disabled="false"
            >
                {{ $t('app.chatbots.actions.edit.actions.save_changes') }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>
