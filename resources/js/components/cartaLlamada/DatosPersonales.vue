<template>
    <div>
        <form action="" method="post">
            <h3>Dades Personals:</h3>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" required>
        <label for="antecedentes">Antecedentes</label>
        <input type="text" name="antecedentes" id="antecedentes" required>
        <br>
        <br>
        <label for="procedencia">Procedencia</label>
        <input type="text" name="procedencia" id="procedencia" required>
        <label for="municipio">Municipio</label>
        <select >
        <option disabled value="">Seleccione un elemento</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        </select>
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" required>

        <label for="hora">Hora</label>
        <input type="text" name="hora" id="hora" required>
        <label for="llamada">Llamada:</label>
        <input type="text" name="llamada" id="llamada" required>
        <br>
        <br>
        <label for="notaComun">Nota comun:</label>
        <input type="text" name="notaComun" id="notaComun" required size="100">
        </form>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                municipios:[]
            }
        },
        methods:{
            select(){
                let me = this;
                console.log('Entrando a la select');
                axios
                    .get('/municipio')
                    .then(response => {
                        me.municipios=response.data;
                        console.log('ol');
                    })
                    .catch(error =>{
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            }
        },

        mounted() {
            this.select();
            console.log('Component mounted.')
        }
    }
</script>
