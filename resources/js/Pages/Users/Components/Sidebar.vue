<script setup lang="ts">
import SidebarItem from './SidebarItem.vue'
import UserSearch from './UserSearch.vue'
</script>

<style lang="scss" scoped>
.sidebar-inner {
    min-height: calc(100% - 50px);
    padding: 25px;
}
</style>

<template>
    <section class="sidebar-inner">
        <UserSearch />
        <SidebarItem :title="'Результаты'">
            начните поиск
        </SidebarItem>
    </section>
</template>