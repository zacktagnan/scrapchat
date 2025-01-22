<script setup>
import DialogModal from '@/Components/DialogModal.vue'

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
})

const emit = defineEmits(['callCloseKnowledgeModal'])
</script>

<template>
    <DialogModal :show="show" @close="emit('callCloseKnowledgeModal')">
        <template #title>
            Agregar Fuente de Conocimiento
        </template>
        <template #content>
            Campos de FORM
        </template>
        <template #footer>
            Botones
        </template>
    </DialogModal>
</template>
