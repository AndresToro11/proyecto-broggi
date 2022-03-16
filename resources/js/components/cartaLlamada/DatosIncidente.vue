<template>
    <div>
        <h3>Datos Incidente</h3>
        <input type="checkbox" name="catalunya" id="catalunya" v-model="datos_incidente.catalunya">
        <label for="catalunya">El accidente a sido fuera de catalunya</label>
        <br>
        <label for="comarca">Comarca</label>
        <select class="form-control" id="comarca" v-model="datos_incidente.comarca">
            <option value=""></option>
            <option v-for="comarca in comarcas" :key="comarca.id">
                {{ comarca.nom }}
            </option>
        </select>
        <label for="provincia">Provincia</label>
        <select class="form-control" id="provincia" v-model="datos_incidente.provincia" >
            <option value=""></option>
            <option v-for="provincia in provincias" :key="provincia.id">
                {{ provincia.nom }}
            </option>
        </select>
        <label for="municipio">Municipio</label>
        <select class="form-control" id="municipio" v-model="datos_incidente.municipio">
            <option value=""></option>
            <option v-for="municipio in municipios" :key="municipio.id">
                {{ municipio.nom }}
            </option>
        </select>
        <h4>Tipos de localizacion</h4>
        <select class="form-control" id="tiposLocalizacion" v-model="datos_incidente.localizacion">
            <option value=""></option>
            <option v-for="tiposLocalizacion in tiposLocalizaciones" :key="tiposLocalizacion.id">
                {{ tiposLocalizacion.tipus   }}
            </option>
        </select>
        <span>
            <label for="via">Via</label>
            <input type="text" name="via" id="via" v-model="calle.via">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" v-model="calle.direccion">
            <label for="numero">Numero puerta</label>
            <input type="number" name="numero" id="numero" v-model="calle.numero">
            <label for="escala">Escala</label>
            <input type="text" name="escala" id="escala" v-model="calle2.escala">
            <label for="piso">Piso</label>
            <input type="number" name="piso" id="piso" v-model="calle2.piso">
            <label for="puerta">Puerta</label>
            <input type="number" name="puerta" id="puerta" v-model="calle.puerta">
        </span>
        <span>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" v-model="puntoSingular.nombre">
        </span>
        <span>
            <label for="carretera">Carretera</label>
            <input type="text" name="carretera" id="carretera" v-model="carretera.carretera">
            <label for="puntoKM">Punto kilometrico</label>
            <input type="number" name="puntoKM" id="puntoKM" v-model="carretera.puntoKm">
            <label for="sentido">Sentido</label>
            <input type="text" name="sentido" id="sentido" v-model="carretera2.sentido">
        </span>
        <h4>Emergencia</h4>
        <label for="tiposIncidete">Tipo Incidente</label>
        <select class="form-control" id="tiposIncidete" v-model="datos_incidente.tiposIncidente">
            <option value=""></option>
            <option v-for="tIncidente in tIncidentes" :key="tIncidente.id">
                {{ tIncidente.descripcio }}
            </option>
        </select>
        <label for="incidente">Incidente</label>
        <select class="form-control" id="incidente" v-model="datos_incidente.incidente">
            <option value=""></option>
            <option v-for="incidente in incidentes" :key="incidente.id">
                {{ incidente.descripcio }}
            </option>
        </select>
    </div>
</template>
<script>
export default {
    data() {
        return {
            municipios: [],
            provincias: [],
            comarcas: [],
            tiposLocalizaciones: [],
            tIncidentes: [],
            incidentes: [],
            calle: {
                via: "",
                direccion: "",
                numPuerta: ""
            },
            calle2:{
                escalera: "",
                piso: "",
                puerta: ""
            },
            puntoSingular:{
                nombre: ""
            },
            carretera:{
                carretera: "",
                puntoKm: ""
            },
            carretera2:{
                sentido: ""
            },
            datos_incidente:{
                catalunya: "",
                comarca: "",
                provincia: "",
                municipio: "",
                localizacion: "",
                descripcio_localitzacio: "",
                detall_localitzacio: "",
                altres_ref_localitzacio: "",
                tiposIncidente: "",
                incidente: ""
            }
        };
    },
    computed: {
        descripcioLocalitzacio: function () {
            let varianle;
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle;
                    break;
                case 2:
                    varianle=this.puntoSingular;
                    break;
                case 3:
                    varianle=this.null;
                    break;
                case 4:
                    varianle=this.carretera;
                    break;
                case 5:
                    varianle=this.datos_incidente.provincia;
                    break;

                default:
                    break;
            }
            this.datos_incidente.descripcio_localitzacio = varianle;
        },
        detallLocalitzacio: function () {
            let varianle;
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle2;
                    break;
                case 2:
                    varianle=null;
                    break;
                case 3:
                    varianle=this.null;
                    break;
                case 4:
                    varianle=this.carretera2;
                    break;
                case 5:
                    varianle=null;
                    break;

                default:
                    break;
            }
            this.datos_incidente.detall_localitzacio = varianle;
        }
    },
    methods: {
        emit(){
            this.$emit();
        },
        select() {
            let me = this;
            console.log("Entrando a la select 2");
            axios
                .get("/municipio")
                .then((response) => {
                    console.log("Municipio OK");
                    me.municipios = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/provincia")
                .then((response) => {
                    console.log("Provincia OK");
                    me.provincias = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/comarca")
                .then((response) => {
                    console.log("Comarca OK");
                    me.comarcas = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/tiposIncidente")
                .then((response) => {
                    console.log("Comarca OK");
                    me.tIncidentes = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/incidente")
                .then((response) => {
                    console.log("Comarca OK");
                    me.incidentes = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/tiposLocalitzacion")
                .then((response) => {
                    console.log("Tipos Localizacion OK");
                    me.tiposLocalizaciones = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },setDataIncidente(){
            this.$emit("getDataIncidente", this.datos_incidente);
        },
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
