<template>
    <div>
        <h3>Dades Personals:</h3>
        <input type="checkbox" id="guardarUser" v-model="guardar" />
        <label for="guardarUser">Guardar user</label>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono" v-model="datos_personales.telefono" @blur="setDataPersonal()" required />
        <label for="antecedentes">Antecedentes</label>
        <input type="text" name="antecedentes" id="antecedentes" v-model="datos_personales.antecedentes" @blur="setDataPersonal()" required />
        <br />
        <br />
        <label for="procedencia">Procedencia</label>
        <input type="text" name="procedencia" id="procedencia" v-model="datos_personales.procedencia" @blur="setDataPersonal()" required />
        <label for="origen">Origen</label>
        <input type="text" name="origen" id="origen" v-model="datos_personales.origen" @blur="setDataPersonal()" required />
        <label for="municipio">Municipio</label>
        <select class="form-control" id="municipio" v-model="datos_personales.municipio" @change="activarFunciones()" required>
            <option value=""></option>
            <option v-for="municipio in municipios" :key="municipio.id" :value="municipio.id">
                {{ municipio.nom }}
            </option>
        </select>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" v-model="datos_personales.direccion" @blur="setDataPersonal()" required />
        <label for="notaComun">Nota comun:</label>
        <input
            type="text"
            name="notaComun"
            id="notaComun"
            v-model="datos_personales.notaComun"
            @blur="setDataPersonal()"
            required
            size="100"
        />
    </div>
</template>
<script>
export default {
    data() {
        return {
            guardar:[],
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
        console.log("Component mounted.");
    },
};
</script>
