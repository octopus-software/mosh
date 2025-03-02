<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/Input/InputError.vue';
import InputLabel from '@/Components/Input/InputLabel.vue';
import TextInput from '@/Components/Input/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';
import {defineProps} from "vue";
import SelectInput from "@/Components/Input/SelectInput.vue";
import BlueButton from "@/Components/Button/BlueButton.vue";

defineProps<{
    canResetPassword?: boolean;
    status?: string;
    shops: any[];
}>();

const form = useForm({
    shop_id: '',
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" ><title>Log in</title></Head>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">

            <div>
                <InputLabel for="shop_id" value="ログイン店舗" />
                <SelectInput v-model="form.shop_id">
                    <option value="">選択してください</option>
                    <option v-for="shop in shops" :key="shop.id" :value="Number(shop.id)">{{ shop.name }}</option>
                </SelectInput>

                <InputError class="mt-2" :message="form.errors.shop_id" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Eメール" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="パスワード" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <BlueButton text="Log in" class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                </BlueButton>
            </div>
        </form>
    </GuestLayout>
</template>
