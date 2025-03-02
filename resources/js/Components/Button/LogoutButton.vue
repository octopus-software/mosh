<template>
    <button
        class="flex items-center m-2 text-gray-600 bg-[#f4cc85] hover:bg-black hover:text-[#f4cc85] font-semibold
           focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
           rounded-lg text-sm w-full sm:w-auto px-7 py-3 text-center
           transition-colors duration-300
           shadow-md">
        <slot></slot>
        log out
    </button>

</template>

<script setup lang="ts">
</script>

<style scoped>

</style>
