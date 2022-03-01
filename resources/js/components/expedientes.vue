<template>
    <div class="mt-4">
        <div class="card" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
            <div class="card-body">
                
                <div class="row" v-for="expediente in expedientes" :key="expediente.id">
                    {{ expediente.id }}
                    <div class="col">
                        Expediente {{ expediente.id }}
                    </div>
                    <div class="col">
                        Operador: operador1
                    </div>
                    <div class="col">
                        fecha {{ expediente.data_creacio }}
                    </div>
                    <div class="col">
                        estado {{ expediente.estats_expedients_id }}
                    </div>
                </div>
                
            </div>
        </div>
        <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <!-- <div class="card">
                    <div class="card-body">
                        <div class="row" v-for="cartaLlamada in expedientes.cartas_trucades" :key="expediente.cartas_trucades.id">
                            <div class="col">
                                codigo {{ expediente.cartas_trucades.id }}
                            </div>
                            <div class="col">
                                Provincia {{ expediente.cartas_trucades.provincies_id }}
                            </div>
                            <div class="col">
                                Ciudad {{ expediente.cartas_trucades.municipis_id }}
                            </div>
                            <div class="col">
                                Incidente {{ expediente.cartas_trucades.incidents_id }}
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                expedientes: []
            }
        },

        methods:{
            select(){
            let me = this;
            console.log('entrando a la select');
            axios
                .get('/expediente')
                .then(response => {
                    me.expedientes = response.data;
                    console.log('hola');
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            }
        },

        created() {
            this.select();
        },
        mounted() {
            
            console.log('¡¡Componente montado!!')
        }
    }
</script>