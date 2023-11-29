<script>
export default {
    name: "App"
}
</script>

<template>
    <div>
        <router-link :to="{name: 'fruit.index'}">List</router-link>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
