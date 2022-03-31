<template>
    <div class="main">
        <!-- <datos-administrativos></datos-administrativos> -->
        <div class="datos-incidentes">
            <datos-incidentes @getDataIncidente="getDataIncidente"></datos-incidentes>
        </div>
        <div class="datos-personales">
            <datos-personales @getDataPersonal="getDataPersonal"></datos-personales>
        </div>
        <!-- <button type="button" @click="setDataPersonal(), setDataIncidente(), setDataAdministrativos(),insertBD(cartaLlamada)">Aceptar</button>
        <expedientes-relacionados></expedientes-relacionados> -->
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
                descripcio_localitzacio:" ",
                detall_localitzacio: " ",
                altres_ref_localitzacio: "",
                incidents_id: " ",
                nota_comuna: " ",
                expedients_id: " ",
                usuaris_id: " "
            },
        };
    },
    methods: {
        select() {
        },
        getDataPersonal(array) {
                cartaLlamada.telefon= array.telefono,
                cartaLlamada.procedencia_trucada= array.procedencia,
                cartaLlamada.origen_trucada= array.origen,
                cartaLlamada.municipis_id_trucada= array.municipio,
                cartaLlamada.adreca_trucada= array.direccion,
                cartaLlamada.nota_comuna= array.notaComun
        },
        getDataIncidente(array) {
                cartaLlamada.fora_catalunya= array.catalunya,
                cartaLlamada.provincies_id= array.provincia,
                cartaLlamada.municipis_id= array.municipio,
                cartaLlamada.tipus_localitzacions_id= array.localizacion,
                cartaLlamada.descripcio_localitzacio= array.descripcio_localitzacio,
                cartaLlamada.detall_localitzacio= array.detall_localitzacio,
                cartaLlamada.incidents_id= array.incidente
        },
        getDataAdministrativos(contador) {
            this.contador = contador;
        },
        insertBD(cartaLlamada) {
        }
    },
    computed:{
        descripcioLocalitzacio: function () {
            let varianle = -1;
            for (let index = 0; index < this.idDatosPersonales.length ; index++) {
                if (cartaLlamada.telefon == this.idDatosPersonales.telefono[index]) {
                    varianle = this.idDatosPersonales.id[index];
                }
            }
            if (varianle != -1) {
                this.cartaLlamada.dades_personals_id=varianle;
            }
        },
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>

<style>
    .main{
        display: flex;
        flex-direction: column;
    }
</style>
