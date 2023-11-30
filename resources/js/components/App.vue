<script>
export default {
    name: "App"
}
</script>

<template>
    <div>
        <router-link :to="{name: 'fruit.index'}">List</router-link>
        <router-link :to="{name: 'user.login'}" class="m-3">Login</router-link>
        <router-link :to="{name: 'user.registration'}">Registration</router-link>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
