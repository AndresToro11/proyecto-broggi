<template>
    <div>
        <h3>Dades Personals:</h3>
        <div class="row">
            <div class="input-field col s3">
                <label for="telefono">Telefono</label>
                <input type="number" name="telefono" id="telefono" v-model="datos_personales.telefono" @blur="setDataPersonal()" required />
            </div>
            <div class="input-field col s3">
                <label for="antecedentes">Antecedentes</label>
                <input type="text" name="antecedentes" id="antecedentes" v-model="datos_personales.antecedentes" @blur="setDataPersonal()" required />
            </div>
            <div class="input-field col s3">
                <label for="procedencia">Procedencia</label>
                <input type="text" name="procedencia" id="procedencia" v-model="datos_personales.procedencia" @blur="setDataPersonal()" required />
            </div>
            <div class="input-field col s3">
                <label for="origen">Origen</label>
                <input type="text" name="origen" id="origen" v-model="datos_personales.origen" @blur="setDataPersonal()" required />
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                 <label for="origen">Origen</label>
                <input type="text" name="origen" id="origen" v-model="datos_personales.origen" @blur="setDataPersonal()" required />
            </div>

            <div class="input-field col s4">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" v-model="datos_personales.direccion" @blur="setDataPersonal()" required />
            </div>
            <div class="input-field col s4">
                <select class="browser-default" id="municipio" v-model="datos_personales.municipio" @change="activarFunciones()" required >
                    <option value="" disabled selected>Municipios</option>
                    <option v-for="municipio in municipios" :key="municipio.id" :value="municipio.id">
                        {{ municipio.nom }}
                    </option>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12">
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
