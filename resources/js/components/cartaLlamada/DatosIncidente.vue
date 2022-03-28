<template>
    <div> <!-- TODO:  -->
        <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" />
        <div class="container-center-horizontal">
            <div class="carta-de-llamada-default screen">
                <div class="container-scrolling">
                    <div class="flex-col">
                        <div class="flex-row">
                            <div class="flex-col-1">
                                <h1 class="title valign-text-middle gothica1-normal-black-28px">
                                    Carta de llamada
                                </h1>
                                <div class="datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                                    Datos del interlocutor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row-1">
                        <div class="flex-col-2">
                            <div class="telefono">
                                <label class="mdc-text-field mdc-text-field--filled">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="my-label-id">
                                        Teléfono
                                    </span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                            <div class="flex-col-item-Direccion-Up">
                                <label class="mdc-text-field mdc-text-field--filled">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="my-label-id">Direccion</span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                            <div class="flex-col-item-Antedecendes-Up">
                                <label class="mdc-text-field mdc-text-field--filled">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="my-label-id">
                                        Antedecentes
                                    </span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- TODO: Second Column -->
                    <div class="flex-row-2">
                        <div class="flex-col-3">
                            <div class="procedencia-de-la-llamada">
                                <label class="mdc-text-field mdc-text-field--filled">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="my-label-id">
                                        Procedencia de la llamada
                                    </span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                            <div class="origen-de-la-llamada">
                                <label class="mdc-text-field mdc-text-field--filled">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="my-label-id">
                                        Origen de la llamada
                                    </span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                            <div class="municipio">
                                <div class="mdc-select mdc-select--filled demo-width-class">
                                    <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                        <span class="mdc-select__ripple"></span>
                                        <span id="demo-label" class="mdc-floating-label">
                                            Municipio
                                        </span>
                                        <span class="mdc-select__selected-text-container">
                                            <span id="demo-selected-text" class="mdc-select__selected-text"></span>
                                        </span>
                                        <span class="mdc-select__dropdown-icon">
                                            <span class="mdc-select__dropdown-icon-inactive material-icons">
                                                arrow_drop_down
                                            </span>
                                            <span class="mdc-select__dropdown-icon-active material-icons">
                                                arrow_drop_up
                                            </span>
                                        </span>
                                        <span class="mdc-line-ripple"></span>
                                    </div>
                                    <div class="mdc-select__menu mdc-menu mdc-menu-surface mdc-menu-surface--fullwidth">
                                        <ul class="mdc-list" id="select_dropdown" role="listbox" aria-label="listbox">
                                            <li class="mdc-list-item" data-value="Item" role="option">
                                                <span class="mdc-list-item__ripple"></span>
                                                <span class="mdc-list-item__text">
                                                    Item
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TODO: Third Column -->
                    <div class="flex-row-3">
                        <div class="flex-col-4">
                            <div class="nota-comun"> <!-- Nota Comun -->
                                <label class="mdc-text-field mdc-text-field--filled" id="notaComun">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="notaComunLabel">
                                        Nota Común
                                    </span>
                                    <input type="text" class="mdc-text-field__input" id="input-NotaComun" aria-labelledby="my-label-id"/>
                                    <span class="mdc-line-ripple"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as mdc from "material-components-web";
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
        props: [
        "cartaDeLlamada",
        "datosDelInterlocutor",
        "guardarDatos",
        ],
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
            new mdc.textField.MDCTextField(document.querySelector(".telefono .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".flex-col-item-Direccion-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".flex-col-item-Antedecendes-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".procedencia-de-la-llamada .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".origen-de-la-llamada .mdc-text-field"));
            new mdc.select.MDCSelect(document.querySelector(".municipio .mdc-select"));
            new mdc.textField.MDCTextField(document.querySelector(".nota-comun .mdc-text-field"));
        },
    };
</script>

<style>
    .carta-de-llamada-default {
    align-items: flex-start;
    display: flex;
    height: 320px;
    width: 891px;
    }

    .carta-de-llamada-default .container-scrolling {
    align-items: flex-start;
    display: flex;
    margin-left: 100px;
    height: 320px;
    width: 891px;
    left: 92px;
    top: 172px;
    z-index: 1;
    }

    .carta-de-llamada-default .flex-col {
    align-items: flex-start;
    align-self: flex-end;
    display: flex;
    flex-direction: column;
    min-height: 265px;
    width: 265px;
    }

    .carta-de-llamada-default .flex-col-1 {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 68px;
    width: 218px;
    }

    .carta-de-llamada-default .flex-col-2 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-top: 4px;
    width: 265px;
    }

    .carta-de-llamada-default .flex-row {
    align-items: flex-end;
    display: flex;
    height: 80px;
    }

    .carta-de-llamada-default .flex-row-1 {
    align-items: flex-start;
    display: flex;
    height: 265px;
    margin-top: 2px;
    }

    .carta-de-llamada-default .title {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    }

    .carta-de-llamada-default .datos-del-interlocutor {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    margin-left: 2px;
    margin-top: 36px;
    white-space: nowrap;
    }

    .carta-de-llamada-default .telefono {
    height: 56px;
    margin-left: 2px;
    width: 263px;
    }

    .telefono .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .telefono
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .carta-de-llamada-default .flex-col-item-Direccion-Up {
    height: 60px;
    margin-left: 2px;
    margin-top: 25px;
    width: 263px;
    }

    .flex-col-item-Direccion-Up
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .flex-col-item-Direccion-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .flex-col-item-Direccion-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .flex-col-item-Direccion-Up .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .carta-de-llamada-default .flex-col-item-Antedecendes-Up {
    height: 60px;
    margin-left: 2px;
    margin-top: 25px;
    width: 263px;
    }

    .flex-col-item-Antedecendes-Up
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .flex-col-item-Antedecendes-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .flex-col-item-Antedecendes-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .flex-col-item-Antedecendes-Up .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 263px;
    }

    .mdc-select--filled:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: #ffffff;
    width: 263px;
    }

    /* Second Column */
    .flex-row-2 {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 315px;
    margin-top: -261px;
    width: 263px;
    }

    .procedencia-de-la-llamada {
    height: 60px;
    width: 263px;
    }

    .origen-de-la-llamada {
    height: 60px;
    margin-top: 21px;
    width: 263px;
    }

    .municipio {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .procedencia-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .origen-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .municipio .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .municipio .custom-enhanced-select-width {
    width: 200px;
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    /* position: relative; */
    }

    /* Third Column */
    .flex-row-3 {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 628px;
    margin-top: -392px;
    width: 263px;
    height: 56px;
    }
    .nota-comun {
    height: 56px;
    margin-top: 166px;
    width: 263px;
    }
</style>
