<template>

    <table class="table table-warning table-striped m-4">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Mail</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users" :key="user.id">
                <td v-if="user.perfils_id == 1">{{ user.nom }} {{ user.cognoms }}</td>
                <td v-if="user.perfils_id == 1">{{ user.codi }}</td>
                <td v-if="user.perfils_id == 1">{{ user.mail }}</td>
                <td v-if="user.perfils_id == 1"> Descansando </td>
            </tr>
        </tbody>
    </table>
</template>
<script>



export default {
      data() {
        return {
            users: [],
        };
    },
    methods: {
        select() {
            let me = this;
            console.log("Entrando a la select");
            axios
                .get("/user")
                .then((response) => {
                    console.log("Operadores OK");
                    me.users = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },
    },

    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
