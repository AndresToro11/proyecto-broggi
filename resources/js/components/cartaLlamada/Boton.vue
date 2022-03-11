<template>
    <div>
        <datos-administrativos></datos-administrativos>
        <datos-personales @getData="getData"></datos-personales>
        <datos-incidentes></datos-incidentes>
        <Personals @getData="getData"></Personals>
        <h3>boton</h3>
        <button type="button">Cancelar</button>
        <button type="button" @click="setDataPersonal(), setDataIncidente()">
            Aceptar
        </button>
        <expedientes-relacionados></expedientes-relacionados>
    </div>
</template>
<script>
export default {
    data() {
        return {
            array: [],
            cartaLlamada:{
                temps_trucada: contador,
                dades_personals_id: " ",
                telefon: arrayPersonal.telefono,
                procedencia_trucada: arrayPersonal.procedencia,
                origen_trucada: arrayPersonal.origen,
                nom_trucada: "null",
                municipis_id_trucada: arrayPersonal.municipio,
                adreca_trucada: arrayPersonal.direccion,
                fora_catalunya: arrayIncidente.catalunya,
                provincies_id: arrayIncidente.provincia,
                municipis_id: arrayIncidente.municipio,
                tipus_localitzacions_id: arrayIncidente.localizacion,
                descripcio_localitzacio:arrayIncidente.carretera+" "+arrayIncidente.puntoKm+" "+ arrayIncidente.sentido + " Direccion"+arrayIncidente.direccion+" Numero puerta:"+arrayIncidente.numPuerta+" Escalera:"+arrayIncidente.escalera+" Piso:"+arrayIncidente.piso+" Puerta:"+arrayIncidente.puerta ,
                detall_localitzacio:" ",
                altres_ref_localitzacio:" ",
                incidents_id: arrayIncidente.incidente,
                nota_comuna: arrayPersonal.notaComun,
                expedients_id: " ",
                usuaris_id:" "
            }
        };
    },
    methods: {
        getDataPersonal(array) {
            this.arrayPersonal = array;
        },
        getDataIncidente(array) {
            this.arrayIncidente = array;
        },
        getDataAdministrativos(contador) {
            this.contador = contador;
        },
        insertBD() {},
    },
};
</script>
