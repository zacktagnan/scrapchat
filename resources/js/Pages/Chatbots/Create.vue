<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import ChatbotsCreate from '@/Components/app/Chatbots/Create.vue'

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <AppLayout :title="`${$t('app.chatbots.index.section_name')} :: ${$t('app.chatbots.actions.create.title')}`">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $t('app.chatbots.index.section_name') }}
            </h1>
        </template>

        <section class="py-12" :aria-label="$t('app.chatbots.actions.create.aria_label')">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <ChatbotsCreate :chatbot="chatbot" />
            </div>
        </section>
    </AppLayout>
</template>
