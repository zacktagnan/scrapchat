<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

import { twMerge } from 'tailwind-merge';

const props = defineProps({
    href: {
        type: String,
        default: '',
    },
    ariaLabel: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: 'submit',
    },
    class: {
        type: String,
        default: '',
    },
    defaultClasses: {
        type: String,
        default: 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150',
    },
});

const mergeClasses = computed(() => {
    return twMerge(
        props.defaultClasses,
        props.class
    )
})
</script>

<template>
    <Link v-if="href" :href="href" :aria-label="ariaLabel" :class="mergeClasses">
        <slot />
    </Link>
    <button v-else :type="type" :aria-label="ariaLabel" :class="mergeClasses">
        <slot />
    </button>
</template>
