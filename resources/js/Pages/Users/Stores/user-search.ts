import { defineStore } from 'pinia'

export const useUserSearchStore = defineStore('user-search', {
    state: () => ({ text: '' }),
    getters: {
        getText: (state) => state.text,
    },
    actions: {
        setText(text) {
            this.text = text
        },
    },
})