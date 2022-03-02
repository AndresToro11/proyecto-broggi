<template width="200" height="100">
    <div>
        <canvas id="grafica" width="200" height="100"></canvas>
    </div>
</template>

<script>
    import Chart from "chart.js/auto";
    export default {
        mounted() {
            console.log('Component mounted.')

            if (this.grafica) {
            this.grafica.destroy();
            }
            new Chart(document.querySelector("#grafica"), { //Aquí podría haber un if para cambiar el gráfico con un evento de VUE al momento con el metodo destroy.
                type: "doughnut",
                data: {
                    labels: ["Incendios", "Atracos", "Choques"],
                    datasets: [
                        {
                            label: "Título del dataset",
                            data: [200, 200, 500],
                            borderWidth: 1,

                        },
                    ],
                },
            });
        }
    }

    //Graficos https://parzibyte.me/blog/2021/11/02/usar-chart-js-vue-js-webpack-npm/
    //https://www.chartjs.org/docs/latest/
</script>
