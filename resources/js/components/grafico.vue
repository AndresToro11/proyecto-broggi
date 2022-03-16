<template>
    <div>
        <canvas id="grafico"></canvas>
        <div>
            <button v-on:click="selectProvincias">Provincias</button>
            <button v-on:click="selectMunicipios">Municipios</button>
        </div>
    </div>
</template>

<script>
    import Chart from "chart.js/auto";
    import Loading from 'vue-loading-overlay';
    import 'vue-loading-overlay/dist/vue-loading.css';

    let grafica;

    export default {
        data(){
            return{
                
            }
        },

        methods:{
            selectProvincias(){
                axios
                .get('/grafico/provincias')

                .then(response => {
                    var provincias = [];
                    var type = 'bar';
                    provincias = response.data;
                    this.grafico(provincias, type)
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
                    
                    var municipios = [];
                    var type = 'doughnut';
                    municipios = response.data;
                    this.grafico(municipios, type)
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },
            
            grafico(datos, tipo){
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
                    type: tipo, //"doughnut" "pie" "polarArea" "bar" "line",
                    data: {
                        labels:  objetos,
                        datasets: [
                            {
                                label: "Incidentes",
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
            this.selectProvincias();
        }
    }

    //https://programmerclick.com/article/27651329726/
</script>
