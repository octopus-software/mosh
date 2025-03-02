<template>
    <AuthenticatedLayout>
        <div class="relative overflow-x-auto">
            <div
                class="block w-full mb-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ユーザー編集</h5>
                <!--                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>-->
                <div class="mx-auto">

                    <div class="flex">
                        <div class="mb-5 p-2 w-[50%]">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ユーザー名</label>
                            <input type="text" v-model="name" id="name"
                                   class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required/>
                        </div>
                        <div class="mb-5 p-2 w-[50%]">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Eメール</label>
                            <input type="email" v-model="email" id="email"
                                   class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="name@flowbite.com" required/>
                        </div>
                    </div>

                    <BlueButton text="更新する" @click="submitUser"/>
                    <Link :href="route('company.edit', {id: user['company_id']})">
                        <GrayButton text="利用企業詳細に戻る"/>
                    </Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import {useToast} from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BlueButton from "../../Components/Button/LogoutButton.vue";
import GrayButton from "../../Components/Button/GrayButton.vue";
import {defineProps} from 'vue';
import {Link} from '@inertiajs/inertia-vue3';
import {object, string} from "yup";
import {useField, useForm} from "vee-validate";
import {apiPut} from "@/helpers/api";

const toast = useToast();
const props = defineProps<{
    user: {
        id: number,
        name: string,
        email: string,
        company_id: number
    }
}>();

const schema = object({
    name: string().required('名前は必須項目です'),
    email: string().required('Eメールは必須項目です'),
});

const {handleSubmit, errors} = useForm({
    validationSchema: schema,
});

const submitUser = handleSubmit(async (request) => await apiPut(route('user.update', {id: props.user.id}), '更新に成功しました', {id: props.user.id, ...request}));

const {value: name, errorMessage: nameError} = useField('name', '', {initialValue: props.user.name});
const {value: email, errorMessage: emailError} = useField('email', '', {initialValue: props.user.email});

</script>

<style scoped>

</style>
