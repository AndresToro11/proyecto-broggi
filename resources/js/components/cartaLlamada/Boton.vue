<template>
<div>
    <h3>boton</h3>
    <button type="button">Cancelar</button>
    <button type="button" @click="insert()">Aceptar</button>
</div>

</template>
<script>
export default {
    data() {
        return {
            llamada: {
                codi_trucada: "",
                data_hora: "",
                temps_trucada: "",
                dades_personals_id: "",
                telefon: "",
                procedencia_trucada: "",
                origen_trucada: "",
                nom_trucada: "",
                municipis_id_trucada: "",
                adreca_trucada: "",
                fora_catalunya: "",
                provincies_id: "",
                municipis_id: "",
                tipus_localitzacions_id: "",
                descripcio_localitzacio: "",
                detall_localitzacio: "",
                altres_ref_localitzacio: "",
                incidents_id: "",
                nota_comuna: "",
                expedients_id: "",
                usuaris_id: "",
            },
        };
    },
    methods: {
        insert() {
            let me = this;
            axios
                .post("/llamada", me.llamada)
                .then(function (response) {
                    console.log(response);
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
