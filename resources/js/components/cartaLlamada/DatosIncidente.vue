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
                                    <div class="mdc-checkbox" data-mdc-auto-init="MDCCheckbox">
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
                                        <span class="mdc-floating-label" id="my-label-id">Antedecentes</span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Second Part -->
                        <!-- <input type="hidden" id="anPageName" name="page" value="390_1493" />
                        <div class="frame-1">
                        <div class="procedencia-de-la-llamada">
                            <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">Procedencia de la llamada</span>
                            <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                            <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                        <div class="origen-de-la-llamada">
                            <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">Origen de la llamada</span>
                            <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                            <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                        <div class="municipio">
                            <div class="mdc-select mdc-select--filled demo-width-class">
                            <div
                                class="mdc-select__anchor custom-enhanced-select-width"
                                role="button"
                                aria-haspopup="listbox"
                                aria-expanded="false"
                            >
                                <span class="mdc-select__ripple"></span> <span id="demo-label" class="mdc-floating-label">Municipio</span>
                                <span class="mdc-select__selected-text-container">
                                <span id="demo-selected-text" class="mdc-select__selected-text"></span>
                                </span>
                                <span class="mdc-select__dropdown-icon">
                                <span class="mdc-select__dropdown-icon-inactive material-icons">arrow_drop_down</span>
                                <span class="mdc-select__dropdown-icon-active material-icons">arrow_drop_up</span>
                                </span>
                                <span class="mdc-line-ripple"></span>
                            </div>
                            <div class="mdc-select__menu mdc-menu mdc-menu-surface mdc-menu-surface--fullwidth">
                                <ul class="mdc-list" id="select_dropdown" role="listbox" aria-label="listbox">
                                <li class="mdc-list-item" data-value="Item" role="option">
                                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Item</span>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div> -->
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
        "datosDelAccidente",
        "mapa",
        "overlapGroup",
        "frameMap",
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
            new mdc.checkbox.MDCCheckbox(document.querySelector(".guardar-datos-checkbox .mdc-checkbox"));
            new mdc.textField.MDCTextField(document.querySelector(".telefono .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".flex-col-item-Direccion-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".flex-col-item-Antedecendes-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".procedencia-de-la-llamada .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".origen-de-la-llamada .mdc-text-field"));
            new mdc.select.MDCSelect(document.querySelector(".municipio .mdc-select"));
        },
    };
</script>

<style>
    /* .carta-de-llamada-default {
    align-items: flex-start;
    background-color: var(--white);
    display: flex;
    height: 1080px;
    padding: 0 89px;
    width: 1920px;
    }

    .carta-de-llamada-default .container-scrolling::-webkit-scrollbar {
    display: none;
    width: 0;
    }

    .carta-de-llamada-default .container-scrolling {
    align-items: flex-start;
    display: flex;
    height: 908px;
    left: 92px;
    min-width: 1739px;
    overflow-y: scroll;
    padding: 0 8px;
    position: fixed;
    top: 172px;
    z-index: 1;
    }

    .carta-de-llamada-default .flex-col {
    align-items: flex-start;
    align-self: flex-end;
    display: flex;
    flex-direction: column;
    margin-bottom: -560px;
    min-height: 1418px;
    width: 621px;
    }

    .carta-de-llamada-default .flex-row {
    align-items: flex-end;
    display: flex;
    height: 80px;
    min-width: 402px;
    }

    .carta-de-llamada-default .flex-col-1 {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 68px;
    width: 218px;
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

    .carta-de-llamada-default .guardar-datos-checkbox {
    height: 40px;
    margin-left: 41px;
    width: 40px;
    }

    .carta-de-llamada-default .guardar-datos {
    letter-spacing: 0.15px;
    line-height: 24px;
    margin-bottom: 8px;
    min-height: 24px;
    min-width: 103px;
    white-space: nowrap;
    }

    .carta-de-llamada-default .flex-row-1 {
    align-items: flex-start;
    display: flex;
    height: 1336px;
    margin-top: 2px;
    min-width: 621px;
    }

    .carta-de-llamada-default .flex-col-2 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-top: 4px;
    min-height: 794px;
    width: 265px;
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

    .carta-de-llamada-default .flex-col-item-Antedecendes-Up {
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

    .flex-col-item-Antedecendes-Up
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .flex-col-item-Direccion-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .flex-col-item-Antedecendes-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .flex-col-item-Direccion-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .flex-col-item-Antedecendes-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .flex-col-item-Direccion-Up .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .flex-col-item-Antedecendes-Up .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .carta-de-llamada-default .overlap-group {
    align-items: flex-start;
    align-self: flex-end;
    background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237145d42a31b3d71f3385b/img/mapa@1x.png);
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    margin-bottom: 262px;
    margin-left: 46px;
    min-width: 1px;
    }

    .carta-de-llamada-default .flex-col-3 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 3px;
    min-height: 1336px;
    width: 306px;
    }

    .carta-de-llamada-default .procedencia-de-la-llamada {
    height: 60px;
    width: 263px;
    }

    .carta-de-llamada-default .flex-col-item-1 {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .carta-de-llamada-default .flex-row-2 {
    align-items: flex-start;
    display: flex;
    height: 922px;
    margin-left: 7px;
    margin-top: -177px;
    min-width: 1092px;
    }

    .carta-de-llamada-default .flex-col-4 {
    align-items: flex-start;
    align-self: flex-end;
    display: flex;
    flex-direction: column;
    min-height: 609px;
    width: 313px;
    }

    .carta-de-llamada-default .flex-row-3 {
    align-items: center;
    display: flex;
    height: 289px;
    margin-left: 0.5px;
    margin-top: 94px;
    min-width: 313px;
    }

    .carta-de-llamada-default .flex-col-5 {
    align-items: center;
    display: flex;
    flex-direction: column;
    margin-left: 49px;
    min-height: 289px;
    width: 263px;
    }

    .carta-de-llamada-default .flex-row-4 {
    align-items: flex-start;
    display: flex;
    margin-left: 1px;
    margin-top: 24px;
    min-width: 188px;
    }

    .carta-de-llamada-default .hide-container {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 686px;
    width: 779px;
    }

    .carta-de-llamada-default .hide-up {
    background-color: var(--white);
    height: 313px;
    width: 779px;
    }

    .carta-de-llamada-default .hide-down {
    background-color: var(--white);
    height: 146px;
    margin-top: 227px;
    width: 779px;
    }

    .mdc-checkbox {
    box-sizing: content-box;
    }

    .guardar-datos-checkbox
    .mdc-checkbox__native-control:enabled:checked
    ~ .mdc-checkbox__background,
    .guardar-datos-checkbox
    .mdc-checkbox--selected
    .mdc-checkbox__native-control
    ~ .mdc-checkbox__background,
    .guardar-datos-checkbox
    .mdc-checkbox--anim-checked-unchecked
    .mdc-checkbox__native-control
    ~ .mdc-checkbox__background {
    background-color: #0066ff !important;
    border-color: #0066ff !important;
    }

    .guardar-datos-checkbox
    .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused
    .mdc-checkbox__ripple::before,
    .guardar-datos-checkbox
    .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused
    .mdc-checkbox__ripple::after {
    background-color: #0066ff !important;
    } */

    /* .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 263px;
    }

    .mdc-select--filled:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: #ffffff;
    width: 263px;
    } */

















































    /* Second Part */

/* .frame-1 {
    margin-left: 415px;
    margin-top: 110px;
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 230px;
  width: 263px;
}

.procedencia-de-la-llamada {
  height: 60px;
  width: 263px;
}

.origen-de-la-llamada {
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
  position: relative;
} */

</style>
