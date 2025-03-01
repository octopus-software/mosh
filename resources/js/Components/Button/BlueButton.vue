<template>
    <button
        class="flex items-center m-2 text-black bg-[#f4cc85] hover:bg-black hover:text-[#f4cc85]
           focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
           rounded-lg text-sm w-full sm:w-auto px-7 py-3 text-center
           transition-colors duration-300
           shadow-lg shadow-gray-400/50">
        <slot></slot>
        {{ text }}
    </button>

</template>

<script setup lang="ts">
import {defineProps} from "vue";

const props = defineProps<{
    text: string
}>()
</script>

<style scoped>

</style>
