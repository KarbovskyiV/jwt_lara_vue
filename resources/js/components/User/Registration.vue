<script>
import axios from "axios";

export default {
    name: "Registration",

    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        }
    },

    methods: {
        store() {
            axios.post('/api/users', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            })
                .then(res => {
                    console.log(res);
                })
        }
    }
}
</script>

<template>
    <div class="w-25">
        <input type="text" v-model="name" class="form-control mt-3 mb-3" placeholder="name">
        <input type="email" v-model="email" class="form-control mb-3" placeholder="email">
        <input type="password" v-model="password" class="form-control mb-3" placeholder="password">
        <input type="password" v-model="password_confirmation" class="form-control mb-3"
               placeholder="password confirmation">
        <input @click.prevent="store" type="submit" class="btn btn-primary" value="Register">
    </div>
</template>

<style scoped>

</style>
