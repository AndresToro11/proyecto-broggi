<template>
    <div class="row">
        <div class="card col-2 m-4">
            <div class="card-image">
                <img :src="require('/images/usuario.jpg')">
                <span class="card-title">Foto</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
            </div>
        </div>

        <div class="card col-9 m-4">
            <div class="card-title">
                Usuario
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="input-field col s6">
                        <input v-model="usuario.nombre" id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input v-model="usuario.apellidos" id="last_name" type="text" class="validate">
                        <label for="last_name">Apellido</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input @blur="verificarContrasena()" v-model="usuario.contrasena" id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input @blur="verificarContrasena()" v-model="contrasenaC" id="cPassword" type="password" class="validate">
                        <label for="cPassword">Confirmar contraseña</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s8">
                        <input v-model="usuario.mail" id="email" type="email" class="validate">
                        <label for="email">Mail</label>
                    </div>
                    <div class="input-field col s4">
                        <select v-model="usuario.rol" class="form-select" aria-label="Default select example">
                            <option selected disabled>Rol</option>
                            <option value="1">Operador</option>
                            <option value="2">Supervisor</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input v-model="usuario.nick" id="nick" type="text" class="validate">
                        <label for="nick">Nick</label>
                    </div>
                    <div class="col s6 text-center">
                        <button @click="insertUsuario()" class="btn waves-effect waves-light" name="action">Aceptar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>



    export default {
        data(){
            return {
                data: [],
                loading : false,
                usuario: {
                    nombre: '',
                    apellidos: '',
                    contrasena: '',
                    mail: '',
                    rol: '',
                    nick: ''
                },
                image: '/images/usuario.jpg',
                contrasenaC: ''
            }
        },

        methods:{
            insertUsuario(){
                let me = this;

                axios
                    .post('/admin/insertUsuario', me.usuario)
                    .then(response => {
                        window.location.href = "http://localhost/proyecto-broggi/public/admin";
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally();

            },

            verificarContrasena(){
                if(this.usuario.contrasena != '' && this.contrasenaC != ''){
                    if(this.usuario.contrasena != this.contrasenaC){
                    console.log("Son diferentes las contraseñas");
                    }

                    else{
                    console.log('Contraseña correcta')
                    }
                }
            },


        },
        mounted() {
            
        }
    }

    // https://screeps.com/
</script>
