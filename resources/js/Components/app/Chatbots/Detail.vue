<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import { ArrowUturnLeftIcon, PencilIcon, ChatBubbleBottomCenterIcon, BookOpenIcon } from '@heroicons/vue/24/outline'
import { Link, usePage } from '@inertiajs/vue3'
import { dayjsWithLocale } from '@/Utils/dayjs'

const appLocale = usePage().props.appLocale
const dayjs = dayjsWithLocale(appLocale)

defineProps({
    chatbot: {
        type: Object,
        required: true,
    },
})

const emit = defineEmits(['callOpenKnowledgeModal'])
</script>

<template>
    <Link :href="route('chatbots.index')"
        class="flex items-center space-x-2 ml-4 text-sm text-gray-600 hover:underline dark:text-gray-400"
        :aria-label="$t('app.chatbots.actions.back_to_list')">
    <ArrowUturnLeftIcon class="size-4" />
    <span>{{ $t('app.chatbots.actions.back_to_list') }}</span>
    </Link>

    <div class="overflow-hidden rounded-lg shadow-lg mt-4">
        <section class="bg-white p-5 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <!-- Información principal del chatbot -->
                <div class="space-y-4">
                    <h3 class="text-lg font-extrabold leading-5 text-gray-800 md:text-2xl dark:text-gray-200">
                        {{ chatbot.name }}
                    </h3>
                    <div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">
                            System Prompt:
                        </span>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ chatbot.system_prompt }}
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">
                                Temperatura:
                            </span>
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ chatbot.temperature }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">
                                Modelo:
                            </span>
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ chatbot.model }}
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">
                                Creación:
                            </span>
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ dayjs(chatbot.created_at).format('DD-MMM-YYYY HH:mm') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="mt-6 flex gap-3 md:mt-0">
                    <SecondaryButton :href="route('chatbots.edit', chatbot.id)" aria-label="Edit Chatbot">
                        <PencilIcon class="size-4"></PencilIcon>
                        <span>Editar</span>
                    </SecondaryButton>
                    <PrimaryButton href="#" aria-label="Chat with Chatbot">
                        <ChatBubbleBottomCenterIcon class="size-4" />
                        <span>Chat</span>
                    </PrimaryButton>
                    <PrimaryButton @click="emit('callOpenKnowledgeModal')" aria-label="Agregar fuente de conocimiento">
                        <BookOpenIcon class="size-4" />
                        <span>Fuente</span>
                    </PrimaryButton>
                </div>
            </div>
        </section>
    </div>
</template>
