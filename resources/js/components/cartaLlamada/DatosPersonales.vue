<template>
    <div>
        <h3>Dades Personals:</h3>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" v-model="datos_personales.telefono" required />
        <label for="antecedentes">Antecedentes</label>
        <input type="text" name="antecedentes" id="antecedentes" v-model="datos_personales.antecedentes" required />
        <br />
        <br />
        <label for="procedencia">Procedencia</label>
        <input type="text" name="procedencia" id="procedencia" v-model="datos_personales.procedencia" required />
        <label for="origen">Origen</label>
        <input type="text" name="origen" id="origen" v-model="datos_personales.origen" required />
        <label for="municipio">Municipio</label>
        <select class="form-control" id="municipio" v-model="datos_personales.municipio">
            <option value=""></option>
            <option v-for="municipio in municipios" :key="municipio.id" >
                {{ municipio.nom }}
            </option>
        </select>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" v-model="datos_personales.direccion" required />
        <label for="notaComun">Nota comun:</label>
        <input
            type="text"
            name="notaComun"
            id="notaComun"
            v-model="datos_personales.notaComun"
            required
            size="100"
        />
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
        },
    },

    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
