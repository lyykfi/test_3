<script setup lang="ts">
import SidebarItem from './SidebarItem.vue'
import UserSearch from './UserSearch.vue'
import UserList from './UserList.vue'
</script>

<style lang="scss" scoped>
.sidebar-inner {
    min-height: calc(100% - 50px);
    padding: 25px;
    display: flex;
    flex-direction: column;

    .user-list {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
}
</style>

<template>
    <section class="sidebar-inner">
        <UserSearch />
        <div class="user-list">
            <UserList />
        </div>
    </section>
</template>