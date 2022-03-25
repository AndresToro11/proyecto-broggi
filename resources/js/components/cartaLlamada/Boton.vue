<template>
    <div>
        <datos-administrativos></datos-administrativos>
        <datos-personales @get-datapersonal="getDataPersonal"></datos-personales>
        <datos-incidentes @get-dataincidente="getDataIncidente"></datos-incidentes>
        <h3>boton</h3>
        <button type="button">Cancelar</button>
        <button type="button" @click="insertBD()">Aceptar</button>
        <expedientes-relacionados></expedientes-relacionados>
        <h4>Funciona</h4>
    </div>
</template>
<script>
export default {
    data() {
        return {
            idDatosPersonales: [],
            cartaLlamada: {
                temps_trucada: "contador",
                dades_personals_id: " ",
                telefon: " ",
                procedencia_trucada: " ",
                origen_trucada: " ",
                nom_trucada: "null",
                municipis_id_trucada: " ",
                adreca_trucada: " ",
                fora_catalunya: " ",
                provincies_id: " ",
                municipis_id: " ",
                tipus_localitzacions_id: " ",
                descripcio_localitzacio: " ",
                detall_localitzacio: " ",
                altres_ref_localitzacio: "",
                incidents_id: " ",
                nota_comuna: " ",
                expedients_id: " ",
                usuaris_id: " ",
            },
        };
    },
    methods: {
        select() {
            let me = this;
            console.log("Entrando a la select");
            axios
                .get("/datosPersonales")
                .then((response) => {
                    console.log("Datos Personales");
                    me.idDatosPersonales = response.data;
                })
                .catch((error) => {
                    this.console.log("Error:");
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },
        getDataPersonal(array) {
                (this.cartaLlamada.telefon = array.telefono),
                (this.cartaLlamada.procedencia_trucada = array.procedencia),
                (this.cartaLlamada.origen_trucada = array.origen),
                (this.cartaLlamada.municipis_id_trucada = array.municipio),
                (this.cartaLlamada.adreca_trucada = array.direccion),
                (this.cartaLlamada.nota_comuna = array.notaComun);
        },
        getDataIncidente(array) {
                if (array.localizacion =='Fuera Cataluña') {
                    (this.cartaLlamada.fora_catalunya = 1);
                }else{
                    (this.cartaLlamada.fora_catalunya = 0);
                }
                (this.cartaLlamada.provincies_id = array.provincia),
                (this.cartaLlamada.municipis_id = array.municipio),
                (this.cartaLlamada.tipus_localitzacions_id = array.localizacion),
                (this.cartaLlamada.descripcio_localitzacio = array.descripcio_localitzacio),
                (this.cartaLlamada.detall_localitzacio = array.detall_localitzacio),
                (this.cartaLlamada.incidents_id = array.incidente);
        },
        getDataAdministrativos(contador) {
            this.contador = contador;
        },
        insertBD() {
            let me = this;
            axios
                .post("/llamada", me.cartaLlamada)
                .then(function (response) {
                    console.log("Insert OK");
                })
                .catch(function (error) {
                    this.console.log("Error:");
                    console.log(error);
                });
        },
    },
    computed: {
        descripcioLocalitzacio: function () {
            let varianle = -1;
            for (
                let index = 0;
                index < this.idDatosPersonales.length;
                index++
            ) {
                if (
                    cartaLlamada.telefon ==
                    this.idDatosPersonales.telefono[index]
                ) {
                    varianle = this.idDatosPersonales.id[index];
                }
            }
            if (varianle != -1) {
                this.cartaLlamada.dades_personals_id = varianle;
            }
        },
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
