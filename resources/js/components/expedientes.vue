<template>
    <div class="mt-4">
        <div class="" v-if="loading == true">
            <div id="loader" class="text-center">
                <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
            </div>
        </div>

        <div v-else>
            <input @input="buscarExpediente" v-model="buscar" type="text" name="" id="" placeholder="Buscar">
            <div class="test" v-for="expediente in expedientes" :key="expediente.id">
                <p>
                    <div v-if="expediente.estats_expedients_id == 1">
                        <a class="btn btn-success" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%">
                        
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
                    </div>

                    <div v-else-if="expediente.estats_expedients_id == 3">
                        <a class="btn btn-light" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%">
                        
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
                    </div>

                    <div v-else-if="expediente.estats_expedients_id == 4">
                        <a class="btn btn-primary" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%">
                        
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
                    </div>

                    <div v-else-if="expediente.estats_expedients_id == 5">
                        <a class="btn btn-danger" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%">
                        
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
                    </div>
                </p>

             <div class="collapse" v-bind:id="'multiCollapseExample'+expediente.id">
                 <div class=" d-flex justify-content-between">
                    <div class="card m-3" v-for="carta in expediente.cartas_trucades" :key="carta.id" style="width: 49%">
                        <div class="card-header text-light bg-success rounded-3" style="width: 30%">
                                    Codigo llamada: {{ carta.id }}</div>
                        <div class="card-body">
                            <div class="row m-4" >
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
                            <div class="row m-4">
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
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data(){
            return {
                expedientes: [],
                loading: false,
                contador : 0,
                buscar: '',
                actual: []
            }
        },

        methods:{
            selectExpedientes(){
                this.loading = true;
                let me = this;
                axios
                    .get('/expedientes')
                    .then(response => {
                        me.expedientes = response.data;
                        this.actual = this.expedientes;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },
            mostrarOcultar(){

            },
            buscarExpediente(){
                let response = [];
                if(this.buscar != ''){
                    for(let expediente of this.expedientes){
                        if(expediente.cartas_trucades[0].usuari.codi.toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                            response.push(expediente);
                        }
                    }
                    this.expedientes = response;
                }
                else{
                    this.expedientes = this.actual;
                }
            }
        },
        mounted() {
            this.selectExpedientes();
        }
    }
</script>
