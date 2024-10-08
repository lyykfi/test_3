<script setup lang="ts">
import Sidebar from './Components/Sidebar.vue'
import UserInfo from './Components/UserInfo.vue'
</script>

<style lang="scss" scoped>
.user-wrapper {
    display: flex;
    height: 100%;
    align-items: stretch;
    display: flex;

    .sidebar {
        width: 30%;
    }

    .content {
        border-left: 1px solid #DEDEDD;
        flex: 1;
    }
}
</style>

<template>
    <div class="user-wrapper">
        <div class="sidebar">
            <Sidebar />
        </div>
        <section class="content">
            <UserInfo />
        </section>
    </div>
</template>
