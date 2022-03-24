<template>
<div class="container-center-horizontal">
    <div class="carta-de-llamada-default screen"> -->
      <!-- <header-operador
        :background="headerOperadorProps.background"
        :squareBackground="headerOperadorProps.squareBackground"
        :cartaDeLlamada="headerOperadorProps.cartaDeLlamada"
        :videoInteractivo="headerOperadorProps.videoInteractivo"
        :sergiPrezJimnez="headerOperadorProps.sergiPrezJimnez"
        :cerrarSesin="headerOperadorProps.cerrarSesin"
      /> -->
      <div class="container-scrolling">
        <div class="flex-col">
          <div class="flex-row">
            <div class="flex-col-1">
              <div class="carta-de-llamada valign-text-middle gothica1-normal-black-28px">{{ cartaDeLlamada }}</div>
              <div class="datos-del-interlocutor valign-text-middle gothica1-normal-black-21px">
                {{ datosDelInterlocutor }}
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
            </div>
            <div class="guardar-datos">{{ guardarDatos }}</div>
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
              <div class="flex-col-item">
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="my-label-id">Direccion</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="flex-col-item">
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="my-label-id">Antedecentes</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="datos-del-accidente valign-text-middle gothica1-normal-black-21px">
                {{ datosDelAccidente }}
              </div>
              <div class="comarca">
                <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                  <div
                    class="mdc-select__anchor custom-enhanced-select-width"
                    role="button"
                    aria-haspopup="listbox"
                    aria-expanded="false"
                  >
                    <span class="mdc-select__ripple"></span>
                    <span id="demo-label" class="mdc-floating-label">Comarca</span>
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
              <div class="flex-col-item">
                <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                  <div
                    class="mdc-select__anchor custom-enhanced-select-width"
                    role="button"
                    aria-haspopup="listbox"
                    aria-expanded="false"
                  >
                    <span class="mdc-select__ripple"></span>
                    <span id="demo-label" class="mdc-floating-label">Provincia</span>
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
              <div class="flex-col-item">
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
              <div class="mapa valign-text-middle gothica1-normal-black-28px">{{ mapa }}</div>
            </div>
            <div class="overlap-group" :style="{ 'background-image': 'url(' + overlapGroup + ')' }">
              <img class="frame-map" id="frame-map" :src="frameMap" />
            </div>
            <div class="flex-col-3">
              <div class="procedencia-de-la-llamada">
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="my-label-id">Procedencia de la llamada</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="flex-col-item-1">
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="my-label-id">Origen de la llamada</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="flex-col-item-1">
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
              <div class="tipo-de-localizacin">
                <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                  <div
                    class="mdc-select__anchor custom-enhanced-select-width"
                    role="button"
                    aria-haspopup="listbox"
                    aria-expanded="false"
                  >
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
                        <span class="mdc-list-item__ripple"></span> <span class="mdc-list-item__text">Carretera</span>
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
                <label class="mdc-text-field mdc-text-field--filled">
                  <span class="mdc-text-field__ripple"></span>
                  <span class="mdc-floating-label" id="my-label-id">Nota Común</span>
                  <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                  <span class="mdc-line-ripple"></span>
                </label>
              </div>
              <div class="mapa-down">
                <button class="mdc-button mdc-button--raised" data-id="anima-widget">
                  <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Tutorial</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-row-2">
          <div class="flex-col-4">
            <div class="nota-comun">
              <label class="mdc-text-field mdc-text-field--filled">
                <span class="mdc-text-field__ripple"></span>
                <span class="mdc-floating-label" id="my-label-id">Nota Común</span>
                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                <span class="mdc-line-ripple"></span>
              </label>
            </div>
            <div class="flex-row-3">
              <img
                class="separation-down"
                src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6237466bb9b42badfc76f4b9/img/separation-down@2x.svg"
              />
              <div class="flex-col-5">
                <div class="incidente">
                  <div class="mdc-select mdc-select--filled demo-width-class" data-id="anima-widget">
                    <div
                      class="mdc-select__anchor custom-enhanced-select-width"
                      role="button"
                      aria-haspopup="listbox"
                      aria-expanded="false"
                    >
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
                      class="mdc-select__anchor custom-enhanced-select-width"
                      role="button"
                      aria-haspopup="listbox"
                      aria-expanded="false"
                    >
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
                <a href="#frame-map">
                  <div class="mapa-up">
                    <button class="mdc-button mdc-button--raised" data-id="anima-widget">
                      <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Tutorial</span>
                    </button>
                  </div></a
                >
                <div class="flex-row-4">
                  <div class="aceptar">
                    <button class="mdc-button mdc-button--raised" data-id="anima-widget">
                      <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Tutorial</span>
                    </button>
                  </div>
                  <div class="cancelar">
                    <button class="mdc-button mdc-button--raised" data-id="anima-widget">
                      <span class="mdc-button__ripple"></span> <span class="mdc-button__label">Tutorial</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hide-container">
            <div class="hide-up"></div>
            <div class="hide-down"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import HeaderOperador from "./HeaderOperador";
import * as mdc from "material-components-web";
export default {
  name: "pepe",
  components: {
    // HeaderOperador,
  },
  props: [
    "cartaDeLlamada",
    "datosDelInterlocutor",
    "guardarDatos",
    "datosDelAccidente",
    "mapa",
    "overlapGroup",
    "frameMap",
    // "headerOperadorProps",
  ],
  mounted: () => {
    mdc.autoInit();
    new mdc.textField.MDCTextField(document.querySelector(".telefono .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".flex-col-item .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".flex-col-item .mdc-text-field"));
    new mdc.select.MDCSelect(document.querySelector(".comarca .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".flex-col-item .mdc-select"));
    new mdc.select.MDCSelect(document.querySelector(".flex-col-item .mdc-select"));
    new mdc.textField.MDCTextField(document.querySelector(".procedencia-de-la-llamada .mdc-text-field"));
    new mdc.textField.MDCTextField(document.querySelector(".flex-col-item-1 .mdc-text-field"));
    new mdc.select.MDCSelect(document.querySelector(".flex-col-item-1 .mdc-select"));
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
    mdc.autoInit();
    new mdc.ripple.MDCRipple(document.querySelector(".cancelar .mdc-button"));
  },
};
</script>

<style>
.carta-de-llamada-default {
  align-items: flex-start;
  background-color: var(--white);
  display: flex;
  height: 1080px;
  position: relative;
  width: 1920px;
}

.container-scrolling::-webkit-scrollbar {
  display: none;
  width: 0;
}

.container-scrolling {
  align-items: flex-start;
  display: flex;
  height: 908px;
  margin-left: 92px;
  margin-top: 172px;
  min-width: 1739px;
  overflow-y: scroll;
  padding: 0 8px;
  z-index: 1;
}

.flex-col {
  align-items: flex-start;
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  margin-bottom: -560px;
  min-height: 1418px;
  width: 621px;
}

.flex-row {
  align-items: flex-end;
  display: flex;
  height: 80px;
  min-width: 402px;
}

.flex-col-1 {
  align-items: flex-start;
  align-self: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 68px;
  width: 218px;
}

.carta-de-llamada {
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  white-space: nowrap;
}

.datos-del-interlocutor {
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 2px;
  margin-top: 36px;
  white-space: nowrap;
}

.guardar-datos-checkbox {
  height: 40px;
  margin-left: 41px;
  width: 40px;
}

.guardar-datos {
  color: var(--black-2);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-xxs);
  font-weight: 400;
  letter-spacing: 0.15px;
  line-height: 24px;
  margin-bottom: 8px;
  min-height: 24px;
  min-width: 103px;
  white-space: nowrap;
}

.flex-row-1 {
  align-items: flex-start;
  display: flex;
  height: 1336px;
  margin-top: 2px;
  min-width: 621px;
}

.flex-col-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 4px;
  min-height: 794px;
  width: 265px;
}

.telefono {
  height: 56px;
  margin-left: 2px;
  width: 263px;
}

.flex-col-item {
  height: 60px;
  margin-left: 2px;
  margin-top: 25px;
  width: 263px;
}

.datos-del-accidente {
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-left: 2px;
  margin-top: 60px;
  white-space: nowrap;
}

.comarca {
  height: 60px;
  margin-left: 2px;
  margin-top: 18px;
  width: 263px;
}

.mapa {
  height: 16px;
  letter-spacing: 0.15px;
  line-height: 16px;
  margin-top: 228px;
  white-space: nowrap;
}

.overlap-group {
  align-items: flex-start;
  align-self: flex-end;
  background-position: 50% 50%;
  background-size: cover;
  display: flex;
  margin-bottom: 262px;
  margin-left: 46px;
  min-width: 1px;
}

.frame-map {
  height: 1px;
  width: 1px;
}

.flex-col-3 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 3px;
  min-height: 1336px;
  width: 306px;
}

.procedencia-de-la-llamada,
.incidente {
  height: 60px;
  width: 263px;
}

.flex-col-item-1 {
  height: 60px;
  margin-top: 25px;
  width: 263px;
}

.tipo-de-localizacin {
  height: 60px;
  margin-top: 94px;
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
  height: 36px;
  margin-top: 746px;
  width: 69px;
}

.flex-row-2 {
  align-items: flex-start;
  display: flex;
  height: 922px;
  margin-left: 7px;
  margin-top: -177px;
  min-width: 1092px;
}

.flex-col-4 {
  align-items: flex-start;
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  min-height: 609px;
  width: 313px;
}

.nota-comun {
  height: 226px;
  width: 263px;
}

.flex-row-3 {
  align-items: center;
  display: flex;
  height: 289px;
  margin-left: 0.5px;
  margin-top: 94px;
  min-width: 313px;
}

.separation-down {
  height: 183px;
  margin-bottom: 48px;
  width: 1px;
}

.flex-col-5 {
  align-items: center;
  display: flex;
  flex-direction: column;
  margin-left: 49px;
  min-height: 289px;
  width: 263px;
}

.tipo-de-incidente {
  height: 60px;
  margin-top: 24px;
  width: 263px;
}

.mapa-up {
  border-radius: 32px;
  cursor: pointer;
  height: 36px;
  margin-right: 8px;
  margin-top: 49px;
  transition: all 0.2s ease-in-out;
  width: 69px;
}

.mapa-up:hover,
.aceptar:hover,
.cancelar:hover {
  transform: scale(1.1);
}

.flex-row-4 {
  align-items: flex-start;
  display: flex;
  margin-left: 1px;
  margin-top: 24px;
  min-width: 188px;
}

.aceptar {
  border-radius: 32px;
  cursor: pointer;
  height: 36px;
  transition: all 0.2s ease-in-out;
  width: 83px;
}

.cancelar {
  border-radius: 32px;
  cursor: pointer;
  height: 36px;
  margin-left: 16px;
  transition: all 0.2s ease-in-out;
  width: 89px;
}

.hide-container {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 686px;
  width: 779px;
}

.hide-up {
  background-color: var(--white);
  height: 313px;
  width: 779px;
}

.hide-down {
  background-color: var(--white);
  height: 146px;
  margin-top: 227px;
  width: 779px;
}

.mapa-up {
  height: auto !important;
  width: auto !important;
}

.guardar-datos-checkbox .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused .mdc-checkbox__ripple::before,
.guardar-datos-checkbox .mdc-checkbox--selected.mdc-ripple-upgraded--background-focused .mdc-checkbox__ripple::after {
  background-color: #0066ff !important;
}

.nota-comun .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.tipo-de-localizacin .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.telefono .mdc-text-field {
  --mdc-theme-primary: #000000;
}

.referencia .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item-1 .custom-enhanced-select-width {
  width: 200px;
}

.mdc-checkbox {
  box-sizing: content-box;
}

.tipo-de-localizacin .custom-enhanced-select-width {
  width: 200px;
}

.flex-col-item .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item-1 .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: #000;
}

.telefono .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: #000;
}

.guardar-datos-checkbox .mdc-checkbox__native-control:enabled:checked ~ .mdc-checkbox__background,
.guardar-datos-checkbox .mdc-checkbox--selected .mdc-checkbox__native-control ~ .mdc-checkbox__background,
.guardar-datos-checkbox .mdc-checkbox--anim-checked-unchecked .mdc-checkbox__native-control ~ .mdc-checkbox__background {
  background-color: #0066ff !important;
  border-color: #0066ff !important;
}

.flex-col-item .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item .custom-enhanced-select-width {
  width: 200px;
}

.flex-col-item .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.mapa-down {
  height: auto !important;
  width: auto !important;
}

.procedencia-de-la-llamada .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item .custom-enhanced-select-width {
  width: 200px;
}

.mdc-list-item {
  align-items: center;
  display: flex;
  height: 48px;
  position: relative;
}

.tipo-de-incidente .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.flex-col-item .mdc-text-field {
  --mdc-theme-primary: #000000;
}

.flex-col-item-1 .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.comarca .mdc-select:not(.mdc-select--disabled).mdc-select--focused .mdc-floating-label {
  color: var(--mdc-theme-primary);
}

.aceptar {
  height: auto !important;
  width: auto !important;
}

.comarca .custom-enhanced-select-width {
  width: 200px;
}

.cancelar {
  height: auto !important;
  width: auto !important;
}

.tipo-de-incidente .custom-enhanced-select-width {
  width: 200px;
}
</style>
