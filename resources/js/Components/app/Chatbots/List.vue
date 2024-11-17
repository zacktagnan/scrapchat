<script setup>
import ChatbotsItem from '@/Components/app/Chatbots/Item.vue'

defineProps({
    chatbots: {
        type: Array,
        required: true,
    },
})
</script>

<template>
    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 leading-tight ml-2">
        {{ $t('app.chatbots.list.subsection_name') }}
    </h3>

    <div class="divide-y bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg mt-4">
        <template v-if="chatbots.length">
            <ChatbotsItem v-for="chatbot in chatbots" :key="chatbot.id" :chatbot="chatbot" />
        </template>
        <template v-else>
            <p class="text-center">
                {{ $t('app.chatbots.list.main.no_registers') }}
            </p>
        </template>
    </div>
</template>
