<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import DangerButton from '@/Components/DangerButton.vue'
import { usePage } from '@inertiajs/vue3'
import { dayjsWithLocale } from '@/Utils/dayjs'

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
    <section class="border-gray-200 p-5 dark:border-gray-700" :aria-label="chatbot.name">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div>
                <div class="text-gray-800 dark:text-gray-200">{{ chatbot.name }} [{{ appLocale }}]</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">{{ dayjs(chatbot.created_at).fromNow() }}</div>
            </div>

            <div class="flex space-x-2 mt-3 md:mt-0">
                <PrimaryButton class="text-cyan-400 dark:text-cyan-800" :href="route('chatbots.index')" :aria-label="'Ver Chatbot'">
                    Ver
                </PrimaryButton>
                <SecondaryButton :href="route('chatbots.index')" aria-label="'Editar'">
                    Editar
                </SecondaryButton>
                <DangerButton aria-label="'Eliminar'">
                    Eliminar
                </DangerButton>
            </div>
        </div>
    </section>
</template>
