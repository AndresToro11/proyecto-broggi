<template>
    <div>
        <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" />
            <div class="container-center-horizontal">
                <div class="carta-de-llamada-default screen">
                    <div class="container-scrolling">
                        <div class="flex-col">
                            <div class="flex-row">
                                <div class="flex-col-1">
                                    <h1 class="title valign-text-middle gothica1-normal-black-28px">Carta de llamada</h1>
                                    <div class="datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                                        Datos del interlocutor
                                    </div>
                                </div>
                                <div class="guardar-datos-checkbox">
                                    <div class="mdc-checkbox" data-mdc-auto-init="MDCCheckbox" data-id="anima-widget">
                                        <input type="checkbox" checked class="mdc-checkbox__native-control" />
                                        <div class="mdc-checkbox__background">
                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                        </svg>
                                        <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                    <div class="mdc-checkbox__ripple"></div>
                                </div>
                                <!-- <script>
                                mdc.autoInit();
                                </script> -->
                            </div>
                            <div class="guardar-datos roboto-normal-black-16px">Guardar datos</div>
                        </div>
                        <div class="flex-row-1">
                            <div class="flex-col-2">
                                <div class="telefono">
                                    <label class="mdc-text-field mdc-text-field--filled">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">Teléfono</span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                    <!-- <script>
                                        new mdc.textField.MDCTextField(document.querySelector(".telefono .mdc-text-field"));
                                    </script> -->
                                </div>
                                <div class="flex-col-item">
                                    <label class="mdc-text-field mdc-text-field--filled">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">Direccion</span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                    <!-- <script>
                                        new mdc.textField.MDCTextField(document.querySelector(".flex-col-item .mdc-text-field"));
                                    </script> -->
                                </div>
                                <div class="flex-col-item">
                                    <label class="mdc-text-field mdc-text-field--filled">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">Antedecentes</span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                    <!-- <script>
                                        new mdc.textField.MDCTextField(document.querySelector(".flex-col-item .mdc-text-field"));
                                    </script> -->
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
    data() {
        return {
            municipios: [],
            provincias: [],
            comarcas: [],
            tiposLocalizaciones: [],
            tIncidentes: [],
            incidentes: [],
            calle: {
                via: "",
                direccion: "",
                numPuerta: ""
            },
            calle2:{
                escalera: "",
                piso: "",
                puerta: ""
            },
            puntoSingular:{
                nombre: ""
            },
            carretera:{
                carretera: "",
                puntoKm: ""
            },
            carretera2:{
                sentido: ""
            },
            datos_incidente:{
                catalunya: "",
                comarca: "",
                provincia: "",
                municipio: "",
                localizacion: "",
                descripcio_localitzacio: "",
                detall_localitzacio: "",
                altres_ref_localitzacio: "",
                tiposIncidente: "",
                incidente: ""
            }
        };
    },
    computed: {
        descripcioLocalitzacio: function () {
            let varianle;
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle;
                    break;
                case 2:
                    varianle=this.puntoSingular;
                    break;
                case 3:
                    varianle=this.null;
                    break;
                case 4:
                    varianle=this.carretera;
                    break;
                case 5:
                    varianle=this.datos_incidente.provincia;
                    break;

                default:
                    break;
            }
            this.datos_incidente.descripcio_localitzacio = varianle;
        },
        detallLocalitzacio: function () {
            let varianle;
            switch (this.datos_incidente.localizacion) {
                case 1:
                    varianle=this.calle2;
                    break;
                case 2:
                    varianle=null;
                    break;
                case 3:
                    varianle=this.null;
                    break;
                case 4:
                    varianle=this.carretera2;
                    break;
                case 5:
                    varianle=null;
                    break;

                default:
                    break;
            }
            this.datos_incidente.detall_localitzacio = varianle;
        }
    },
    methods: {
        emit(){
            this.$emit();
        },
        select() {
            let me = this;
            console.log("Entrando a la select 2");
            axios
                .get("/municipio")
                .then((response) => {
                    console.log("Municipio OK");
                    me.municipios = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/provincia")
                .then((response) => {
                    console.log("Provincia OK");
                    me.provincias = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/comarca")
                .then((response) => {
                    console.log("Comarca OK");
                    me.comarcas = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/tiposIncidente")
                .then((response) => {
                    console.log("Comarca OK");
                    me.tIncidentes = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/incidente")
                .then((response) => {
                    console.log("Comarca OK");
                    me.incidentes = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/tiposLocalitzacion")
                .then((response) => {
                    console.log("Tipos Localizacion OK");
                    me.tiposLocalizaciones = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },setDataIncidente(){
            this.$emit("getDataIncidente", this.datos_incidente);
        },
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
<style>

</style>
