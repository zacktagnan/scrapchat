<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <img src="/img/scrapchat-logo.png" class="w-16 h-16" :alt="$page.props.appName + ' - Logo'">
    </Link>
</template>
