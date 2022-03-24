<template>
    <div>

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
            new mdc.checkbox.MDCCheckbox(document.querySelector(".guardar-datos-checkbox .mdc-checkbox"));
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
    background-color: var(--white);
    display: flex;
    height: 1080px;
    /* padding: 0 89px; */
    width: 1920px;
    position: fixed;
    z-index: 3;
    }

    .carta-de-llamada-default .container-scrolling::-webkit-scrollbar {
    display: none;
    position: fixed;
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
    top: 590px;
    z-index: 3;
    }

    .carta-de-llamada-default .flex-col {
    align-items: flex-start;
    align-self: flex-end;
    display: flex;
    flex-direction: column;
    margin-bottom: -560px;
    min-height: 1418px;
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
    min-height: 265px;
    width: 265px;
    }

    .carta-de-llamada-default .flex-row {
    align-items: flex-end;
    display: flex;
    height: 80px;
    min-width: 402px;
    }

    .carta-de-llamada-default .flex-row-1 {
    align-items: flex-start;
    display: flex;
    height: 265px;
    margin-top: 2px;
    min-width: 265px;
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
    position: relative;
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
