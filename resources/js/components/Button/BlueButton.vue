<script setup lang="ts">
import {useSlots, defineProps} from "vue";

const slots = useSlots();

const props = defineProps<{
    text: string
}>()
</script>

<template>
    <button class="group flex items-center m-2 text-gray-600 bg-main hover:bg-gray-600 hover:text-main font-semibold
           focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
           rounded-lg text-sm w-full sm:w-auto px-3 py-2 text-center
           transition-colors duration-300
           shadow-md"
    >
        <svg v-if="slots.default"
             class="w-5 h-5 mr-1 text-gray-600 transition-colors duration-300 group-hover:text-main"
             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
             fill="currentColor" viewBox="0 0 24 24">
            <slot></slot>
        </svg>
        {{ text }}
    </button>
</template>

<style scoped>

</style>
