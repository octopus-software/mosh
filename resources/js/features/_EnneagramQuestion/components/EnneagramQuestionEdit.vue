<template>
    <div
        class="w-full mt-4 block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <ul class="grid w-full gap-6 md:grid-cols-2 mt-4">
            <li>
                <label for="answer_a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">回答Aのテキスト[
                    {{ enneagram_question.a_value }} ]</label>
                <input
                    type="text" v-model="answer_a"
                    id="answer_a"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :class="{ 'bg-red-100': answerAError, 'border-red-300': answerAError }" placeholder=""
                    required
                />
                <InputError v-if="answerAError" :message="answerAError" class="text-red-500"/>
            </li>
            <li>
                <label for="answer_b" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">回答Bのテキスト[
                    {{ enneagram_question.b_value }} ]</label>
                <input
                    type="text" v-model="answer_b"
                    id="answer_b"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :class="{ 'bg-red-100': answerBError, 'border-red-300': answerBError }" placeholder=""
                    required
                />
                <InputError v-if="answerBError" :message="answerBError" class="text-red-500"/>
            </li>
        </ul>
        <div class="flex justify-center">
            <BlueButton @click="submit" class="mt-4 text-center" text="質問を更新する"/>
        </div>
    </div>
</template>

<script setup lang="ts">

import {defineProps} from "vue";
import {EnneagramQuestionType} from "@/types/domain/Enneagram";
import {object, string} from "yup";
import {useField, useForm} from "vee-validate";
import {apiPut} from "@/helpers/api";
import InputError from "@/components/Input/InputError.vue";
import BlueButton from "@/features/auth/components/LogoutButton.vue";

const props = defineProps<{
    enneagram_question: EnneagramQuestionType,
}>();

const schema = object({
    answer_a: string().required('回答Aのテキストは必須項目です'),
    answer_b: string().required('回答Bのテキストは必須項目です')
});

const {handleSubmit, errors} = useForm({
    validationSchema: schema,
    initialValues: {
        answer_a: props.enneagram_question.answer_a,
        answer_b: props.enneagram_question.answer_b
    }
});

const {value: answer_a, errorMessage: answerAError} = useField('answer_a');
const {value: answer_b, errorMessage: answerBError} = useField('answer_b');

const submit = handleSubmit(async (data) => await apiPut(route('nine_type_question.update', {id: props.enneagram_question.id}), '更新に成功しました', data));

</script>

<style scoped>

</style>
