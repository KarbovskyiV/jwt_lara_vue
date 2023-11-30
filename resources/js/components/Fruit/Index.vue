<script>
import axios from "axios";

export default {
    name: "Index",

    data() {
        return {
            fruits: []
        }
    },

    mounted() {
        this.getAll()
    },

    methods: {
        getAll() {
            axios.get('/api/fruits')
                .then(res => {
                    this.fruits = res.data.data
                })
        }
    }
}
</script>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="fruit in fruits">
                <th scope="row">{{ fruit.id }}</th>
                <td>{{ fruit.name }}</td>
                <td>{{ fruit.price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
