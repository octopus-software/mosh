<script setup lang="ts">
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-main dark:bg-gray-900">
        <div>
            <Link href="/">
                <img src="/images/mosh_logo.png" alt="logo" class="w-64">
            </Link>
        </div>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg"
        >
            <slot/>
        </div>
    </div>
</template>
