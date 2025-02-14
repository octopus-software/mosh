<template>
    <div class="my-8">
        <h1 class="text-center">リカバリーナビテスト</h1>
        <h2 class="pt-6 text-center">企業から共有されている企業コードを入力してください</h2>
    </div>
    <div class="flex justify-center">
        <div class="w-[50%]">
            <input type="text" id="name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   v-model="company_code" @change="checkCompanyCode"/>
        </div>
    </div>
    <div class="flex justify-center">
        <BlueButton v-if="canNext" @click="submit" text="テストを開始する"/>
        <GrayButton v-if="!canNext" @click="" text="テストを開始する" disabled="true"/>
    </div>
</template>

<script setup lang="ts">
import BlueButton from "@/Components/Button/BlueButton.vue";
import {inject} from "@vue/runtime-core";
import GrayButton from "@/Components/Button/GrayButton.vue";
import {ref} from "vue";
import {apiGet} from "@/helpers/api";

const page = inject('page')
const nextPage = inject<any>('nextPage')

const addFormData = inject<any>('addFormData');

const canNext = ref(false)
const company_code = ref('')

/**
 * 存在する企業コードであることをチェックする
 */
const checkCompanyCode = async () => {
    // APIで存在する企業コードであることをチェックする
    await apiGet(route('company_code.valid', {company_code: company_code.value}))
        .then((response) => {
            canNext.value = response.data
        })
        .catch((error) => {
            canNext.value = false
        })
}

/**
 * 送信処理
 */
const submit = () => {
    addFormData({company_code: company_code.value})
    nextPage()
}

</script>

<style scoped>

</style>
