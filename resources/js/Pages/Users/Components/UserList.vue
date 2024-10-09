<script setup lang="ts">
import SidebarItem from './SidebarItem.vue'
import { storeToRefs } from 'pinia'

import { useUsersStore } from '../Stores/users'

const usersStore = useUsersStore()

const { isDirty, isLoading, users, selectedUser } = storeToRefs(usersStore)

const selectUser = (id) => {
    usersStore.setSelectedUser(id);
}

</script>

<style lang="scss" scoped>
.scrollable {
    flex: 1;
    overflow-y: auto;
    overflow-x: hidden;
    height: calc(50vh);
}

section {
    display: flex;
    flex: 1;
    height: 100%;
    flex-direction: column;
}

:deep(.content) {
    flex: 1;
}

ul {
    margin: 4px;
}

.item {
    display: flex;
    margin-bottom: 25px;
    box-shadow: 0px 0px 10px 0px #0000001A;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;

    .center {
        padding: 20px;
        flex: 1;

        h3  {
            color: #333333;
            font-weight: 600;
            padding-bottom: 5px;
        }
    }
}

.active {
    .center {
        background-color: #E0E0E0;
    }
}
</style>

<template>
    <SidebarItem :title="'Результаты'">
        <span v-if="isDirty">начните поиск</span>
        <span v-else="isLoading">загрузка</span>

        <div class="scrollable"  v-else v-if="users.length">
            <ul>
                <li v-for="user in users" :class="{ active: selectedUser?.id === user.id }">
                    <div class="item" @click="selectUser(user.id)">
                        <div class="left">
                            <img src="/images/placeholder.png" />
                        </div>
                        <div class="center">
                            <h3>{{ user.name }}</h3>
                            <p>{{ user.email }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
    </SidebarItem>
</template> 