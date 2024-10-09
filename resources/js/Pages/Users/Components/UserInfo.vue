<script setup lang="ts">
import UserInfoPlaceholder from './UserInfoPlaceholder.vue'
import { storeToRefs } from 'pinia'

import { useUsersStore } from '../Stores/users'

const usersStore = useUsersStore()

const { selectedUser } = storeToRefs(usersStore)
</script>

<style lang="scss" scoped>
.user-info {
    display: flex;
    height: 100%;
    flex: 1;
}

.user-info-data {
    margin: 30px 20px;
    display: flex;

    .center {
        margin-left: 60px;

        h3 {
            font-size: 16px;
            font-weight: 600;
            line-height: 22.4px;
            text-align: left;

            margin-bottom: 10px;
        }

        > div {
            color: rgba(0, 0, 0, 0.5);

            h4 {
                display: inline-block;
                color: rgba(0, 0, 0, 1);
                font-size: 14px;
                font-weight: 600;
                line-height: 19.6px;
                padding-right: 10px;
                margin-bottom: 10px;
            }
        }

        .text {
            margin-top: 20px;
            color: rgba(0, 0, 0, 0.5);
            
            h4 {
                color: rgba(0, 0, 0, 1);
                font-size: 16px;
                margin-bottom: 20px;
            }
        }
    }

}
</style>

<template>
    <div class="user-info">
        <UserInfoPlaceholder v-if="!selectedUser" />

        <div class="user-info-data" v-else>
            <div class="left">
                <img src="/images/placeholder2.png" />
            </div>
            <div class="center">
                <h3>{{ selectedUser.name }}</h3>
                <div><h4>email:</h4>{{ selectedUser.email }}</div>
                <div><h4>phone:</h4>{{ selectedUser.phone }}</div>
                <div class="text">
                    <h4>О себе</h4>
                    <p>{{ selectedUser.about }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
