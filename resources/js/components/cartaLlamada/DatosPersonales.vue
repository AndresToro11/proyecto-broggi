<template>
    <div>
    <!-- Esquema de contenido:
    Población: referencias.
    Calle: tipo de via, nombre de la via, numero del portal, escalera, piso, puerta, referencias.
    Carretera: nombre de la via, punto kilometrico, sentido de la circulación, referencias.
    Punto Singular: nombre del punto singular, referencias.
    Fuera de Catalunya: provincia, referencias. -->
        <!-- <input type="hidden" id="anPageName" name="page" value="carta-de-llamada-default" /> -->
        <div class="container-center-horizontal">
            <div class="carta-de-llamada-datos-personales-flex-row">
                <div class="carta-de-llamada-datos-personales-datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                    Datos del incidente
                </div>
            </div>
            <div class="carta-de-llamada-datos-personales-flex-row-1">
                <div class="carta-de-llamada-datos-personales-flex-col">
                    <div class="carta-de-llamada-datos-personales-comarca">
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
                    <div class="carta-de-llamada-datos-personales-provincia">
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
                    <div class="carta-de-llamada-datos-personales-municipio">
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
                <div class="carta-de-llamada-datos-personales-flex-col-1">
                    <div class="carta-de-llamada-datos-personales-tipo-de-localizacion">
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
                    <!-- Space -->
                    <span hidden> <!-- FIXME: POBLACIÓN: referencia-poblacion -->
                        <div class="carta-de-llamada-datos-personales-referencia-poblacion">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: Fuera de Catalunya: provincia -->
                        <div class="carta-de-llamada-datos-personales-provincia-fuera">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Provincia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: Fuera de Catalunya: referencia -->
                        <div class="carta-de-llamada-datos-personales-referencia-fuera">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CALLE: Tipo de via -->
                        <div class="carta-de-llamada-datos-personales-tipo-de-via">
                            <div class="mdc-select mdc-select--filled demo-width-class">
                                <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mdc-select__ripple"></span>
                                    <span id="demo-label" class="mdc-floating-label">
                                        Tipo de via
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
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CALLE: nombre via -->
                        <div class="carta-de-llamada-datos-personales-nombre-via-calle">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Nombre de la via
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CARRETERA: Nombre via -->
                        <div class="carta-de-llamada-datos-personales-nombre-via-carretera">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Nombre de la via
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CARRETERA: punto kilometrico -->
                        <div class="carta-de-llamada-datos-personales-punto-kilometrico">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Punto kilometrico
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: PUNTO SINGULAR: nombre punto singular -->
                        <div class="carta-de-llamada-datos-personales-nombre-punto-singular">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Nombre del punto singular
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: PUNTO SINGULAR: referencia punto singular -->
                        <div class="carta-de-llamada-datos-personales-referencia-punto-singular">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-2">
                    <span hidden> <!-- FIXME: CALLE: numero portal -->
                        <div class="carta-de-llamada-datos-personales-numero-portal">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Numero del portal
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CALLE: escalera -->
                        <div class="carta-de-llamada-datos-personales-escalera">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Escalera
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CALLE: piso -->
                        <div class="carta-de-llamada-datos-personales-piso">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Piso
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CARRETERA: sentido circulacion -->
                        <div class="carta-de-llamada-datos-personales-sentido-circulacion">
                            <div class="mdc-select mdc-select--filled demo-width-class">
                                <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="mdc-select__ripple"></span>
                                    <span id="demo-label" class="mdc-floating-label">
                                        Sentido de la circulación
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
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                        <li class="mdc-list-item" data-value="#" role="option">
                                            <span class="mdc-list-item__ripple"></span>
                                            <span class="mdc-list-item__text">
                                                #
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </span>
                    <!-- Space -->
                    <span hidden> <!-- FIXME: CARRETERA: referencia -->
                        <div class="carta-de-llamada-datos-personales-referencia-carretera">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <!-- Space -->
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-3">
                    <span hidden> <!-- FIXME: CALLE: puerta -->
                        <div class="carta-de-llamada-datos-personales-puerta">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Puerta
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                    <span hidden> <!-- FIXME: CALLE: referencia -->
                        <div class="carta-de-llamada-datos-personales-referencia-calle">
                            <label class="mdc-text-field mdc-text-field--filled">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Referencia
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </span>
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-4">
                    <img class="carta-de-llamada-datos-personales-separation-down" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/separation-down@2x.svg"/>
                </div>
                <div class="carta-de-llamada-datos-personales-flex-col-5">
                    <div class="carta-de-llamada-datos-personales-incidente">
                        <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                            <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                                <span class="mdc-select__ripple"></span>
                                <span id="demo-label" class="mdc-floating-label">
                                    Incidente
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
                    <div class="carta-de-llamada-datos-personales-tipo-de-incidente">
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
                    <div class="carta-de-llamada-datos-personales-mapa-up" id="mapa-up">
                        <button class="mdc-button mdc-button--raised" id="mapa-up">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">
                                Mapa
                            </span>
                        </button>
                    </div>
                    <div class="carta-de-llamada-datos-personales-flex-row-2">
                        <div class="carta-de-llamada-datos-personales-aceptar" id="aceptar">
                            <button class="mdc-button mdc-button--raised" id="aceptar">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">
                                    Aceptar
                                </span>
                            </button>
                        </div>
                        <div class="carta-de-llamada-datos-personales-cancelar" id="cancelar">
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
    /* FIXME: Titulo */
    .carta-de-llamada-datos-personales-datos-del-interlocutor {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    margin-top: 36px;
    }

    /* FIXME: Columna uno */
    .carta-de-llamada-datos-personales-flex-row-1{
    display: flex;
    align-items: flex-start;
    margin-top: 117px;
    margin-left: -222px;
    }

    .carta-de-llamada-datos-personales-comarca {
    height: 60px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-comarca .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-personales-comarca .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-personales-provincia {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-provincia .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-personales-provincia .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-personales-municipio {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-municipio .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-personales-municipio .custom-enhanced-select-width {
    width: 200px;
    }

    /* FIXME: Columna dos */
    .carta-de-llamada-datos-personales-tipo-de-localizacin {
    height: 60px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-tipo-de-localizacin .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-personales-tipo-de-localizacin .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .referencia-poblacion {
    margin-top: 25px;
    width: 263px;
    }

    .referencia-poblacion .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .provincia-fuera {
    height: 60px;
    margin-top: 25px;
    width: 263px;
    }

    .referencia-fuera {
    margin-top: 25px;
    width: 263px;
    }

    .referencia-fuera .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .tipo-de-via {
        margin-top: 24px;
    }

    .nombre-via-calle{
        margin-top: 30px;
    }

    .nombre-via-carretera{
        margin-top: 25px;
    }

    .punto-kilometrico{
        margin-top: 29px;
    }

    .nombre-punto-singular{
        margin-top: 24px;
    }

    .referencia-punto-singular{
    margin-top: 30px;
    width: 263px;
    }

    .referencia-punto-singular .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    /* FIXME: Columna tres */
    /* .numero-portal {

    } */
    .escalera {
        margin-top: 28px;
    }

    .piso{
    margin-top: 30px;
    }

    /* .sentido-circulacion {

    } */

    .referencia-carretera{
    margin-top: 28px;
    width: 263px;
    }

    .referencia-carretera .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    /* FIXME: Columna cuatro */
    /* .puerta {

    } */

    .referencia-calle{
    margin-top: 28px;
    width: 263px;
    }

    .referencia-calle .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    /* Barra */
    .carta-de-llamada-datos-personales-flex-col-4{
        display: flex;

        margin-right: 51px;
    }

    /* FIXME: Columna cinco */
    .carta-de-llamada-datos-personales-separation-down {
    height: 183px;
    margin-left: 50px;
    margin-top: 153px;
    width: 1px;
    }

    .carta-de-llamada-datos-personales-incidente {
    height: 60px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-personales-incidente .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-personales-tipo-de-incidente {
    height: 60px;
    margin-top: 24px;
    width: 263px;
    }

    .carta-de-llamada-datos-personales-tipo-de-incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
    color: var(--mdc-theme-primary);
    }

    .carta-de-llamada-datos-personales-tipo-de-incidente .custom-enhanced-select-width {
    width: 200px;
    }

    .carta-de-llamada-datos-personales-flex-row-2 {
    align-items: flex-start;
    display: flex;
    margin-left: 38px;
    margin-top: 24px;
    min-width: 188px;
    }

    .carta-de-llamada-datos-personales-mapa-up #mapa-up{
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

    .carta-de-llamada-datos-personales-mapa-up {
    margin-top: 50px;
    height: auto !important;
    width: auto !important;
    }

    #carta-de-llamada-datos-personales-mapa-up:hover,
    #carta-de-llamada-datos-personales-aceptar:hover,
    #carta-de-llamada-datos-personales-cancelar:hover {
    transform: scale(1.1);
    }

    .carta-de-llamada-datos-personales-aceptar #aceptar {
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

    .carta-de-llamada-datos-personales-aceptar {
    height: auto !important;
    width: auto !important;
    margin-top: -20px;
    margin-left: -100px;
    }

    .carta-de-llamada-datos-personales-cancelar #cancelar{
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

    .carta-de-llamada-datos-personales-cancelar {
    height: auto !important;
    width: auto !important;
    margin-top: -20px;
    margin-left: -50px;
    }

    /* FIXME: Global */
    .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 263px;
    }

    .mdc-select--filled:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: #ffffff;
    width: 263px;
    }

    .mdc-list-item {
    align-items: center;
    display: flex;
    height: 48px;
    }

</style>
