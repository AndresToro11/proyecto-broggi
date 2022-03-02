<template>
    <div class="mt-4">
        <div class="card" v-for="expediente in expedientes" :key="expediente.id">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        Expediente {{ expediente.id }}
                    </div>
                    <div class="col">
                        Operador LaLacra
                    </div>
                    <div class="col">
                        fecha {{ expediente.data_creacio }}
                    </div>
                    <div class="col">
                        estado {{ expediente.estats_expedients_id }}
                    </div>
                </div>
                <div class="row" v-for="carta in expediente.cartas_trucades" :key="carta.id">
                    <div class="col">
                        Codigo llamada {{ carta.id }}
                    </div>
                        <div class="col">
                        Provincia {{ carta.provincies_id }}
                    </div>
                    <div class="col">
                        Municipio {{ carta.municipis_id }}
                    </div>
                    <div class="col">
                        Incidente {{ carta.incidents_id }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                expedientes: [],
                cartaLlamada: []
            }
        },

        methods:{
            selectExpedientes(){
            let me = this;
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
            },

            selectLlamada(){
            let me = this;
            axios
                .get('/expediente')
                .then(response => {
                    me.expedientes = response.data;
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
