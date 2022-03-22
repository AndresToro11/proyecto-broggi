<template>
    <div>
        <datos-administrativos></datos-administrativos>
        <datos-personales @getDataPersonal="getDataPersonal"></datos-personales>
        <datos-incidentes
            @getDataIncidente="getDataIncidente"
        ></datos-incidentes>
        <!-- <Personals @getDataPersonal="getDataPersonal"></Personals>
        <Incidente @getDataPersonal="getDataPersonal"></Incidente> -->
        <h3>boton</h3>
        <button type="button">Cancelar</button>
        <button type="button" @click="botonBD()">Aceptar</button>
        <expedientes-relacionados></expedientes-relacionados>
    </div>
</template>
<script>
import Administrativo from "@/components/DatosAdministrativos";
import Personal from "@/components/DatosPersonales";
import Incidente from "@/components/DatosIncidente";
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
            (cartaLlamada.telefon = array.telefono),
                (cartaLlamada.procedencia_trucada = array.procedencia),
                (cartaLlamada.origen_trucada = array.origen),
                (cartaLlamada.municipis_id_trucada = array.municipio),
                (cartaLlamada.adreca_trucada = array.direccion),
                (cartaLlamada.nota_comuna = array.notaComun);
        },
        getDataIncidente(array) {
            (cartaLlamada.fora_catalunya = array.catalunya),
                (cartaLlamada.provincies_id = array.provincia),
                (cartaLlamada.municipis_id = array.municipio),
                (cartaLlamada.tipus_localitzacions_id = array.localizacion),
                (cartaLlamada.descripcio_localitzacio =
                    array.descripcio_localitzacio),
                (cartaLlamada.detall_localitzacio = array.detall_localitzacio),
                (cartaLlamada.incidents_id = array.incidente);
        },
        getDataAdministrativos(contador) {
            this.contador = contador;
        },
        insertBD(cartaLlamada) {
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
        botonBD() {
            console.log("AVEZTRUZ");
            this.$emit("setDataPersonal");
            this.$emit("setDataIncidente");
            this.$emit("setDataAdministrativos");
            setDataPersonal();
            setDataIncidente();
            Administrativo.setDataAdministrativos();
            setTimeout(insertBD(cartaLlamada), 2000);
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
    components: {
        Personal,
        Administrativo,
        Incidente,
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
