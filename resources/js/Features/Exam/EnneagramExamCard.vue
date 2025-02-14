<template>
    <div class="m-6">
        <h1>診断テスト</h1>
        <div>
            <h2>9タイプ診断テスト</h2>
            <div v-for="enneagram_question in props.enneagram_questions" :key="enneagram_question.id">
                <EnneagramQuestion :enneagram_question="enneagram_question"
                                   @update:modelValue="updateAnswer"/>
            </div>
        </div>
        <div class="flex justify-center">
            <BlueButton v-if="canNext" @click="submit" text="テストを完了する"/>
            <GrayButton v-if="!canNext" @click="" text="全ての質問に回答してください" disabled="true"/>
        </div>
    </div>
</template>

<script setup lang="ts">
import {defineProps, ref} from "vue";
import {EnneagramQuestionType} from "@/types/domain/Enneagram";
import EnneagramQuestion from "@/Features/Exam/components/EnneagramQuestion.vue";
import BlueButton from "@/Components/Button/BlueButton.vue";
import {inject} from "@vue/runtime-core";
import GrayButton from "@/Components/Button/GrayButton.vue";

const props = defineProps<{
    enneagram_questions: EnneagramQuestionType[]
    store: Function
}>();

const answers = ref<AnswerItem[]>([]);
const canNext = ref(false);
const nextPage = inject<any>('nextPage');

const formData = inject('formData');
const addFormData = inject<any>('addFormData');

type Answer = {
    id: number;
    value: string|number;
};

type AnswerItem = {
    enneagram_question_id: number;
    value: string|number;
};

const updateAnswer = ({id, value}: Answer) => {
    // 同一IDのものがあれば最新のもので上書きする
    const index = answers.value.findIndex((answer) => answer.enneagram_question_id === id);
    index !== -1 ? answers.value[index].value = value : answers.value.push({enneagram_question_id: id, value: value});

    // 全ての回答がされたか確認し、ボタンを活性化する
    const answerItemLength = props.enneagram_questions.length;
    answers.value.length !== answerItemLength ? canNext.value = false : canNext.value = true;
};

const submit = async () => {
    addFormData({enneagram_answers: answers.value});
    await props.store().then(() => nextPage()).catch(() => alert('エラーが発生しました。再度送信してください。'));
};

</script>

<style scoped>

</style>
