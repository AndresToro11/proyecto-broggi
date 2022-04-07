<template>
    <div>
        <!-- <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" /> -->
        <div class="carta-de-llamada-datos-incidente-container-center-horizontal">
            <div class="carta-de-llamada-datos-indicente-flex-row">
                <div class="carta-de-llamada-datos-indicente-flex-col">
                    <h1 class="carta-de-llamada-datos-indicente-title valign-text-middle gothica1-normal-black-28px">
                        Carta de llamada
                    </h1>
                    <div class="carta-de-llamada-datos-indicente-datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                        Datos del interlocutor
                    </div>
                </div>
            </div>
            <div class="carta-de-llamada-datos-indicente-flex-row-1">
                <div class="carta-de-llamada-datos-indicente-flex-col-1">
                    <div class="carta-de-llamada-datos-indicente-telefono">
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label">
                                Teléfono
                            </span>
                            <input type="number" class="mdc-text-field__input" aria-labelledby="my-label-id" name="telefono" id="telefono" v-model="datos_personales.telefono" @blur="setDataPersonal()"/>
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                    <div class="carta-de-llamada-datos-indicente-Direccion-Up">
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">Direccion</span>
                            <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" name="direccion" id="direccion" v-model="datos_personales.direccion" @blur="setDataPersonal()"/>
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                    <div class="carta-de-llamada-datos-indicente-Antedecendes-Up">
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">
                                Antedecentes
                            </span>
                            <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" name="antecedentes" id="antecedentes" v-model="datos_personales.antecedentes" @blur="setDataPersonal()"/>
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                </div>
                <div class="carta-de-llamada-datos-indicente-flex-col-2">
                    <div class="carta-de-llamada-datos-indicente-procedencia-de-la-llamada">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Procedencia de la llamada
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" name="procedencia" id="procedencia" v-model="datos_personales.procedencia" @blur="setDataPersonal()"/>
                                <span class="mdc-line-ripple"></span>
                            </label>
                    </div>
                    <div class="carta-de-llamada-datos-indicente-origen-de-la-llamada">
                        <label class="mdc-text-field mdc-text-field--filled">
                            <span class="mdc-text-field__ripple"></span>
                            <span class="mdc-floating-label" id="my-label-id">
                                Origen de la llamada
                            </span>
                            <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" name="origen" id="origen" v-model="datos_personales.origen" @blur="setDataPersonal()"/>
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                    <div class="carta-de-llamada-datos-indicente-municipio">
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

                                        </span>
                                    </li>
                                    <li class="mdc-list-item" data-value="Item" role="option" v-for="municipio in municipios" :key="municipio.id" :value="municipio.id">
                                        <span class="mdc-list-item__ripple"></span>
                                        <span class="mdc-list-item__text">
                                            {{ municipio.nom }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carta-de-llamada-datos-indicente-flex-col-3">
                    <div class="carta-de-llamada-datos-indicente-nota-comun">
                        <label class="mdc-text-field mdc-text-field--filled mdc-text-field--textarea mdc-text-field--label" id="notaComun">
                            <span class="mdc-text-field__ripple"></span>
                            <!-- <span class="mdc-text-field__resizer" id="my-label-id"> -->
                                <span class="mdc-floating-label" id="my-label-id">
                                    Nota común
                                </span>
                                <textarea class="mdc-text-field__input" rows="8" cols="40" aria-label="my-label-id" name="notaComun" id="notaComun" v-model="datos_personales.notaComun" @blur="setDataPersonal()"></textarea>
                            <!-- </span> -->
                            <span class="mdc-line-ripple"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import * as mdc from "material-components-web";
    // import {MDCTextField} from '@material/textfield';
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
                console.log('Personal');
                this.$emit("get-datapersonal", this.datos_personales);
            },activarFunciones(){
                console.log("activar");
                this.setDataPersonal();
            },
        },
        mounted() {
            this.select();
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-telefono .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-Direccion-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-Antedecendes-Up .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-procedencia-de-la-llamada .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-origen-de-la-llamada .mdc-text-field"));
            new mdc.select.MDCSelect(document.querySelector(".carta-de-llamada-datos-indicente-municipio .mdc-select"));
            new mdc.textField.MDCTextField(document.querySelector(".carta-de-llamada-datos-indicente-nota-comun .mdc-text-field"));
        },
    };
</script>

<style>
    /* FIXME: Main divs */
    .carta-de-llamada-datos-incidente-container-center-horizontal {
    display: flex;
    flex-direction: column;
    }

    /* FIXME: Linea Dos */
    .carta-de-llamada-datos-indicente-flex-row-1 {
    display: flex;
    align-items: flex-start;
    margin-top: 18px;
    column-gap: 50px;
    }

    /* FIXME: Primera columna */
    .carta-de-llamada-datos-indicente-flex-col-1 {
    display: flex;
    flex-direction: column;
    gap: 25px;
    }

    .carta-de-llamada-datos-indicente-title {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    }

    .carta-de-llamada-datos-indicente-datos-del-interlocutor {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    margin-left: 2px;
    margin-top: 36px;
    white-space: nowrap;
    }

    /* FIXME: Segunda columna */
    .carta-de-llamada-datos-indicente-telefono .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .carta-de-llamada-datos-indicente-telefono
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .carta-de-llamada-datos-indicente-Direccion-Up
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-Direccion-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-Direccion-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-indicente-Direccion-Up .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .carta-de-llamada-datos-indicente-Antedecendes-Up
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .carta-de-llamada-datos-indicente-Antedecendes-Up
    .mdc-select:not(.mdc-select--disabled).mdc-select--focused
    .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-Antedecendes-Up .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-indicente-Antedecendes-Up .mdc-text-field {
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

    /* FIXME: Tercera columna */
    .carta-de-llamada-datos-indicente-flex-col-2 {
    display: flex;
    flex-direction: column;
    gap: 25px;
    }

    .carta-de-llamada-datos-indicente-procedencia-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-origen-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-municipio .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-municipio .custom-enhanced-select-width {
    width: 200px;
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    }

    /* FIXME: Cuarta columna */
    .carta-de-llamada-datos-indicente-flex-col-3 {
    display: flex;
    flex-direction: column;
    height: 226px;
    gap: 25px;
    }
</style>
