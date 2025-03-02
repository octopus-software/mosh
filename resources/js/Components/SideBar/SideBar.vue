<template>
    <div
        class="h-[94%] px-6 py-4 overflow-y-auto bg-gray-50 rounded-3xl flex justify-center gradient-bg">
        <div class="">

            <!--      ロゴ画像      -->

            <div class="m-auto w-[60%] my-8">
                <img src="/images/mosh_logo.png" alt="Logo" class="m-auto"/>
            </div>

            <!--      メニュー項目      -->

            <ul class="space-y-2 font-medium w-[100%] m-auto space-y-4">

                <SideBarSimpleItem label="ダッシュボード" :url="route('dashboard')">
                    <path
                        d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="フレーバー在庫" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="フレーバーマスタ" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="マニュアル" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="スタッフ一覧" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="新人研修" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="備品一覧" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="設定" :url="route('login')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

                <SideBarSimpleItem label="コンポーネント一覧" :url="route('_dev.component_list')">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                          clip-rule="evenodd"/>
                </SideBarSimpleItem>

<!--                <SideBarSimpleItem v-if="loginUser['is_admin'] || loginUser['is_super_admin']" label="求める人物像"-->
<!--                                   :url="route('desired_seeker.list')">-->
<!--                    <path-->
<!--                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>-->
<!--                </SideBarSimpleItem>-->

<!--                <SideBarHierarchyItem v-if="loginUser['is_admin'] || loginUser['is_super_admin']" label="採用候補者"-->
<!--                                      :idDropdownOpen="isSeekerDropdownOpen"-->
<!--                                      :toggleDropdown="toggleSeekerDropdown"-->
<!--                                      path="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z">-->
<!--                    <li>-->
<!--                        <Link :href="route('seeker.list')"-->
<!--                              class="flex justify-end items-end p-2 text-gray-900 transition duration-75 rounded-lg pl-11 hover:text-main text-black text-md"-->
<!--                              :class="(currentUrl === '/company/seeker') && 'text-main'"-->
<!--                        >-->
<!--                            採用候補者一覧-->
<!--                        </Link>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <Link :href="route('seeker_ranking.list')"-->
<!--                              class="flex justify-end items-end w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 hover:text-main text-black text-md"-->
<!--                              :class="(currentUrl === '/company/seeker_ranking') && 'text-main'"-->
<!--                        >-->
<!--                            ランキング-->
<!--                        </Link>-->
<!--                    </li>-->
<!--                </SideBarHierarchyItem>-->

<!--                <SideBarHierarchyItem v-if="loginUser['is_super_admin']" label="マスタデータ"-->
<!--                                      :idDropdownOpen="isMasterDataDropdownOpen"-->
<!--                                      :toggleDropdown="toggleMasterDataDropdown"-->
<!--                                      path="M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z">-->
<!--                    <li>-->
<!--                        <Link :href="route('sixteen_type_question.edit')"-->
<!--                              class="flex justify-end items-end p-2 text-gray-900 transition duration-75 rounded-lg pl-11 hover:text-main text-black text-md"-->
<!--                              :class="(currentUrl === '/company/sixteen_type_question') && 'text-main'"-->
<!--                        >-->
<!--                            16タイプ診断質問-->
<!--                        </Link>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <Link :href="route('nine_type_question.edit')"-->
<!--                              class="flex justify-end items-end w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 hover:text-main text-black text-md"-->
<!--                              :class="(currentUrl === '/company/nine_type_question') && 'text-main'"-->
<!--                        >-->
<!--                            9タイプ診断質問-->
<!--                        </Link>-->
<!--                    </li>-->
<!--                </SideBarHierarchyItem>-->

<!--                <SideBarSimpleItem v-if="loginUser['is_super_admin']" label="利用企業" :url="route('company.list')">-->
<!--                    <path fill-rule="evenodd"-->
<!--                          d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"-->
<!--                          clip-rule="evenodd"/>-->
<!--                </SideBarSimpleItem>-->

<!--                <SideBarSimpleItem v-if="!loginUser['is_super_admin']" label="社員適正試験" :url="route('user_exam.index')">-->
<!--                    <path fill-rule="evenodd"-->
<!--                          d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"-->
<!--                          clip-rule="evenodd"/>-->
<!--                </SideBarSimpleItem>-->
<!--                <SideBarSimpleItem v-if="loginUser['is_admin']" label="お問い合わせ" @click="openMail">-->
<!--                    <path-->
<!--                        d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>-->
<!--                    <path-->
<!--                        d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>-->
<!--                </SideBarSimpleItem>-->
            </ul>
        </div>
    </div>
</template>

<script setup lang="ts">
import {usePage} from '@inertiajs/vue3';
import {ref} from "vue";
import SideBarSimpleItem from "@/Components/SideBar/components/SideBarSimpleItem.vue";
import SideBarHierarchyItem from "@/Components/SideBar/components/SideBarHierarchyItem.vue";

const page = usePage();
const currentUrl = page.url

const isSeekerDropdownOpen = ref(currentUrl === '/company/seeker' || currentUrl === '/company/seeker_ranking');
const toggleSeekerDropdown = () => {
    isSeekerDropdownOpen.value = !isSeekerDropdownOpen.value;
};

const isMasterDataDropdownOpen = ref(currentUrl === '/company/sixteen_type_question' || currentUrl === '/company/nine_type_question');
const toggleMasterDataDropdown = () => {
    isMasterDataDropdownOpen.value = !isMasterDataDropdownOpen.value;
};

const loginUser: any = page.props.auth.user

// ローカルのメーラーを開く
const openMail = () => {
    window.location.href = 'mailto:info@recovery-navi.com';
}
</script>

<style scoped>

</style>
