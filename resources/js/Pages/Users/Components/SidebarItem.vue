<style lang="scss" scoped>
section {
    margin-bottom: 27px;

    h2 {
        font-size: 1rem;
        line-height: 120%;
        font-weight: 600;
        margin-bottom: 22px;
    }

    .content {
        color: #76787D;
    }
}
</style>

<script lang="ts" setup>
defineProps<{ title: string }>()
</script>

<template>
    <section>
        <h2>{{ title }}</h2>
        <div class="content">
            <slot></slot>
        </div>
    </section>
</template>