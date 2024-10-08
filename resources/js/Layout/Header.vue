<style lang="scss" scoped>
header {
    margin-bottom: 2%;
    display: flex;
    justify-content: space-between;
    line-height: 100%;
    align-items: baseline;

    h1 {
        color: var(--color-primary);
        font-weight: 700;
        font-size: 2rem;
    }
}

@media (max-width: 1000px) {
    header {
        margin-bottom: 4%;
    }
}

@media (max-width: 400px) {
    header {
        display: block;

        h1 {
            margin-bottom: 2%;
        }
    }
}
</style>

<template>
    <header>
        <h1>Жилфонд</h1>
        <span>Пользователь</span>
    </header>
</template>