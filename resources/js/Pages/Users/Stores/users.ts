import axios from 'axios'
import { defineStore } from 'pinia'

export const useUsersStore = defineStore('users', {
    state: () => ({
        users: [],
        isLoading: false,
        isDirty: true,
        selectedUser: null
    }),
    getters: {
        getUserById: (state) => state.users,
    },
    actions: {
        async search(text) {
            if (text.value.length) {
                this.isDirty = false;
                this.isLoading = true;

                try {
                    const data = await axios.post('/employee/search', { text: text.value });

                    this.users = data.data;
                } catch(e) {
                    console.log('ошибка серевера');
                } finally {

                    this.isLoading = false;
                }
    
            } else {
                this.isDirty = true;
                this.users = [];
            }

            this.selectedUser = null;
        },

        setDirty(dirty) {
            this.isDirty = dirty;
        },

        setSelectedUser(id) {
            this.selectedUser = this.users.find((user) => user.id === id);
        }
    },
})