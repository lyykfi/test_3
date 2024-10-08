<script setup lang="ts">
import SidebarItem from './SidebarItem.vue'
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
        <input type="text" placeholder="Anna">
    </SidebarItem>
</template>