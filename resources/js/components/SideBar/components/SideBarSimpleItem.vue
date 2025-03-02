<template>
    <li class="group">
        <Link :href="url ?? ''"
              class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-white group transition-colors duration-300"
              :class="currentUrl === url && 'bg-white'">
            <svg
                class="group-hover:text-main transition-colors duration-300 w-6 h-6"
                :class="currentUrl === url ? 'text-main' : 'text-gray-600'"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="currentColor" viewBox="0 0 24 24">
                <slot></slot>
            </svg>
            <span class="ms-3 text-lg text-gray-600 font-semibold transition-colors duration-300">{{ label }}</span>
        </Link>
    </li>
</template>

<script setup lang="ts">
import {Link, usePage} from '@inertiajs/vue3';
import {defineProps} from 'vue';

const page = usePage();
const currentUrl = window.location.href
const user: any = page.props.auth.user

defineProps<{
    label: string;
    url?: string
}>();

</script>

<style scoped>

</style>
