<template>
    <div>
        <h6> <b>Datos Incidente </b> </h6>
        <div class="row">
            <div class="input-field col s4">
                <select class="form-control" id="provincia" v-model="datos_incidente.provincia" @change="setDataIncidente(datos_incidente), provinciaComarca()">
                    <option value="" disabled selected>Provincia</option>
                    <option v-for="provincia in provincias" :key="provincia.id" :value="provincia.id">
                        {{ provincia.nom }}
                    </option>
                </select>
            </div>
            <div class="input-field col s4">
                    <select class="form-control" id="comarca" v-model="datos_incidente.comarca" @change="activarFunciones(), comarcaMunicipio()">
                        <option value="" disabled selected>Comarca</option>
                        <option v-for="comarca in comarcas" :key="comarca.id" :value="comarca.id">
                                {{ comarca.nom }}
                        </option>
                    </select>

            </div>
            <div class="input-field col s4">
                <select class="form-control" id="municipio" v-model="datos_incidente.municipio" @change="activarFunciones()">
                    <option value="" disabled selected>Municipios</option>
                    <option v-for="municipio in municipios" :key="municipio.id" :value="municipio.id">
                        {{ municipio.nom }}
                    </option>
                </select>
            </div>
        </div>
        <h6>Tipos de localizacion</h6>
            <div class="input-field col s4">
                <select class="form-control" id="tiposLocalizacion" v-model="datos_incidente.localizacion" @change="activarFunciones()" required >
                    <option value="null" disabled></option>
                    <option v-for="tiposLocalizacion in tiposLocalizaciones" :key="tiposLocalizacion.id"  :value="tiposLocalizacion.id">
                        {{ tiposLocalizacion.tipus   }}
                    </option>
                </select>
            </div>
        <span v-if="datos_incidente.localizacion == 2">
                <div class="input-field col s4">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" v-model="puntoSingular.nombre" @blur="descripcioLocalitzacio()">
                </div>
        </span>
        <span v-else-if="datos_incidente.localizacion == 5">
                <div class="input-field col s4">
                    <label for="provincia">Provincia</label>
                    <input type="text" id="provinciaOut" v-model="fueraCatalunya.provincia" @blur="descripcioLocalitzacio()">
                </div>
        </span>
        <span v-else-if="datos_incidente.localizacion == 1">
            <div class="row">
                <div class="input-field col s4">
                        <label for="via">Via</label>
                        <input type="text" name="via" id="via" v-model="calle.via" @blur="descripcioLocalitzacio()">
                </div>
                <div class="input-field col s4">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" v-model="calle.direccion" @blur="descripcioLocalitzacio()">
                </div>
                <div class="input-field col s4">
                        <label for="numero">Numero puerta</label>
                        <input type="number" name="numero" id="numero" v-model="calle.numPuerta" @blur="descripcioLocalitzacio()">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="escalera">Escalera</label>
                    <input type="text" name="escalera" id="escalera" v-model="calle2.escalera" @blur="detallLocalitzacio()">
                </div>
                <div class="input-field col s4">
                    <label for="piso">Piso</label>
                    <input type="number" name="piso" id="piso" v-model="calle2.piso" @blur="detallLocalitzacio()">
                </div>
                <div class="input-field col s4">
                    <label for="puerta">Puerta</label>
                    <input type="number" name="puerta" id="puerta" v-model="calle2.puerta" @blur="detallLocalitzacio()">
                </div>
            </div>
        </span>

        <span v-else-if="datos_incidente.localizacion == 4">
            <div class="row">
                <div class="input-field col s4">
                    <label for="carretera">Carretera</label>
                    <input type="text" name="carretera" id="carretera" v-model="carretera.carretera" @blur="descripcioLocalitzacio()">
                </div>
                <div class="input-field col s4">
                    <label for="puntoKM">PK</label>
                    <input type="number" name="puntoKM" id="puntoKM" v-model="carretera.puntoKm" @blur="descripcioLocalitzacio()">
                </div>
                <div class="input-field col s4">
                    <label for="sentido">Sentido</label>
                    <input type="text" name="sentido" id="sentido" v-model="carretera2.sentido" @blur="detallLocalitzacio()">
                </div>
            </div>
        </span>
        <span v-if="datos_incidente.localizacion != 1 & datos_incidente.localizacion != 4">
            <br>
            <br>
            <br>
            <br>
        </span>

        <h6>Emergencia</h6>
        <div class="row">
            <div class="input-field col s6">
                <select class="form-control" id="tiposIncidete" v-model="datos_incidente.tiposIncidente"  @change="activarFunciones()">
                    <option value="" disabled selected>Tipo Incidente</option>
                    <option v-for="tIncidente in tIncidentes" :key="tIncidente.id" :value="tIncidente.id">
                        {{ tIncidente.descripcio }}
                    </option>
                </select>
            </div>
            <div class="input-field col s6">
                <select class="form-control" id="incidente" v-model="datos_incidente.incidente"  @change="activarFunciones()">
                    <option value="" disabled selected>Incidente</option>
                    <option v-for="incidente in incidentes" :key="incidente.id" :value="incidente.id">
                        {{ incidente.descripcio }}
                    </option>
                </select>
            </div>
        </div>
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
            fueraCatalunya:{
                provincia:""
            },
            datos_incidente:{
                catalunya: "",
                comarca: null,
                provincia: null,
                municipio: null,
                localizacion: null,
                descripcio_localitzacio: null,
                detall_localitzacio: null,
                // altres_ref_localitzacio: null,
                tiposIncidente: "",
                incidente: ""
            }
        };
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
            console.log('Incidente');
            this.$emit("get-dataincidente", this.datos_incidente);
        },descripcioLocalitzacio() {
            console.log("descripcion");
            let varianle;
            this.datos_incidente.descripcio_localitzacio = " ";
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle.via+" "+this.calle.direccion+" "+this.calle.numPuerta;
                    break;
                case 2:
                    varianle=this.puntoSingular.nombre;
                    break;
                case 3:
                    varianle=" ";
                    break;
                case 4:
                    varianle=this.carretera.carretera+" "+this.carretera.puntoKm;
                    break;
                case 5:
                    varianle=this.fueraCatalunya.provincia;
                    break;

                default:
                    break;
            }
            this.datos_incidente.descripcio_localitzacio = varianle;
            this.setDataIncidente();
        },
        detallLocalitzacio() {
            console.log("detalle");
            let varianle;
             this.datos_incidente.detall_localitzacio = " ";
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle2.escalera+" "+this.calle2.piso+" "+this.calle2.puerta;
                    break;
                case 2:
                    varianle=" ";
                    break;
                case 3:
                    varianle=" ";
                    break;
                case 4:
                    varianle=this.carretera2.sentido;
                    break;
                case 5:
                    varianle=" ";
                    break;

                default:
                    break;
            }
            this.datos_incidente.detall_localitzacio = varianle;
            this.setDataIncidente();
        },
        activarFunciones(){
            console.log("activar");
            this.descripcioLocalitzacio();
            this.detallLocalitzacio();
            this.setDataIncidente();
        },
        provinciaComarca(){
            debugger
            let ave = this.comarcas;
            this.comarcas = null;
            for (let index = 0; index < ave.length; index++) {
                if (this.datos_incidente.provincia == ave.provincies_id) {
                    this.comarcas+=this.provincias[index].comarques;
                }
            }
        },
        comarcaMunicipio(){
            let ave = this.municipios;
            this.municipios = null;
            for (let index = 0; index < ave.length; index++) {
                if (this.datos_incidente.comarca == ave.provincies_id) {
                    this.municipios+=this.comarcas[index].municipis;
                }
            }
        }
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
