<script setup lang="ts">
import SidebarItem from './SidebarItem.vue'
</script>

<style lang="scss" scoped>
.wrappe1r {
    min-height: calc(100% - 50px);
    padding: 25px;
}
</style>

<template>
    <section class="wrappe1r">
        <SidebarItem :title="'Поиск сотрудников'">
            sdfsdf
        </SidebarItem>
        <SidebarItem :title="'Результаты'">
            начните поиск
        </SidebarItem>
    </section>
</template>