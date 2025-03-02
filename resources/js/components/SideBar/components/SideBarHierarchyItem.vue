<template>
    <li>
        <!-- 親ボタン -->
        <button @click="toggleDropdown"
                type="button"
                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-t-lg"
                :class="{'bg-white': idDropdownOpen}">
            <svg class="w-6 h-6 text-gray-800"
                 :class="idDropdownOpen ? 'text-main' : 'text-white'"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                      :d="path"
                      clip-rule="evenodd"/>
            </svg>
            <span
                class="flex-1 ms-3 font-semibold text-left rtl:text-right whitespace-nowrap text-xl"
                :class="idDropdownOpen ? 'text-black' : 'text-white'">{{ label }}
                                        </span>

            <svg
                v-if="!idDropdownOpen"
                class="text-white w-6 h-6 text-gray-800" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="m19 9-7 7-7-7"/>
            </svg>
            <svg v-else class="w-6 h-6 text-gray-800" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                 viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="m5 15 7-7 7 7"/>
            </svg>

        </button>

        <!-- サブメニュー -->
        <ul v-show="idDropdownOpen"
            class="py-2 pr-6 space-y-2 bg-white rounded-b-lg shadow-lg">
            <slot></slot>
        </ul>
    </li>
</template>

<script setup lang="ts">
import {defineProps} from 'vue';

defineProps<{
    label: string;
    idDropdownOpen: boolean;
    toggleDropdown: () => void;
    path?: string;
}>();
</script>

<style scoped>

</style>
