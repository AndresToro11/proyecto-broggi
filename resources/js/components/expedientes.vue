<template>
    <div class="mt-5">
        <h1 class="m-5"><i class="fas fa-file-alt"></i> Expedientes</h1>
        <div class="" v-if="loading == true">
            <div id="loader" class="text-center">
                <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
            </div>
        </div>

        <div v-else>
            <input @input="buscarExpediente" class="validate" v-model="buscar" type="text" placeholder="Buscar">
            <div class="" v-for="expediente in expedientes" :key="expediente.id">
                <p>
                    <div v-if="expediente.estats_expedients_id == 1">
                        <a class="btn btn-success" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%; background-color: rgb(12, 122, 16);">

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

                    <div v-else-if="expediente.estats_expedients_id == 2">
                        <a class="btn btn-light" data-bs-toggle="collapse" :data-bs-target="'#multiCollapseExample'+expediente.id" role="button" aria-expanded="false" :aria-controls="'#multiCollapseExample'+expediente.id" style="width: 100%; background-color: rgb(253, 200, 24);">

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

            <div class="collapse" v-bind:id="'multiCollapseExample'+ expediente.id">
                <div class=" d-flex justify-content-center">
                    <div class="d-flex flex-wrap justify-content-between" style="width: 95%">
                        <div class="card" style="width: 49%">
                            <div :id="expediente.id + 'container'">
                                <plano :place="expediente.cartas_trucades[0].municipi.nom" :codigo="expediente.id"></plano>
                            </div>
                        </div>

                    <div class="card" v-for="carta in expediente.cartas_trucades" :key="carta.id" style="width: 49%">
                        <div class="card-header bg-light rounded-3" style="width: 30%">
                            Codigo llamada: {{ carta.id }}
                        </div>
                        <div class="card-body">
                            <div class="row" >
                                <div class="col">
                                    <hr style="width: 20%">
                                    <b>Provincia</b> <br> {{ carta.provincia.nom }}
                                </div>

                                <div class="col">
                                    <hr style="width: 20%">
                                    <b>Municipio</b> <br> {{ carta.municipi.nom }}
                                </div>
                                <div class="col">
                                    <hr style="width: 20%">
                                    <b>Incidente</b> <br> {{ carta.incident.descripcio }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr style="width: 20%">
                                    <b>Fuera de cataluña</b> <br>
                                    <div v-if="carta.fora_catalunya">
                                        Si
                                    </div>
                                    <div v-else>
                                        No
                                    </div>
                                </div>
                                <div class="col">
                                    <hr style="width: 20%">
                                     <b>Tiempo de la llamada</b> <br> {{ carta.temps_trucada }}
                                </div>
                                <div class="col">
                                    <hr style="width: 20%">
                                    <b>Direccion</b> <br> {{ carta.adreca_trucada }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr style="width: 70%">
                                    <b>Nota común</b> <br> "{{ carta.nota_comuna }}"
                                </div>
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
import plano from './plano.vue';
    export default {
  components: { plano },

        data(){
            return {
                expedientes: [],
                loading: false,
                contador : 0,
                buscar: '',
                actual: [],
                mapaOk: false,
                map: []
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
<style>
