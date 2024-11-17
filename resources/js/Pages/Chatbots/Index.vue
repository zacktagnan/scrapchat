<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ChatbotsList from '@/Components/app/Chatbots/List.vue'

const props = defineProps({
    chatbots: {
        type: Array,
        required: true,
    }
})
</script>

<template>
    <AppLayout :title="$t('app.chatbots.index.section_name')">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $t('app.chatbots.index.section_name') }}
            </h2>
        </template>

        <section class="py-12" :aria-label="$t('app.chatbots.index.section_name') + ' - ' + $t('app.chatbots.list.subsection_name')">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <ChatbotsList :chatbots="chatbots" />
            </div>
        </section>
    </AppLayout>
</template>
