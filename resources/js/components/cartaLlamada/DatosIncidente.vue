<template>
    <div>
        <!-- <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" /> -->
        <div class="container-center-horizontal">
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
                    <div class="carta-de-llamada-datos-indicente-flex-row-3">
                        <div class="carta-de-llamada-datos-indicente-flex-col-4">
                            <div class="carta-de-llamada-datos-indicente-nota-comun"> <!-- Nota Comun -->
                                <label class="mdc-text-field mdc-text-field--filled" id="notaComun">
                                    <span class="mdc-text-field__ripple"></span>
                                    <span class="mdc-floating-label" id="notaComunLabel">
                                        Nota Común
                                    </span>
                                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" name="notaComun" id="notaComun" v-model="datos_personales.notaComun" @blur="setDataPersonal()"/>
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
    /* .carta-de-llamada-datos-indicente {
    display: flex;
    align-items: flex-start;
    height: 312px;
    width: 891px;
    } */

    /* Linea Uno */
    /* .carta-de-llamada-datos-indicente-flex-row {
    display: flex;
    align-items: flex-start;
    height: 68px;
    width: 218px;
    } */

    /* Linea Dos */
    .carta-de-llamada-datos-indicente-flex-row-1 {
    display: flex;
    align-items: flex-start;
    margin-top: 117px;
    margin-left: -222px;
    }

    /* FIXME: Primera columna */
    .carta-de-llamada-datos-indicente-flex-col {
    /* display: flex;
    align-items: flex-start;
    align-self: flex-end;
    flex-direction: column; */
    height: 68px;
    width: 218px;
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
    .carta-de-llamada-datos-indicente-flex-col-1 {
    /* display: flex;
    align-items: flex-start;
    align-self: flex-end;
    flex-direction: column; */
    height: 226px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-telefono {
    height: 56px;
    margin-left: 2px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-telefono .mdc-text-field {
    --mdc-theme-primary: #000000;
    }

    .carta-de-llamada-datos-indicente-telefono
    .mdc-text-field--focused:not(.mdc-text-field--disabled)
    .mdc-floating-label {
    color: #000;
    }

    .carta-de-llamada-datos-indicente-Direccion-Up {
    height: 60px;
    margin-left: 2px;
    margin-top: 25px;
    width: 263px;
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

    .carta-de-llamada-datos-indicente-Antedecendes-Up {
    height: 60px;
    margin-left: 2px;
    margin-top: 25px;
    width: 263px;
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
    /* display: flex;
    align-items: flex-start;
    align-self: flex-end;
    flex-direction: column; */
    height: 226px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-procedencia-de-la-llamada {
    height: 60px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-procedencia-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-origen-de-la-llamada {
    height: 60px;
    margin-top: 21px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-origen-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-indicente-municipio {
    height: 60px;
    margin-top: 29px;
    width: 263px;
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
    /* position: relative; */
    }

    /* FIXME: Cuarta columna */
    .carta-de-llamada-datos-indicente-flex-col-3 {
    /* display: flex;
    align-items: flex-start;
    align-self: flex-end;
    flex-direction: column; */
    height: 226px;
    width: 263px;
    }

    .carta-de-llamada-datos-indicente-nota-comun {
    height: 56px;
    margin-top: 166px;
    width: 263px;
    }
</style>
