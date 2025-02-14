<template>
    <div class="my-6">
        <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">
            <b>あなたの考えに近い方を選択してください</b>
        </h3>
        <ul class="grid w-full gap-6 md:grid-cols-2">
            <li>
                <input
                    type="radio"
                    :id="enneagram_question.answer_a"
                    :name="'enneagram_question_' + enneagram_question.id"
                    :value="enneagram_question.a_value"
                    class="hidden peer"
                    v-model="localValue"
                    required
                />
                <label
                    :for="enneagram_question.answer_a"
                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 border-2"
                >
                    <div class="block">
                        <div class="w-full text-lg font-semibold">{{ enneagram_question.answer_a }}</div>
                    </div>
                </label>
            </li>
            <li>
                <input
                    type="radio"
                    :id="enneagram_question.answer_b"
                    :name="'enneagram_question_' + enneagram_question.id"
                    :value="enneagram_question.b_value"
                    class="hidden peer"
                    v-model="localValue"
                >
                <label
                    :for="enneagram_question.answer_b"
                    class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 border-2"
                >
                    <div class="block">
                        <div class="w-full text-lg font-semibold">{{ enneagram_question.answer_b }}</div>
                    </div>
                </label>
            </li>
        </ul>
        <hr class="my-10 border-gray-900">
    </div>
</template>

<script setup lang="ts">
import {defineProps, defineEmits, ref, watch} from 'vue';
import {EnneagramQuestionType} from "@/types/domain/Enneagram";

const props = defineProps<{
    enneagram_question: EnneagramQuestionType
}>();

const emit = defineEmits(['update:modelValue']);

const localValue = ref('');

watch(localValue, (newValue) => {
    emit('update:modelValue', { id: props.enneagram_question.id, value: newValue });
});

</script>

<style scoped>

</style>
