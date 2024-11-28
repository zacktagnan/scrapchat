<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import ChatbotsEdit from '@/Components/app/Chatbots/Edit.vue'

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <AppLayout :title="`${$t('app.chatbots.index.section_name')} :: ${$t('app.chatbots.actions.edit.title')} ${chatbot.name}`">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $t('app.chatbots.index.section_name') }}
            </h1>
        </template>

        <section class="py-12" :aria-label="$t('app.chatbots.actions.edit.aria_label')">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <ChatbotsEdit :chatbot="chatbot" />
            </div>
        </section>
    </AppLayout>
</template>
