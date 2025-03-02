<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import YellowButton from "@/Components/Button/YellowButton.vue";
import LogoutButton from "@/Components/Button/LogoutButton.vue";
import BlueButton from "@/Components/Button/BlueButton.vue";
import RedButton from "@/Components/Button/RedButton.vue";
import InputLabel from "@/Components/Input/InputLabel.vue";
import SelectInput from "@/Components/Input/SelectInput.vue";
import InputError from "@/Components/Input/InputError.vue";
import TextInput from "@/Components/Input/TextInput.vue";
import {ref} from "vue";
import RadioInput from "@/Components/Input/RadioInput.vue";
import CheckboxInput from "@/Components/Input/CheckboxInput.vue";

const formData = ref(null);

const form = useForm({
    sample_text: '',
    sample_select: 0,
    sample_check: false,
    sample_radio: '1',
});

const submit = () => {
    formData.value = JSON.stringify(form.data());
    // form.post(route('_dev.component_post'), {
    //     onFinish: (response) => {
    //         form.reset('password');
    //     },
    // });
};

const selectOptions = [
    {id: 1, value: '1', label: 'サンプル1'},
    {id: 2, value: '2', label: 'サンプル2'},
    {id: 3, value: '3', label: 'サンプル3'},
    {id: 4, value: '4', label: 'サンプル4'},
    {id: 5, value: '5', label: 'サンプル5'},
];

const radioOptions = [
    {id: 1, value: '1', label: 'ラジオサンプル1'},
    {id: 2, value: '2', label: 'ラジオサンプル2'},
    {id: 3, value: '3', label: 'ラジオサンプル3'},
];

</script>

<template>
    <Head title="Dashboard"><title>Dashboard</title></Head>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>
        <div>
            <div class="p-6 bg-white rounded-3xl shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="header-title">【開発用】コンポーネント一覧</h5>

                <div class="flex justify-start gap-8">
                    <div>
                        <!-- ログアウトボタン -->
                        <p class="mb-4">LogoutButton</p>
                        <LogoutButton text="ログアウト"/>
                    </div>

                    <div>
                        <!-- イエローボタン -->
                        <p class="mb-4">YellowButton</p>
                        <YellowButton text="サンプルボタン">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                  clip-rule="evenodd"
                            />
                        </YellowButton>
                    </div>

                    <div>
                        <!-- ブルーボタン -->

                        <p class="mb-4">BlueButton</p>
                        <BlueButton text="サンプルボタン">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                  clip-rule="evenodd"
                            />
                        </BlueButton>
                    </div>

                    <div>
                        <!-- レッドボタン -->

                        <p class="mb-4">RedButton</p>
                        <RedButton text="サンプルボタン">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                  clip-rule="evenodd"
                            />
                        </RedButton>
                    </div>
                </div>

                <hr class="my-6"/>

                <form @submit.prevent="submit">
                    <div class="flex justify-start gap-8">
                        <div class="w-[40%]">
                            <p class="mb-4">TextInput</p>
                            <InputLabel for="sample_text" value="テキストボックス項目サンプル"/>
                            <TextInput
                                id="sample_text"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.sample_text"
                            />
                            <InputError class="mt-2" :message="'エラーメッセージが表示されます'"/>
                        </div>

                        <div class="w-[30%]">
                            <p class="mb-4">SelectInput</p>
                            <InputLabel for="shop_id" value="セレクトボックス項目サンプル"/>
                            <SelectInput v-model="form.sample_select">
                                <option value=0>選択してください</option>
                                <option v-for="option in selectOptions" :key="option.id" :value="Number(option.value)">
                                    {{
                                        option.label
                                    }}
                                </option>
                            </SelectInput>
                            <InputError class="mt-2" :message="'エラーメッセージが表示されます'"/>
                        </div>

                        <div class="w-[30%]">
                            <p class="mb-4">CheckboxInput</p>
                            <label class="flex items-center">
                                <CheckboxInput name="remember" v-model:checked="form.sample_check"/>
                                <span class="ms-2 text-md text-gray-600 dark:text-gray-400">チェック項目サンプル</span>
                            </label>
                        </div>
                    </div>

                    <div class="fle justify-start mt-6">
                        <div class="w-[60%]">
                            <p class="mb-4">RadioInput</p>
                            <InputLabel for="shop_id" value="ラジオボタン項目サンプル"/>
                            <div class="flex justify-start gap-8">
                                <RadioInput v-for="option in radioOptions" :key="option.id"
                                            v-model:checked="form.sample_radio"
                                            :value="option.value" :label="option.label"/>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-start mt-6">
                        <BlueButton text="フォームを送信する" class="ms-4" :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing">
                        </BlueButton>
                    </div>
                </form>
                <div class="border p-3 mt-6">
                    <p>【送信データ】</p>
                    <p>{{ formData ?? '※フォームが送信されていません' }}</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
