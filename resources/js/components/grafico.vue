<template width="200" height="100">
    <div>
        <canvas id="grafico" width="200" height="100"></canvas>
    </div>
</template>

<script>
    import Chart from "chart.js/auto";

    export default {

        data(){
            return {
                //provincias = []
            }
        },

        methods: {
            selectProvincias(){

            }
        },

        mounted() {
            console.log('Component arriba.')

            if (this.grafica) {
            this.grafica.destroy();
            }
            new Chart (document.getElementById("grafico").getContext('2d'), { 
                //Aquí podría haber un if para cambiar el gráfico con un evento de VUE al momento con el metodo destroy.
                type: /*"doughnut"*/ "pie",
                data: {
                    labels: ["Incendios", "Atracos", "Choques"],
                    datasets: [
                        {
                            label: "Incidentes",
                            data: [200, 300, 600],
                            borderWidth: 1,
                            backgroundColor: [
                                'rgba(168, 29, 31, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                        },
                    ],
                },
            });
        }
    }

    //Graficos https://parzibyte.me/blog/2021/11/02/usar-chart-js-vue-js-webpack-npm/
    //https://www.chartjs.org/docs/latest/
</script>
