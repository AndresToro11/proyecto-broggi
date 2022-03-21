<template>
    <div class="mt-4">

        <div class="test" v-for="expediente in expedientes" :key="expediente.id">
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 1000px">
                    <div class="row">
                        <div class="col">
                            Expediente: {{ expediente.id }}
                        </div>
                        <div class="col">
                            Operador: {{
                                expediente.cartas_trucades[expediente.cartas_trucades.length - 1].usuari.codi
                            }}
                        </div>
                        <div class="col">
                            fecha: {{ expediente.data_creacio }}
                        </div>
                        <div class="col">
                            estado: {{ expediente.estat_expedient.estat }}
                        </div>
                    </div>
                </a>
            </p>
            <div class="collapse border m-4" id="collapseExample">
                    <div class="border m-4 p-4" v-for="carta in expediente.cartas_trucades" :key="carta.id">
                        <div class="row" >
                            <div class="col">
                                Codigo llamada: {{ carta.id }}
                            </div>
                                <div class="col">
                                Provincia: {{ carta.provincia.nom }}
                            </div>
                            <div class="col">
                                Municipio: {{ carta.municipi.nom }}
                            </div>
                            <div class="col">
                                Incidente: {{ carta.incident.descripcio }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Nota común: "{{ carta.nota_comuna }}"
                            </div>
                            <div class="col-2">
                                Fuera de cataluña:
                                <div v-if="carta.fora_catalunya">
                                    Si
                                </div>
                                <div v-else>
                                    No
                                </div>
                            </div>
                            <div class="col-3">
                                Tiempo de la llamada: {{ carta.temps_trucada }}
                            </div>
                            <div class="col-3">
                                Direccion: {{ carta.adreca_trucada }}
                            </div>
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
                expedientes: []
            }
        },

        methods:{
            selectExpedientes(){
            
            let me = this;
            axios
                .get('/expedientes')
                .then(response => {
                    me.expedientes = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
                .finally(() => this.loading = false);
            }
        },
        mounted() {
            console.log('¡¡Componente expedientes up!!')
            this.selectExpedientes();
        }
    }
</script>
