import axios from 'axios'
import { defineStore } from 'pinia'

export const useUsersStore = defineStore('users', {
    state: () => ({ users: [] }),
    getters: {
        getUsers: (state) => state.users,
    },
    actions: {
        async search(text) {
            const data = await axios.post('/employee/search', { text: text.value })
            console.log(data);
        }
    },
})