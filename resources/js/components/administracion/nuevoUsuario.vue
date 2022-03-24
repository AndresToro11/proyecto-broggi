<template>
    <div class="row">
        <div class="card col-2 m-4">
            <div class="card-image">
                <img src="/images/usuario.jpg">
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
                        <input v-model="usuario.contrasena" id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="cPassword" type="password" class="validate">
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
                            <option v-for="rol in data" :key="rol.id" :value="rol.id" >
                            {{ rol.nom}}
                        </option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input v-model="usuario.nick" id="nick" type="text" class="validate">
                        <label for="nick">Nick</label>
                    </div>
                    <div class="col s6">
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
                image: '/images/usuario.jpg'
            }
        },

        methods:{
            selectRoles(){
                this.loading = true;
                let me = this;
                axios
                    .get('/admin/roles')
                    .then(response => {
                        me.data = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            insertUsuario(){
                let me = this;

                axios
                    .post('/admin/insertUsuario', me.usuario)
            }

        },
        mounted() {
            this.selectRoles();
        }
    }

    // https://screeps.com/
</script>
