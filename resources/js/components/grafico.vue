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

    let grafica;
    

    export default {
        data(){
            
        },

        methods:{
            selectProvincias(){
            axios
                .get('/grafico/provincias')
                .then(response => {
                    var provincias = [];
                    var encontrado = false;
                    var type = 'bar';

                    for (let i = 0; i < response.data.length; i++) {
                        for(let provincia in provincias){

                            if(response.data[i] == provincia){
                                provincias[provincia] = provincias[provincia] + 1;
                                encontrado = true;
                            }
                        }
                        if(encontrado == false){
                            provincias[response.data[i]] = 1;
                        }
                        encontrado = false;
                    }
                    this.grafico(provincias, type);
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
                    var encontrado = false;
                    var type = 'doughnut';

                    for (let i = 0; i < response.data.length; i++) {
                        for(let municipio in municipios){

                            if(response.data[i] == municipio){
                                municipios[municipio] = municipios[municipio] + 1;
                                encontrado = true;
                            }
                        }
                        if(encontrado == false){
                            municipios[response.data[i]] = 1;
                        }
                        encontrado = false;
                    }
                    this.grafico(municipios, type);
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },
            
            grafico(datos, tipo){

                let objetos = [];
                let numeros = [];

                for(var dato in datos) {
                    objetos.push(dato);
                    numeros.push(datos[dato]);
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
            console.log('Component arriba.');
            this.selectMunicipios();
        }
    }

    //Graficos https://parzibyte.me/blog/2021/11/02/usar-chart-js-vue-js-webpack-npm/
    //https://www.chartjs.org/docs/latest/
</script>
