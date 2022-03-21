<template>
  <div class="container-center-horizontal">
    <div class="mapa-scrolling screen">
      <img
        class="navbar-color"
        src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/navbar-color@1x.svg"
      />
      <div class="container-scrolling">
        <div class="flex-col">
          <h1 class="title valign-text-middle gothica1-normal-black-28px">
            {{ title }}
          </h1>
          <div class="datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
            {{ datosDelInterlocutor }}
          </div>
          <div class="telefono"> <!-- Telefono -->
            <label class="mdc-text-field mdc-text-field--filled">
              <span class="mdc-text-field__ripple"></span>
              <span class="mdc-floating-label" id="telefono">
                Teléfono
              </span>
              <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
              <span class="mdc-line-ripple"></span>
            </label>
          </div>
          <div class="direccion"> <!-- Direccion -->
            <label class="mdc-text-field mdc-text-field--filled">
              <span class="mdc-text-field__ripple"></span>
              <span class="mdc-floating-label" id="direccion">
                Direccion
              </span>
              <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
              <span class="mdc-line-ripple"></span>
            </label>
          </div>
          <div class="antecedentes"> <!-- Antecedentes -->
            <label class="mdc-text-field mdc-text-field--filled">
              <span class="mdc-text-field__ripple"></span>
              <span class="mdc-floating-label" id="antecedentes">
                Antedecentes
              </span>
              <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
              <span class="mdc-line-ripple"></span>
            </label>
          </div>
          <div class="datos-del-accidente valign-text-middle gothica1-normal-black-21px">
            {{ datosDelAccidente }}
          </div>
          <!-- <div class="fuera-de-catalunya-container">
            <div class="checkbox-fuera-de-catalunya">
              <div class="mdc-checkbox" data-mdc-auto-init="MDCCheckbox" data-id="anima-widget">
                <input type="checkbox" class="mdc-checkbox__native-control" />
                <div class="mdc-checkbox__background">
                  <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                    <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                  </svg>
                  <div class="mdc-checkbox__mixedmark"></div>
                </div>
                <div class="mdc-checkbox__ripple"></div>
              </div>
            </div>
            <div class="fuera-de-catalunya">
              {{ fueraDeCatalunya }}
            </div>
          </div> -->
          <div class="comarca"> <!-- Comarca -->
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
                  <span class="mdc-select__dropdown-icon-inactive material-icons">arrow_drop_down</span>
                  <span class="mdc-select__dropdown-icon-active material-icons">arrow_drop_up</span>
                </span>
                <span class="mdc-line-ripple"></span>
              </div>
              <div class="mdc-select__menu mdc-menu mdc-menu-surface mdc-menu-surface--fullwidth">
                <ul class="mdc-list" id="comarca-select" role="listbox" aria-label="listbox">
                  <li class="mdc-list-item" data-value="Ribagorsa" role="option">
                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Ribagorsa</span>
                  </li>
                  <li class="mdc-list-item" data-value="L'Hospitalet-de-Llobregat" role="option">
                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">L'Hospitalet de Llobregat</span>
                  </li>
                  <li class="mdc-list-item" data-value="Barcelona" role="option">
                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Barcelona</span>
                  </li>
                  <li class="mdc-list-item" data-value="Tarragona" role="option">
                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Tarragona</span>
                  </li>
                  <li class="mdc-list-item" data-value="Manresa" role="option">
                    <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Manresa</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="provincia">
            <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
              <div
                class="mdc-select__anchor custom-enhanced-select-width"
                role="button"
                aria-haspopup="listbox"
                aria-expanded="false"
              >
                <span class="mdc-select__ripple"></span>
                <span id="demo-label" class="mdc-floating-label">
                  Provincia
                </span>
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
          <div class="municipio-down">
            <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
              <div
                class="mdc-select__anchor custom-enhanced-select-width"
                role="button"
                aria-haspopup="listbox"
                aria-expanded="false"
              >
                <span class="mdc-select__ripple"></span>
                <span id="demo-label" class="mdc-floating-label">Municipio</span>
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
          <div class="mapa valign-text-middle gothica1-normal-black-28px">
            {{ mapa }}
          </div>
        </div>
        <div class="flex-row">
          <div class="flex-row-1">
            <div class="overlap-group8" :style="{ 'background-image': 'url(' + overlapGroup8 + ')' }">
              <img class="frame-map" id="frame-map" :src="frameMap" />
            </div>
            <div class="flex-col-1">
              <div class="procedencia-de-la-llamada"> <!-- Procedencia de la llamada -->
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="Procedencia-de-la-llamada">Procedencia de la llamada</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="origen-de-la-llamada"> <!-- Origen de la llamada -->
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="Origen-de-la-llamada">Origen de la llamada</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="municipio-up"> <!-- Municipio up -->
                <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                  <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                    <span class="mdc-select__ripple"></span>
                    <span id="demo-label" class="mdc-floating-label">Municipio</span>
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
              <div class="tipo-de-localizacin"> <!-- Tipo de localizacion -->
                <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                  <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                    <span class="mdc-select__ripple"></span>
                    <span id="demo-label" class="mdc-floating-label">Tipo de Localización</span>
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
                      <li class="mdc-list-item" data-value="Punto Singular" role="option">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Punto Singular</span>
                      </li>
                      <li class="mdc-list-item" data-value="Carretera" role="option">
                        <span class="mdc-list-item__ripple"></span><span class="mdc-list-item__text">Carretera</span>
                      </li>
                      <li class="mdc-list-item" data-value="Entidad Población" role="option">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Entidad Población</span>
                      </li>
                      <li class="mdc-list-item" data-value="Calle" role="option">
                        <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Calle</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="referencia">
                <label class="mdc-text-field mdc-text-field--filled"> <!-- Referencia -->
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="referencia">Referencia</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="mapa-down"> <!-- Tutorial -->
                <button class="mdc-button mdc-button--raised" data-id="anima-widget">
                  <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Tutorial</span>
                </button>
              </div>
            </div>
          </div>
          <div class="flex-col-2">
            <div class="flex-row-2">
              <div class="nota-comun"> <!-- Nota Comun -->
                <label class="mdc-text-field mdc-text-field--filled" id="notaComun">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="notaComunLabel">Nota Común</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="flex-col-3">
                <div class="hide-up"></div>
                <div class="overlap-group7">
                  <div class="llamadas-relacionados">
                    <!-- <select1 />
                    <select1 :className="select11Props.className" />
                    <select1 :className="select12Props.className" />
                    <select1 :className="select13Props.className" />
                    <select1 :className="select14Props.className" />
                    <select1 :className="select15Props.className" /> -->
                  </div>
                  <div class="hide-down"></div>
                  <img class="top-llamadas-relacioadas" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/top-llamadas-relacioadas@1x.svg"/>
                </div>
              </div>
            </div>
            <div class="flex-row-3">
              <img class="separation-down" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/separation-down@2x.svg"/>
              <div class="flex-col-4">
                <div class="incidente">
                  <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                    <div class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                      <span class="mdc-select__ripple"></span>
                      <span id="demo-label" class="mdc-floating-label">Tipos de Incidente</span>
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
                        <li class="mdc-list-item" data-value="X" role="option">
                          <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">X</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tipo-de-incidente">
                  <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                    <div
                      class="mdc-select__anchor custom-enhanced-select-width" role="button" aria-haspopup="listbox" aria-expanded="false">
                      <span class="mdc-select__ripple"></span>
                      <span id="demo-label" class="mdc-floating-label">Tipos de Incidente</span>
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
                        <li class="mdc-list-item" data-value="X" role="option">
                          <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">X</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="flex-row-4">
                  <a href="#frame-map">
                    <div class="mapa-up" id="mapa-up"> <!-- Mapa Up -->
                      <button class="mdc-button mdc-button--raised" id="mapa-up" data-id="anima-widget">
                        <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Mapa</span>
                      </button>
                    </div>
                  </a>
                  <div class="aceptar" id="aceptar"> <!-- Aceptar -->
                    <button class="mdc-button mdc-button--raised" id="aceptar" data-id="anima-widget">
                      <span class="mdc-button__ripple"></span>
                      <span class="mdc-button__label">Aceptar</span>
                    </button>
                  </div>
                  <div class="cancelar" id="cancelar"> <!-- Cancelar -->
                    <button class="mdc-button mdc-button--raised" id="cancelar" data-id="anima-widget">
                      <span class="mdc-button__ripple"></span>
                      <span class="mdc-button__label">Cancelar</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carta-de-llamada valign-text-middle gothica1-medium-black-28px">
        {{ cartaDeLlamada }}
      </div>
      <div class="video-interactivo valign-text-middle gothica1-medium-black-28px">
        {{ videoInteractivo }}
      </div>
      <div class="sergi-prez-jimnez valign-text-middle gothica1-normal-black-18px">
        {{ sergiPrezJimnez }}
      </div>
      <img class="separate" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/62370a2afe3a439b1c784726/img/separate@2x.svg"
      />
      <div class="cerrar-sesin valign-text-middle gothica1-normal-black-18px">
        {{ cerrarSesin }}
      </div>
    </div>
  </div>
</template>

<script>
// import Select1 from "./Select1";
//import * as mdc from "material-components-web";
export default {
  name: "Carta_de_llamada",
  // components: {
  //   Select1,
  // },
  props: [
    "title",
    "datosDelInterlocutor",
    "datosDelAccidente",
    "fueraDeCatalunya",
    "mapa",
    "overlapGroup8",
    "frameMap",
    "cartaDeLlamada",
    "videoInteractivo",
    "sergiPrezJimnez",
    "cerrarSesin",
    // "select11Props",
    // "select12Props",
    // "select13Props",
    // "select14Props",
    // "select15Props",
  ],
  mounted: () => {
    new mdc.textField.MDCTextField(document.querySelector(".telefono .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".direccion .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".antecedentes .mdc-text-field"));
    mdc.autoInit();
    new mdc.select.MDCSelect(document.querySelector(".comarca .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".provincia .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".municipio-down .mdc-select"));
    new mdc.textField.MDCTextField(document.querySelector(".procedencia-de-la-llamada .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".origen-de-la-llamada .mdc-text-field"));
    new mdc.select.MDCSelect(document.querySelector(".municipio-up .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".tipo-de-localizacin .mdc-select"));
    new mdc.textField.MDCTextField(document.querySelector(".referencia .mdc-text-field"));
    mdc.autoInit();
    new mdc.ripple.MDCRipple(document.querySelector(".mapa-down .mdc-button"));
    new mdc.textField.MDCTextField(document.querySelector(".nota-comun .mdc-text-field"));
    new mdc.select.MDCSelect(document.querySelector(".incidente .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".tipo-de-incidente .mdc-select"));
    mdc.autoInit();
    new mdc.ripple.MDCRipple(document.querySelector(".mapa-up .mdc-button"));
    mdc.autoInit();
    new mdc.ripple.MDCRipple(document.querySelector(".aceptar .mdc-button"));
  },
};
</script>

<style>
.mapa-scrolling {
  align-items: flex-start;
  background-color: var(--white);
  display: flex;
  height: auto;
  width: auto;
}

.navbar-color {
  height: 172px;
  left: 0;
  position: fixed;
  top: 0;
  width: 1920px;
  z-index: 2;
}

.container-scrolling::-webkit-scrollbar,
.llamadas-relacionados::-webkit-scrollbar {
  display: none;
  width: 0;
}

.container-scrolling {
  align-items: flex-end;
  display: flex;
  height: 1080px;
  left: 89px;
  min-width: 1742px;
  overflow-y: scroll;
  padding: 0 3px;
  position: fixed;
  top: 0;
  z-index: 1;
}

.flex-col {
  align-items: flex-end;
  display: flex;
  flex-direction: column;
  margin-bottom: -22px;
  min-height: 880px;
  width: 273px;
}

.title {
  align-self: flex-start;
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 8px;
  white-space: nowrap;
}

.datos-del-interlocutor {
  align-self: flex-start;
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 10px;
  margin-top: 36px;
  white-space: nowrap;
}

.telefono {
  height: 56px;
  margin-top: 18px;
  width: 263px;
}

.direccion,
.antecedentes,
.provincia,
.municipio-down,
.origen-de-la-llamada,
.municipio-up {
  height: 60px;
  margin-top: 25px;
  width: 263px;
}

.datos-del-accidente {
  align-self: flex-start;
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 10px;
  margin-top: 120px;
  white-space: nowrap;
}

.fuera-de-catalunya-container {
  align-self: flex-start;
  height: 40px;
  margin-top: 18px;
  position: relative;
  width: 176px;
}

.checkbox-fuera-de-catalunya {
  height: 40px;
  left: 0;
  position: absolute;
  top: 0;
  width: 40px;
}

.fuera-de-catalunya {
  color: var(--black-2);
  font-family: var(--font-family-gothic_a1);
  font-size: var(--font-size-m);
  font-weight: 400;
  left: 47px;
  letter-spacing: 0.15px;
  line-height: 24px;
  position: absolute;
  top: 8px;
  white-space: nowrap;
}

.comarca {
  height: 60px;
  margin-top: 13px;
  width: 263px;
}

.mapa {
  align-self: flex-start;
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 8px;
  margin-top: 175px;
  white-space: nowrap;
}

.flex-row {
  align-items: flex-start;
  display: flex;
  height: 1645px;
  margin-bottom: -560px;
  margin-left: 46px;
  min-width: 1409px;
}

.flex-row-1 {
  align-items: flex-end;
  align-self: flex-end;
  display: flex;
  height: 1336px;
  min-width: 310px;
}

.overlap-group8 {
  align-items: flex-start;
  background-position: 50% 50%;
  background-size: cover;
  display: flex;
  margin-bottom: 262px;
  min-width: 1px;
}

.frame-map {
  height: 1px;
  width: 1px;
}

.flex-col-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-bottom: -4px;
  margin-left: 3px;
  min-height: 1336px;
  width: 306px;
}

.procedencia-de-la-llamada,
.incidente {
  height: 56px;
  width: 263px;
}

.tipo-de-localizacin {
  height: 60px;
  margin-top: 147px;
  width: 263px;
}

.referencia {
  height: 145px;
  margin-top: 25px;
  width: 263px;
}

.mapa-down {
  align-self: flex-end;
  border-radius: 32px;
  cursor: pointer;
  height: 36px;
  margin-top: 693px;
  width: 69px;
}

.flex-col-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 7px;
  min-height: 915px;
  width: 1092px;
}

.flex-row-2 {
  align-items: center;
  display: flex;
  height: 686px;
  min-width: 1092px;
}

.nota-comun {
  height: 226px;
  margin-top: 166px;
  width: 263px;
}

.flex-col-3 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 50px;
  min-height: 686px;
  width: 779px;
}

.hide-up {
  background-color: var(--white);
  height: 313px;
  margin-left: 0;
  width: 779px;
}

.overlap-group7 {
  height: 373px;
  position: relative;
  width: 779px;
}

.llamadas-relacionados {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 226px;
  overflow-y: scroll;
  position: absolute;
  top: 0;
  width: 779px;
}

.hide-down {
  background-color: var(--white);
  height: 146px;
  left: 0;
  position: absolute;
  top: 227px;
  width: 779px;
}

.top-llamadas-relacioadas {
  height: 2px;
  left: 0;
  position: absolute;
  top: 226px;
  width: 779px;
}

.flex-row-3 {
  align-items: center;
  display: flex;
  height: 229px;
  margin-left: 0.5px;
  min-width: 313px;
}

.separation-down {
  height: 183px;
  margin-top: 12px;
  width: 1px;
}

.flex-col-4 {
  align-items: center;
  display: flex;
  flex-direction: column;
  margin-left: 49px;
  margin-top: 60px;
  min-height: 289px;
  width: 263px;
}

.tipo-de-incidente {
  height: 60px;
  margin-top: 24px;
  width: 263px;
}

.flex-row-4 {
  align-items: flex-start;
  margin-left: 1px;
  margin-top: 49px;
  min-width: 282px;
}

.mapa-up #mapa-up {
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
#cancelar:hover,
#aceptar:hover {
  transform: scale(1.1);
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

.cancelar #cancelar {
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

.carta-de-llamada {
  height: 16px;
  left: 521px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: fixed;
  top: 139px;
  white-space: nowrap;
  z-index: 3;
}

.video-interactivo {
  height: 16px;
  left: 1161px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: fixed;
  top: 139px;
  white-space: nowrap;
  z-index: 4;
}

.sergi-prez-jimnez {
  height: 16px;
  left: 1408px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: fixed;
  top: 34px;
  white-space: nowrap;
  z-index: 5;
}

.separate {
  height: 50px;
  left: 1651px;
  position: fixed;
  top: 18px;
  width: 1px;
  z-index: 7;
}

.cerrar-sesin {
  height: 16px;
  left: 1707px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: fixed;
  top: 34px;
  white-space: nowrap;
  z-index: 6;
}

.mdc-checkbox {
  box-sizing: content-box;
}

.procedencia-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.tipo-de-incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.referencia .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.tipo-de-localizacin .custom-enhanced-select-width {
  width: 200px;
}

.direccion .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: #000;
}

.mapa-up {
  height: auto !important;
  width: auto !important;
}

.aceptar {
  height: auto !important;
  width: auto !important;
}

.checkbox-fuera-de-catalunya .mdc-checkbox__native-control:enabled:checked ~ .mdc-checkbox__background,
.checkbox-fuera-de-catalunya .mdc-checkbox--selected .mdc-checkbox__native-control ~ .mdc-checkbox__background,
.checkbox-fuera-de-catalunya .mdc-checkbox--anim-checked-unchecked .mdc-checkbox__native-control ~ .mdc-checkbox__background {
  background-color: var(--mdc-theme-primary) !important;
  border-color: var(--mdc-theme-primary) !important;
}

.mapa-down {
  height: auto !important;
  width: auto !important;
}

.comarca .custom-enhanced-select-width {
  width: 200px;
}

.checkbox-fuera-de-catalunya .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused .mdc-checkbox__ripple::before,
.checkbox-fuera-de-catalunya .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused .mdc-checkbox__ripple::after {
  background-color: var(--mdc-theme-primary) !important;
}

.tipo-de-incidente .custom-enhanced-select-width {
  width: 200px;
}

.direccion .mdc-text-field {
  --mdc-theme-primary: #000000;
}

.comarca .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.nota-comun .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.telefono .mdc-text-field {
  --mdc-theme-primary: #000000;
}

.telefono .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: #000000;
}

.mdc-list-item {
  align-items: center;
  display: flex;
  height: 48px;
  position: relative;
}

 .tipo-de-localizacin .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

/* Style changes: */
.mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 263px;
}

.mdc-select--filled:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: #ffffff;
    width: 263px;
}

#notaComun {
  margin-top: 1px;
  height: 221px;
}

#notaComunLabel{
  padding-top: 160px;
}
</style>