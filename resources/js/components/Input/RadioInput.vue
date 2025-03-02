<script setup lang="ts">
import {computed, defineEmits, defineProps} from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps<{
    label: string;
    checked: string | number;
    value: string | number;
}>();

const proxyChecked = computed({
    get() {
        return props.checked;
    },
    set(val) {
        emit('update:checked', val);
    },
});
</script>

<template>
    <div class="flex items-center">
        <input
            :id="label"
            type="radio"
            :value="value"
            v-model="proxyChecked"
            class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
        />
        <label :for="label" class="ml-2">{{ label }}</label>
    </div>
</template>
