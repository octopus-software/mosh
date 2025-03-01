<script setup lang="ts">
import {usePage} from '@inertiajs/vue3';
import {initFlowbite} from 'flowbite'
import {onMounted} from "vue";
import {apiPost} from "@/helpers/api";
import BlueButton from "@/Components/Button/BlueButton.vue";
import SideBar from "@/Components/SideBar/SideBar.vue";

onMounted(() => {
    initFlowbite();
})

const logout = () => {
    apiPost('/logout', '').then(() => {
        window.location.href = '/';
    });
}

const page = usePage();
const user: any = page.props.auth.user
const shop: any = page.props.auth.shop

</script>

<template>
    <div>
        <!-- Page Content -->
        <main class="flex justify-between">
            <div>
                <aside id="sidebar-multi-level-sidebar"
                       class="m-[2%] fixed top-0 left-0 z-40 w-[20%] h-screen transition-transform -translate-x-full sm:translate-x-0 min-w-[280px]"
                       aria-label="Sidebar">
                    <SideBar/>
                </aside>
            </div>

            <div class="w-[74%] mt-[2%] mx-[2%]">
                <div class="flex justify-between my-6">
                    <div class="">
                        <h2 class="px-2"><b class="text-main text-2xl">{{ user.nickname ?? '' }}</b><span class="text-sm"> さん</span></h2>
                        <h2 class="px-2"><span class="text-sm">ようこそ </span><b class="text-main text-2xl">{{ shop.name }}</b><span class="text-sm"> 店へ</span></h2>
                    </div>

                    <div class="flex">
                        <div class="flex items-center">
                            <!--                            <div>-->
                            <!--                                <button type="button"-->
                            <!--                                        class="relative inline-flex items-center p-3 text-sm font-medium text-center text-main bg-white rounded-full hover:bg-gray-100 transition-colors duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-md">-->
                            <!--                                    <svg class="w-[32px] h-[32px] text-gray-800 text-main" aria-hidden="true"-->
                            <!--                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"-->
                            <!--                                         viewBox="0 0 24 24">-->
                            <!--                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"-->
                            <!--                                              stroke-width="2"-->
                            <!--                                              d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"/>-->
                            <!--                                    </svg>-->
                            <!--                                    <span class="sr-only">Notifications</span>-->
                            <!--                                    <span-->
                            <!--                                        class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-main border-2 border-white rounded-full -top-2 -end-2">-->
                            <!--                                        3-->
                            <!--                                    </span>-->
                            <!--                                </button>-->
                            <!--                            </div>-->
                            <div class="ml-4">
                                <BlueButton text="log out" @click="logout"/>
                            </div>
                        </div>
                    </div>
                </div>

                <slot/>
            </div>
        </main>
    </div>
</template>

<style>

</style>
