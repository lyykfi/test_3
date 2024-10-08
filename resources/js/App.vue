<script setup>
import Header from './Layout/Header.vue'
</script>

<style lang="scss" scoped>
#root {
    padding: 50px;
    height: calc(100% - 100px);
    align-items: stretch;
    display: flex;
    flex-direction: column;

    main {
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #0000001A;
        border-left: 1px solid #DEDEDD;
        flex: 1;
    }
}
</style>

<template>
    <div id="root">
        <Header />

        <main>
            <RouterView />
        </main>
    </div>
</template>
