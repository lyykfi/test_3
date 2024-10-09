<script setup lang="ts">
import { storeToRefs } from 'pinia'
import { watch } from 'vue'

import SidebarItem from './SidebarItem.vue'
import { useUserSearchStore } from '../Stores/user-search'
import { useUsersStore } from '../Stores/users'

const store = useUserSearchStore()
const usersStore = useUsersStore()

const { text } = storeToRefs(store)
const { setText } = store

const updateText = (event) => {
    setText(event.target.value)
}

watch(text, () => {
    usersStore.search(text);
})
</script>

<style lang="scss" scoped>
input {
    border: 1.5px solid #E9ECEF;
    padding: 16px 12px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 8px;
}
</style>

<template>
    <SidebarItem :title="'Поиск сотрудников'">
        <input
            type="text"
            placeholder="Anna"
            :value="text"
            @input="updateText">
    </SidebarItem>
</template> 