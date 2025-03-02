<template>
    <div class="m-6">
        <h1>診断テスト</h1>
        <div>
            <h2>16タイプ診断テスト</h2>
            <div v-for="mbti_question in mbti_questions" :key="mbti_question.id">
                <MBTIQuestion :mbti_question="mbti_question"
                              @update:modelValue="updateAnswer"/>
            </div>
            <div class="flex justify-center">
                <BlueButton v-if="canNext" @click="submit" text="次のテストへ進む"/>
                <GrayButton v-if="!canNext" @click="" text="全ての質問に回答してください" disabled="true" />
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {defineProps, ref} from 'vue';
import {MBTIQuestionType} from "@/types/domain/MBTI";
import MBTIQuestion from "@/Features/Exam/components/MBTIQuestion.vue";
import BlueButton from "@/Components/Button/LogoutButton.vue";
import GrayButton from "@/Components/Button/GrayButton.vue";
import {inject} from "@vue/runtime-core";

const props = defineProps<{
    mbti_questions: MBTIQuestionType[]
}>();

const answers = ref<AnswerItem[]>([]);
const canNext = ref(false);
const nextPage = inject<any>('nextPage');

const formData = inject<any>('formData');
const addFormData = inject<any>('addFormData');

type Answer = {
    id: number;
    value: string|number;
};

type AnswerItem = {
    mbti_question_id: number;
    value: string|number;
};

const updateAnswer = ({id, value}: Answer) => {
    // 同一IDのものがあれば最新のもので上書きする
    const index = answers.value.findIndex((answer) => answer.mbti_question_id === id);
    index !== -1 ? answers.value[index].value = value : answers.value.push({mbti_question_id: id, value: value});

    // 全ての回答がされたか確認し、ボタンを活性化する
    const answerItemLength = props.mbti_questions.length;
    answers.value.length !== answerItemLength ? canNext.value = false : canNext.value = true;
};

const submit = () => {
    addFormData({mbti_answers: answers.value});
    nextPage();
};
</script>

<style scoped>
</style>
