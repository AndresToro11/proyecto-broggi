<template width="200" height="100">
    <div>
        <canvas id="grafico" width="200" height="100"></canvas>
        <div>
            <button v-on:click="selectProvincias">Provincias</button>
            <button v-on:click="selectMunicipios">Municipios</button>
        </div>
    </div>
</template>

<script>
    import Chart from "chart.js/auto";

    export default {
        data(){
            var grafica;
        },


        methods:{
            selectProvincias(){
            axios
                .get('/grafico/provincias')
                .then(response => {
                    var provincias = [];
                    var encontrado = false;

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
                    this.grafico(provincias);
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
                    var provincias = [];
                    var encontrado = false;

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
                    this.grafico(provincias);
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            },
            
            grafico(provinciasSelect){

                if (grafica) {
                    grafica.destroy();
                }

                let provincias = [];
                let numeros = [];

                for(var provincia in provinciasSelect) {
                    provincias.push(provincia);
                    numeros.push(provinciasSelect[provincia]);
                }

                grafica = new Chart (document.getElementById("grafico").getContext('2d'), {
                    //Aquí podría haber un if para cambiar el gráfico con un evento de VUE al momento con el metodo destroy.
                    type: /*"doughnut"*/ "pie",
                    data: {

                        labels:  provincias,
                        datasets: [
                            {
                                label: "Incidentes",
                                data: numeros,
                                borderWidth: 1,
                                backgroundColor: [
                                    'rgba(168, 29, 31, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)'
                                ],
                            },
                        ],
                    }
                });
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
