<template>
    <div>
        <h3>Datos Administrativos</h3>
        <p>Contador:{{ crono }} </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            crono:4,
        };

    },
    methods: {
        setDataAdministrativos(){
            console.log('Admin');
            this.$emit("getDataAdministrativos", this.crono);
        },
        tiempo(){
            console.log("cronoooooooooooooooooooooooooooooooooooooo");
            setInterval(function() {this.crono=this.crono+1}, 1000);
        },

    },
    computed:{

    },

};
</script>
