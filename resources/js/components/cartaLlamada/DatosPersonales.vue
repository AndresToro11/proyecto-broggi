<template>
    <div>
        <!-- <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" /> -->
        <div class="container-center-horizontal">
            <div class="carta-de-llamada-datos-personales-flex-row">
                <div class="datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                    Datos del incidente
                </div>
            </div>
            <div class="carta-de-llamada-datos-personales-flex-row-1">
                <div class="carta-de-llamada-datos-personales-flex-col">
                    <div class="flex-col-2">
                        <div class="comarca">
                            <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                                <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mdc-select__ripple"></span>
                                    <span id="demo-label" class="mdc-floating-label">
                                        Comarca
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
                        <div class="provincia">
                            <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                                <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mdc-select__ripple"></span>
                                    <span id="demo-label" class="mdc-floating-label">
                                        Provincia
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
                        <div class="municipio">
                            <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
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
                <div class="carta-de-llamada-datos-personales-flex-col-1">
                    <div class="flex-col-3">
                        <div class="tipo-de-localizacin">
                            <div class="mdc-select mdc-select--filled demo-width-class">
                                <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mdc-select__ripple"></span>
                                    <span id="demo-label" class="mdc-floating-label">
                                        Tipo de Localización
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
                                        <li class="mdc-list-item" data-value="Fuera de Catalunya" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                Fuera de Catalunya
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="Población" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                Población
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="Carretera" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                Carretera
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="Calle" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                Calle
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="Punto Singular" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                Punto Singular
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="referencia">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </div>
                    <img class="separation-down" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/separation-down@2x.svg"/>
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-2">
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-3">
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-4">
                    <div class="incidente">
                        <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                            <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                <span class="mdc-select__ripple"></span>
                                <span id="demo-label" class="mdc-floating-label">
                                    Tipos de Incidente
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
                                    <li class="mdc-list-item" data-value="X" role="option">
                                        <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">X</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tipo-de-incidente">
                        <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                            <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                <span class="mdc-select__ripple"></span>
                                <span id="demo-label" class="mdc-floating-label">
                                    Tipos de Incidente
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
                                    <li class="mdc-list-item" data-value="X" role="option">
                                        <span class="mdc-list-item__ripple"></span>
                                        <span class="mdc-list-item__text">X</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mapa-up" id="mapa-up">
                        <button class="mdc-button mdc-button--raised" id="mapa-up">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">
                                Mapa
                            </span>
                        </button>
                    </div>
                    <div class="flex-row-4">
                        <div class="aceptar" id="aceptar">
                            <button class="mdc-button mdc-button--raised" id="aceptar">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">
                                    Aceptar
                                </span>
                            </button>
                        </div>
                        <div class="cancelar" id="cancelar">
                            <button class="mdc-button mdc-button--raised" id="cancelar">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">
                                    Cancelar
                                </span>
                            </button>
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
            datos_personales:{
                telefono:"",
                antecedentes:"",
                procedencia:"",
                origen:"",
                municipio:"",
                direccion:"",
                notaComun:""
            }
        };
    },
    props: [
        "cartaDeLlamada",
        "datosDelInterlocutor",
    ],
    methods: {
        select() {
            let me = this;
            console.log("Entrando a la select");
            axios
                .get("/municipio")
                .then((response) => {
                    console.log("ol");
                    me.municipios = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },
        setDataPersonal(){
            this.$emit("getDataPersonal", this.datos_personales);
        },
    },

    mounted() {
        this.select();
        console.log("Component mounted.");
        new mdc.select.MDCSelect(document.querySelector(".comarca .mdc-select"));
        new mdc.select.MDCSelect(document.querySelector(".provincia .mdc-select"));
        new mdc.select.MDCSelect(document.querySelector(".municipio .mdc-select"));
        new mdc.select.MDCSelect(document.querySelector(".tipo-de-localizacin .mdc-select"));
        new mdc.textField.MDCTextField(document.querySelector(".referencia .mdc-text-field"));
        new mdc.select.MDCSelect(document.querySelector(".incidente .mdc-select"));
        new mdc.select.MDCSelect(document.querySelector(".tipo-de-incidente .mdc-select"));
        mdc.autoInit();
        new mdc.ripple.MDCRipple(document.querySelector(".mapa-up .mdc-button"));
        mdc.autoInit();
        new mdc.ripple.MDCRipple(document.querySelector(".aceptar .mdc-button"));
        mdc.autoInit();
        new mdc.ripple.MDCRipple(document.querySelector(".cancelar .mdc-button"));
    },
};
</script>

<style>
.carta-de-llamada-default {
    align-items: flex-start;
    display: flex;
    }

    .carta-de-llamada-default .container-scrolling {
    align-items: flex-start;
    display: flex;
    width: 954px;
    /* height: 908px; */
    left: 92px;
    top: 480px;
    z-index: 5;
    }

    .carta-de-llamada-default .flex-col {
    align-items: flex-start;
    align-self: flex-end;
    display: flex;
    flex-direction: column;
    width: 265px;
    z-index: 5;
    }

    .carta-de-llamada-default .flex-col-1 {
    align-items: flex-start;
    align-self: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 68px;
    width: 218px;
    z-index: 5;
    }

    .carta-de-llamada-default .flex-col-2 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-top: 125px;
    min-height: 265px;
    margin-left: -263px;
    width: 265px;
    z-index: 5;
    }

    .carta-de-llamada-default .flex-row {
    align-items: flex-end;
    display: flex;
    height: 80px;
    min-width: 402px;
    z-index: 5;
    }

    .carta-de-llamada-default .flex-row-1 {
    align-items: flex-start;
    display: flex;
    height: 265px;
    margin-top: 2px;
    min-width: 265px;
    z-index: 6;
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

    .comarca {
    height: 60px;
    width: 263px;
    }

    .provincia {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .municipio {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    }

    .comarca .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .comarca .custom-enhanced-select-width {
    width: 200px;
    }

    .provincia .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .provincia .custom-enhanced-select-width {
    width: 200px;
    }

    .municipio .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .municipio .custom-enhanced-select-width {
    width: 200px;
    }

    /* Global */
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
    margin-left: -213px;
    margin-top: 127px;
    width: 263px;
    z-index: 6;
    }

    .tipo-de-localizacin {
    height: 60px;
    width: 263px;
    }

    .referencia {
    height: 145px;
    margin-top: 25px;
    width: 263px;
    }

    .separation-down {
    height: 183px;
    margin-left: 313px;
    margin-top: -203px;
    width: 1px;
    }

    .tipo-de-localizacin .custom-enhanced-select-width {
    width: 200px;
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    }

    .tipo-de-localizacin .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .referencia .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
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
    margin-left: 100px;
    margin-top: 127px;
    width: 263px;
    height: 56px;
    }

    .incidente {
    height: 60px;
    width: 263px;
    }

    .tipo-de-incidente {
    height: 60px;
    margin-top: 24px;
    width: 263px;
    }

    .mapa-up #mapa-up{
    border-radius: 32px;
    cursor: pointer;
    height: 36px;
    width: 89px;
    margin-left: 80px;
    transition: all 0.2s ease-in-out;
    background-color: #0040FF;
    font-family: var(--font-family-gothic_a1);
    text-transform: capitalize;
    }

    #mapa-up:hover,
    #aceptar:hover,
    #cancelar:hover {
    transform: scale(1.1);
    }

    .flex-row-4 {
    align-items: flex-start;
    display: flex;
    margin-left: 38px;
    margin-top: 24px;
    min-width: 188px;
    }

    .aceptar #aceptar {
    border-radius: 32px;
    cursor: pointer;
    height: 36px;
    width: 103px;
    margin-left: 74px;
    margin-top: 20px;
    transition: all 0.2s ease-in-out;
    background-color: #0040FF;
    font-family: var(--font-family-gothic_a1);
    text-transform: capitalize;
    }

    .cancelar #cancelar{
    border-radius: 32px;
    cursor: pointer;
    height: 36px;
    width: 103px;
    margin-left: 74px;
    margin-top: 20px;
    transition: all 0.2s ease-in-out;
    background-color: rgb(207, 0, 0);
    font-family: var(--font-family-gothic_a1);
    text-transform: capitalize;
    }

    .mapa-up {
    margin-top: 50px;
    height: auto !important;
    width: auto !important;
    }

    .incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    }

    .cancelar {
    height: auto !important;
    width: auto !important;
    margin-top: -20px;
    margin-left: -50px;
    }

    .tipo-de-incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .aceptar {
    height: auto !important;
    width: auto !important;
    margin-top: -20px;
    margin-left: -100px;
    }

    .tipo-de-incidente .custom-enhanced-select-width {
    width: 200px;
    }

    .incidente .custom-enhanced-select-width {
    width: 200px;
    }
</style>
