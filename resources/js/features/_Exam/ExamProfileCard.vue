<template>
    <div class="relative overflow-x-auto">
        <div
            class="block w-full mb-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">プロフィール入力</h5>
            <div class="mx-auto">
                <div>
                    <div class="flex">
                        <div class="mb-5 p-2 w-[30%]">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">名前</label>
                            <input type="text" v-model="name" id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': nameError, 'border-red-300': nameError }" placeholder="山田太郎"
                                   required/>
                            <InputError v-if="nameError" :message="nameError" class="text-red-500"/>
                        </div>
                        <div class="mb-5 p-2 w-[40%]">
                            <label for="name_kana"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">名前（かな）</label>
                            <input type="text" v-model="name_kana" id="name_kana"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': nameKanaError, 'border-red-300': nameKanaError }"
                                   placeholder="やまだ　たろう" required/>
                            <InputError v-if="nameKanaError" :message="nameKanaError" class="text-red-500"/>
                        </div>
                        <div class="mb-5 p-2 w-[30%]">
                            <label for="birthday"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">生年月日</label>
                            <input type="date" v-model="birthday" id="birthday"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': birthdayError, 'border-red-300': birthdayError }"
                                   required/>
                            <InputError v-if="birthdayError" :message="birthdayError" class="text-red-500"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="mb-5 p-2 w-[40%]">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Eメール</label>
                            <input type="text" v-model="email" id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': emailError, 'border-red-300': emailError }"
                                   placeholder="yamada@example.com"
                                   required/>
                            <InputError v-if="emailError" :message="emailError" class="text-red-500"/>
                        </div>
                        <div class="mb-5 p-2 w-[40%]">
                            <label for="postcode"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">郵便番号</label>
                            <input type="text" v-model="postcode" id="postcode"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': postcodeError, 'border-red-300': postcodeError }"
                                   placeholder='123-4567'
                                   required/>
                            <InputError v-if="postcodeError" :message="postcodeError" class="text-red-500"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="mb-5 p-2 w-[80%]">
                            <label for="address"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">住所</label>
                            <input type="text" v-model="address" id="address"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': addressError, 'border-red-300': addressError }"
                                   required/>
                            <InputError v-if="addressError" :message="addressError" class="text-red-500"/>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="mb-5 p-2 w-[40%]">
                            <label for="phone_number"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">電話番号</label>
                            <input type="text" v-model="phone_number" id="phone_number"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   :class="{ 'bg-red-100': phoneNumberError, 'border-red-300': phoneNumberError }"
                                   placeholder='012-3456-7899'
                                   required/>
                            <InputError v-if="phoneNumberError" :message="phoneNumberError" class="text-red-500"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <BlueButton @click="submit" text="次へ進む"/>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import 'vue-toast-notification/dist/theme-sugar.css';
import {useField, useForm} from "vee-validate";
import InputError from "@/components/Input/InputError.vue";
import BlueButton from "@/features/auth/components/LogoutButton.vue";
import {inject} from "@vue/runtime-core";
import {object, string} from "yup";

const page = inject('page');
const nextPage = inject<any>('nextPage');
const addFormData = inject<any>('addFormData');

const schema = object({
    name: string().required('名前は必須項目です'),
    name_kana: string().required('名前（かな）は必須項目です').matches(/^[\u30A0-\u30FF\u3040-\u309F\s]+$/, 'カタカナとひらがな、およびスペースのみを入力してください'),
    email: string().required('Eメールは必須項目です').email('メールアドレスの形式で入力してください'),
    birthday: string().required('生年月日は必須項目です'),
    postcode: string().required('郵便番号は必須項目です').matches(/^\d{3}-\d{4}$/, '郵便番号の形式で入力してください'),
    address: string().required('住所は必須項目です'),
    phone_number: string().required('電話番号は必須項目です').matches(/^0\d{1,4}-\d{1,4}-\d{4}$/, '電話番号の形式で入力してください'),
});

const {handleSubmit, errors} = useForm({
    validationSchema: schema,
});

const {value: name, errorMessage: nameError} = useField('name');
const {value: name_kana, errorMessage: nameKanaError} = useField('name_kana');
const {value: email, errorMessage: emailError} = useField('email');
const {value: birthday, errorMessage: birthdayError} = useField('birthday');
const {value: postcode, errorMessage: postcodeError} = useField('postcode');
const {value: address, errorMessage: addressError} = useField('address');
const {value: phone_number, errorMessage: phoneNumberError} = useField('phone_number');

const submit = handleSubmit((profile) => {
    addFormData({profile: profile});
    nextPage();
});

</script>

<style scoped>

</style>
