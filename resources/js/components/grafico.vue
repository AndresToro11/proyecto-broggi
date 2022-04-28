<template>
    <div class="m-4">
        <h1 class="m-5">Gráficos</h1>

        <div v-if="loading == true">
            <div id="loader" class="text-center">
                <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
            </div>
            <canvas id="grafico" hidden></canvas>
        </div>

        <div v-else>
            <canvas id="grafico"></canvas> 
            <br><br>
        </div>
                    <!-- BOTONES -->
        <div> 
            <div>
                <button class="btn" @click="selectProvincias">Provincias</button>
                <button class="btn waves-effect waves-light" @click="selectMunicipios">Municipios</button>
                <button class="btn" @click="selectUsuariosIncidentes">Incidentes</button><br>
            </div>
            <div class="input-field col s12" v-if="showUsuarios == true">
                <select class="browser-default" v-on:change="selectUsuario()" v-model="selected">
                    <option value="0" disabled selected>Usuarios</option>
                    <option v-for="usuario in usuarios" :key="usuario.id" :value="usuario.id" >
                        {{ usuario.codi }}
                    </option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
    import Chart from "chart.js/auto";

    let grafica;

    export default {
        data(){
            return{
                usuarios: [],
                selected: 0,
                loading: false,
                showUsuarios: false
            }
        },

        methods:{
            selectProvincias(){

                this.loading = true;

                axios
                .get('/grafico/provincias')

                .then(response => {
                    let titulo = 'Incidentes'
                    let provincias = [];
                    let type = 'bar';
                    provincias = response.data;
                    this.grafico(provincias, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false,
                                this.showUsuarios = false,
                                this.selected = 0);
            },

            selectMunicipios(){
                this.loading = true;
                axios
                .get('/grafico/municipios')
                .then(response => {
                    let titulo = 'Incidentes'
                    let municipios = [];
                    let type = 'bar';
                    municipios = response.data;
                    this.grafico(municipios, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false,
                                this.showUsuarios = false,
                                this.selected = 0);
            },

            selectUsuarios(){
                this.loading = true;
                let me = this;
                axios
                .get('/grafico/usuarios')
                .then(response => {
                    me.usuarios = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },

            selectUsuariosIncidentes(){
                this.loading = true;
                let incidentes;
                let type = 'doughnut';
                let titulo = 'Incidentes';
                axios
                .get('/grafico/usuarios-incidentes')
                .then(response => {
                    incidentes = response.data;
                    this.grafico(incidentes, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false,
                                this.showUsuarios = true,
                                this.selected = 0);
            },

            selectUsuario(){
                this.loading = true;
                let type = 'doughnut';
                let usuarios = [];
                let titulo;
                axios
                .get('/grafico/usuarios/' + this.selected)
                .then(response => {
                    usuarios = response.data;
                    this.grafico(usuarios, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },

            grafico(datos, tipo, titulo){
                this.loading = true;
                let objetos = [];
                let numeros = [];

                for (let i = 0; i < datos.length; i++) {
                    objetos.push(datos[i]['nombre']);
                    numeros.push(datos[i]['numero']);
                }

                let canva = document.getElementById("grafico").getContext('2d');

                if(grafica){
                    grafica.destroy();
                }

                grafica = new Chart(canva,
                {
                    type: tipo, //"doughnut" "pie" "polarArea" "bar" "line"
                    data: {
                        labels:  objetos,
                        datasets: [
                            {
                                label: titulo,
                                data: numeros,
                                borderWidth: 5,
                                backgroundColor: [
                                    'rgba(168, 29, 31, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(255, 72, 0)',
                                    'rgba(54, 135, 30)',
                                ],
                            },
                        ],
                    }
                });
                grafica.canvas.parentNode.style.width = '40%';
                grafica.canvas.parentNode.style.heigth = '40%';
                this.loading = false;
            },
        },

        mounted() {
            this.selectUsuarios();
            this.selectUsuariosIncidentes()
        }
    }
</script>
