<template>
    <div>
        <h3>Datos Incidente</h3>
        <input type="checkbox" name="catalunya" id="catalunya" />
        <label for="catalunya">El accidente a sido fuera de catalunya</label>
        <br />
        <label for="comarca">Comarca</label>
        <select class="form-control" id="comarca">
            <option value=""></option>
            <option v-for="comarca in comarcas" :key="comarca.id">
                {{ comarca.nom }}
            </option>
        </select>
        <label for="provincia">Provincia</label>
        <select class="form-control" id="provincia">
            <option value=""></option>
            <option v-for="provincia in provincias" :key="provincia.id">
                {{ provincia.nom }}
            </option>
        </select>
        <label for="municipio">Municipio</label>
        <select class="form-control" id="municipio">
            <option value=""></option>
            <option v-for="municipio in municipios" :key="municipio.id">
                {{ municipio.nom }}
            </option>
        </select>
        <input type="text" name="municipio" id="municipio" hidden />
        <h4>Tipos de localizacion</h4>
        <input type="checkbox" id="carrers" />
        <label for="carrers">Calles</label>
        <input type="checkbox" id="puntoSingular" />
        <label for="puntoSingular">Punto singular</label>
        <input type="checkbox" id="carretera" />
        <label for="carretera">Carretera</label>
        <input type="checkbox" id="entidadPoblacion " />
        <label for="entidadPoblacion">Entidad Poblacion</label>
        <input type="checkbox" id="fueraCataluna" />
        <label for="fueraCataluna">Fuera Cataluña</label>
        <span>
            <label for="via">Via</label>
            <input type="text" name="via" id="via" />
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" />
            <label for="numero">Numero puerta</label>
            <input type="number" name="numero" id="numero" />
            <label for="escala">Escala</label>
            <input type="text" name="escala" id="escala" />
            <label for="piso">Piso</label>
            <input type="number" name="piso" id="piso" />
            <label for="puerta">Puerta</label>
            <input type="number" name="puerta" id="puerta" />
        </span>
        <span>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" />
        </span>
        <span>
            <label for="carretera">Carretera</label>
            <input type="text" name="carretera" id="carretera" />
            <label for="puntoKM">Punto kilometrico</label>
            <input type="number" name="puntoKM" id="puntoKM" />
            <label for="sentido">Sentido</label>
            <input type="text" name="sentido" id="sentido" />
        </span>
        <span>
            <label for="entidad">Entidad</label>
            <input type="text" name="entidad" id="entidad" />
        </span>
        <h4>Emergencia</h4>
        <label for="tiposIncidete">Tipo Incidente</label>
        <select class="form-control" id="tiposIncidete">
            <option value=""></option>
            <option v-for="tIncidente in tIncidentes" :key="tIncidente.id">
                {{ tIncidente.descripcio }}
            </option>
        </select>
        <label for="incidente">Incidente</label>
        <select class="form-control" id="incidente">
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
            tIncidentes: [],
            incidentes: [],
        };
    },
    methods: {
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
        },
    },

    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
