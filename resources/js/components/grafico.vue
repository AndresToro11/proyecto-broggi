<template>
    <div>
        <canvas id="grafico"></canvas>
        
        <div>
            <button v-on:click="selectProvincias">Provincias</button>
            <button v-on:click="selectMunicipios">Municipios</button>
            <button v-on:click="selectUsuariosIncidentes">Incidentes</button>
            
            <select class="form-control" v-on:change="selectUsuario()" v-model="selected">
                <option value="0" disabled selected>Usuarios</option>
                <option v-for="usuario in usuarios" :key="usuario.id" :value="usuario.id" >
                    {{ usuario.codi }}
                </option>
            </select>
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
                usuario: {},
                selected: ''
            }
        },

        methods:{
            selectProvincias(){
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
                .finally(() => this.loading = false);
            },

            selectMunicipios(){
                axios
                .get('/grafico/municipios')
                .then(response => {
                    let titulo = 'Incidentes'
                    let municipios = [];
                    let type = 'doughnut';
                    municipios = response.data;
                    this.grafico(municipios, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },

            selectUsuarios(){
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
                let incidentes;
                let type = 'bar';
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
                .finally(() => this.loading = false);
            },

            selectUsuario(){
                //let user = 2;
                let type = 'doughnut';
                let usuarios = [];
                let titulo;
                axios
                .get('/grafico/usuarios/' + this.selected)
                .then(response => {
                    usuarios = response.data;
                    titulo = usuarios[0]['usuario'];
                    this.grafico(usuarios, type, titulo)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },

            grafico(datos, tipo, titulo){
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
                grafica.canvas.parentNode.style.width = '800px';
                grafica.canvas.parentNode.style.width = '800px';
            },
        },

        mounted() {
            this.selectUsuarios();
            this.selectUsuariosIncidentes()
        }
    }
    //https://programmerclick.com/article/27651329726/
</script>
