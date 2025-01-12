<script setup>
import ChatbotsItem from '@/Components/app/Chatbots/Item.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { PlusIcon } from '@heroicons/vue/24/outline'

defineProps({
    chatbots: {
        type: Array,
        required: true,
    },
})
</script>

<template>
    <div class="flex justify-between items-center mx-4">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 leading-tight">
            {{ $t('app.chatbots.list.subsection_name') }}
        </h2>

        <PrimaryButton :aria-label="$t('app.chatbots.index.create.label')" :href="route('chatbots.create')">
            <PlusIcon class="size-4" />
            <span>{{ $t('app.chatbots.index.create.btn') }}</span>
        </PrimaryButton>
    </div>

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
