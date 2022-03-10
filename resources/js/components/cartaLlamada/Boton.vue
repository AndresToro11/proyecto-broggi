<template>
    <div>
        <datos-administrativos></datos-administrativos>
        <datos-personales></datos-personales>
        <datos-incidentes></datos-incidentes>
        <Personals @getData="getData"></Personals>
        <h3>boton</h3>
        <button type="button">Cancelar</button>
        <button type="button" @click="insert()">Aceptar</button>
        <expedientes-relacionados></expedientes-relacionados>
    </div>
</template>
<script>
import DatosAdministrativos from "@/components/cartaLlamada/DatosAdministrativos";
import DatosPersonales from "@/components/cartaLlamada/DatosPersonales";
import DatosIncidente from "@/components/cartaLlamada/DatosIncidente";
import ExpedientesRelacionados from "@/components/cartaLlamada/ExpedientesRelacionados";
export default {
    data() {
        return {
            array: [],
        };
    },
    methods: {
        getData(array) {
            this.array = array;
        },
    },
    components: {
        DatosAdministrativos,
        DatosPersonales,
        DatosIncidente,
        ExpedientesRelacionados,
    },
};
</script>
