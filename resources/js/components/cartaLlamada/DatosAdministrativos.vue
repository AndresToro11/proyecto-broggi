<template>
    <div>
        <h3>Datos Administrativos</h3>
        <p>Contador: 00:00</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            contador: " ",
        };

    },
    setDataAdministrativos(){
            this.$emit("getDataAdministrativos", this.contador);
        },
};
</script>

<style>

</style>
