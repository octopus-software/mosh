<template>
    <div class="my-6">
        <ul class="grid w-full gap-6 md:grid-cols-2">
            <li>
                <input
                    type="radio"
                    :id="desired_seeker_question_pair[0].id.toString()"
                    :name="'desired_seeker_question_' + index"
                    :value="desired_seeker_question_pair[0].id"
                    class="hidden peer"
                    v-model="localValue"
                    @click="toggleSelection(desired_seeker_question_pair[0].id)"
                    required
                />
                <label
                    :for="desired_seeker_question_pair[0].id.toString()"
                    class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 border-2"
                >
                    <div class="block">
                        <div class="w-full text-lg font-semibold">{{ desired_seeker_question_pair[0].question_text }}</div>
                    </div>
                </label>
            </li>
            <li>
                <input
                    type="radio"
                    :id="desired_seeker_question_pair[1].id.toString()"
                    :name="'desired_seeker_question_' + index"
                    :value="desired_seeker_question_pair[1].id"
                    class="hidden peer"
                    v-model="localValue"
                    @click="toggleSelection(desired_seeker_question_pair[1].id)"
                    required
                />
                <label
                    :for="desired_seeker_question_pair[1].id.toString()"
                    class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 border-2"
                >
                    <div class="block">
                        <div class="w-full text-lg font-semibold">{{ desired_seeker_question_pair[1].question_text }}</div>
                    </div>
                </label>
            </li>
        </ul>
        <hr class="my-10 border-gray-900" />
    </div>
</template>

<script setup lang="ts">
import {defineProps, defineEmits, ref, watch, Ref} from 'vue';
import {DesiredSeekerQuestionPairType} from "@/types/domain/DesiredSeeker";

const props = defineProps<{
    desired_seeker_question_pair: DesiredSeekerQuestionPairType;
    initial_value?: any;
    index: number;
}>();

const emit = defineEmits(['update:modelValue']);

const localValue = ref<string | number | undefined>(props.initial_value ?? '');

watch(localValue, (newValue, oldValue) => {
    emit('update:modelValue', {newValue: newValue, oldValue: oldValue});
});

// ラジオボタンの選択/解除を制御する関数
const toggleSelection = (id: number) => {
    if (localValue.value === id) {
        // 同じラジオボタンがクリックされた場合は選択解除
        localValue.value = '';
    }
};
</script>

<style scoped>
</style>
