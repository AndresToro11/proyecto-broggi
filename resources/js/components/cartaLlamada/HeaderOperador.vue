<template>
  <div class="header-operador">
    <div class="overlap-group1">
      <img class="background" :src="background" /><img class="overlap-group1-item" :src="squareBackground" />
      <h1 class="title valign-text-middle gothica1-medium-white-28px">{{ cartaDeLlamada }}</h1>
      <div class="video-interactivo valign-text-middle gothica1-medium-white-28px">{{ videoInteractivo }}</div>
      <div class="sergi-prez-jimnez valign-text-middle gothica1-normal-white-18px">{{ sergiPrezJimnez }}</div>
      <img
        class="separate"
        src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c45c941ee39385c45cb4e/img/separate@2x.svg"
      />
      <div class="cerrar-sesin valign-text-middle gothica1-normal-white-18px">{{ cerrarSesin }}</div>
      <img
        class="overlap-group1-item"
        src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c45c941ee39385c45cb4e/img/white-gradient@1x.svg"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "HeaderOperador",
  props: ["background", "squareBackground", "cartaDeLlamada", "videoInteractivo", "sergiPrezJimnez", "cerrarSesin"],
};
</script>

<style>
.header-operador {
  align-items: flex-end;
  background-color: var(--white);
  display: flex;
  height: 172px;
  left: 0;
  min-width: 1920px;
  position: fixed;
  top: 0;
  z-index: 2;
}

.overlap-group1 {
  background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c45c941ee39385c45cb4e/img/shadow@1x.svg);
  background-size: 100% 100%;
  height: 198px;
  margin-bottom: -26px;
  position: relative;
  width: 1920px;
}

.background {
  height: 172px;
  left: 0;
  object-fit: cover;
  position: absolute;
  top: 0;
  width: 1920px;
}

.overlap-group1-item {
  height: 172px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1920px;
}

.title {
  cursor: pointer;
  height: 16px;
  left: 521px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: absolute;
  text-shadow: 0px 4px 4px #00000040;
  top: 139px;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
}

.title:hover {
  transform: scale(1.1);
}

.video-interactivo {
  height: 16px;
  left: 1161px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: absolute;
  text-shadow: 0px 4px 4px #00000040;
  top: 139px;
  white-space: nowrap;
}

.sergi-prez-jimnez {
  height: 16px;
  left: 1408px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: absolute;
  text-shadow: 0px 4px 4px #00000040;
  top: 34px;
  white-space: nowrap;
}

.separate {
  height: 58px;
  left: 1647px;
  position: absolute;
  top: 18px;
  width: 9px;
}

.cerrar-sesin {
  height: 16px;
  left: 1707px;
  letter-spacing: 1.25px;
  line-height: 16px;
  position: absolute;
  text-shadow: 0px 4px 4px #00000040;
  top: 34px;
  white-space: nowrap;
}
</style>
