<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import ChatbotsDetail from '@/Components/app/Chatbots/Detail.vue'
import KnowledgeSourcesModal from '@/Components/app/KnowledgeSources/Modal.vue'
import { ref } from 'vue'

const props = defineProps({
    chatbot: {
        type: Object,
        required: true,
    }
})

const showModal = ref(false)

const openKnowledgeModal = () => {
    showModal.value = true
}

const closeKnowledgeModal = () => {
    showModal.value = false
}
</script>

<template>
    <AppLayout :title="`${$t('app.chatbots.index.section_name')} :: ${chatbot.name}`">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $t('app.chatbots.index.section_name') }}
            </h1>
        </template>

        <section class="py-12" :aria-label="`Chatbot ${chatbot.name}`">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <ChatbotsDetail :chatbot="chatbot" @call-open-knowledge-modal="openKnowledgeModal" />
            </div>

            <KnowledgeSourcesModal :show="showModal" @call-close-knowledge-modal="closeKnowledgeModal" />
        </section>
    </AppLayout>
</template>
