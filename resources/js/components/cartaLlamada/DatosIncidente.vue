<template>
    <div>
        <h3>Datos Incidente</h3>
        <input type="checkbox" name="catalunya" id="catalunya">
        <label for="catalunya">El accidente a sido fuera de catalunya</label>
        <br>
        <label for="comarca">Comarca</label>
        <select name="comarca" id="comarca"></select>
        <label for="provincia">Provincia</label>
        <select name="provincia" id="provincia"></select>
        <label for="municipio">Municipio</label>
        <select name="municipio" id="municipio"></select>
        <input type="text" name="municipio" id="municipio" hidden>
        <h4>Tipos de localizacion</h4>
        <input type="checkbox" id="carrers" >
        <label for="carrers">Calles</label>
        <input type="checkbox" id="puntoSingular">
        <label for="puntoSingular">Punto singular</label>
        <input type="checkbox" id="carretera" >
        <label for="carretera">Carretera</label>
        <input type="checkbox" id="entidadPoblacion ">
        <label for="entidadPoblacion">Entidad Poblacion</label>
        <input type="checkbox" id="fueraCataluna" >
        <label for="fueraCataluna">Fuera Cataluña</label>
        <span>
            <label for="via">Via</label>
            <input type="text" name="via" id="via">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion">
            <label for="numero">Numero puerta</label>
            <input type="number" name="numero" id="numero">
            <label for="escala">Escala</label>
            <input type="text" name="escala" id="escala">
            <label for="piso">Piso</label>
            <input type="number" name="piso" id="piso">
            <label for="puerta">Puerta</label>
            <input type="number" name="puerta" id="puerta">
        </span>
        <span>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </span>
        <span>
            <label for="carretera">Carretera</label>
            <input type="text" name="carretera" id="carretera">
            <label for="puntoKM">Punto kilometrico</label>
            <input type="number" name="puntoKM" id="puntoKM">
            <label for="sentido">Sentido</label>
            <input type="text" name="sentido" id="sentido">
        </span>
        <span>
            <label for="entidad">Entidad</label>
            <input type="text" name="entidad" id="entidad">
        </span>
        <h4>Emergencia</h4>
        <label for="tiposIncidete">Tipo Incidente</label>
            <select name="tiposIncidete" id="tiposIncidete"></select>
        <label for="incidente">Incidente</label>
            <select name="incidente" id="incidente"></select>

    </div>
</template>
<script>
    export default {
        data(){
            return{
                municipios: [],
                provincia: []
            }
        },
        methods:{
            select(){
                let me = this;
                console.log('Entrando a la select');
                axios
                    .get('/municipio')
                    .then(response => {
                        me.municipios=response.data;
                        console.log('ol');
                    })
                    .catch(error =>{
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
