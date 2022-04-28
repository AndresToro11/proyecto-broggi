<template>
    <div class="m-4">
        <h1 class="m-4"><i class="fas fa-user-edit"></i> Administración</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a @click="selectTodos()" id="todos" class="nav-link text-dark active" href="#">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a @click="selectOperadores()" id="operadores" class="nav-link text-dark" href="#">Operadores</a>
                    </li>
                    <li class="nav-item">
                        <a @click="selectSupervisores()" id="supervisores" class="nav-link text-dark" href="#">Supervisores</a>
                    </li>
                    <li class="nav-item">
                        <a @click="selectInactivos()" id="inactivos" class="nav-link text-dark" href="#">Inactivos</a>
                    </li>
                    <li class="nav-item">
                        <input @input="buscarUsuario" v-model="buscar" type="text" name="" id="" placeholder="Buscar">
                    </li>
                </ul>
            </div>

            <!-- Todos -->
        <div v-if="seccion == 'todos'">
            <div class="card-body">
                <div class="mt-4" v-if="loading == true">
                    <div class="spinner-border text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

                <div v-else>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Mail</th>
                                <th scope="col">
                                    <a href="http://localhost/proyecto-broggi/public/admin/nuevoUsuario" type="button" class="btn btn-light rounded-circle"><i class="fas fa-plus"></i></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in data" :key="user.id">
                                <td class="text-center">{{ user.codi }}</td>
                                <td class="text-center">{{ user.nombre }}</td>
                                <td class="text-center">{{ user.apellidos }}</td>
                                <td class="text-center">{{ user.rol }}</td>
                                <td class="text-center">{{ user.mail }}</td>
                                <td class="text-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal"
                                        data-bs-nombre="user.nom">
                                            <i class="fal fa-edit"></i>
                                        </button>
                                    <button @click="deleteUsuario(user.id)" class="btn btn-danger"><i class="fal fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


            <!-- Operadores -->
            <div v-else-if="seccion == 'operadores'">
                <div class="card-body">
                    <div class="mt-4" v-if="loading == true">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div v-else>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">
                                        <a href="http://localhost/proyecto-broggi/public/admin/nuevoUsuario" type="button" class="btn btn-light rounded-circle"><i class="fas fa-plus"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in data" :key="user.id">
                                    <td class="text-center">{{ user.codi }}</td>
                                    <td class="text-center">{{ user.nombre }}</td>
                                    <td class="text-center">{{ user.apellidos }}</td>
                                    <td class="text-center">{{ user.rol }}</td>
                                    <td class="text-center">{{ user.mail }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">
                                            <i class="fal fa-edit"></i>
                                        </button>
                                        <a @click="deleteUsuario(user.id)" type="button" class="btn btn-danger"><i class="fal fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <!-- Supervisores -->

            <div v-else-if="seccion == 'supervisores'">
                <div class="card-body">
                    <div class="mt-4" v-if="loading == true">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div v-else>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nick</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">mail</th>
                                    <th scope="col">
                                        <a href="http://localhost/proyecto-broggi/public/admin/nuevoUsuario" type="button" class="btn btn-light rounded-circle"><i class="fas fa-plus"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in data" :key="user.id">
                                    <td class="text-center">{{ user.codi }}</td>
                                    <td class="text-center">{{ user.nombre }}</td>
                                    <td class="text-center">{{ user.apellidos }}</td>
                                    <td class="text-center">{{ user.rol }}</td>
                                    <td class="text-center">{{ user.mail }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">
                                            <i class="fal fa-edit"></i>
                                        </button>
                                        <a @click="deleteUsuario(user.id)" type="button" class="btn btn-danger"><i class="fal fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Inactivos -->
            <div v-else-if="seccion == 'inactivos'">
                <div class="card-body">
                    <div class="mt-4" v-if="loading == true">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div v-else>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">
                                        <a href="http://localhost/proyecto-broggi/public/admin/nuevoUsuario" type="button" class="btn btn-light rounded-circle"><i class="fas fa-plus"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in data" :key="user.id">
                                    <td class="text-center">{{ user.codi }}</td>
                                    <td class="text-center">{{ user.nombre }}</td>
                                    <td class="text-center">{{ user.apellidos }}</td>
                                    <td class="text-center">{{ user.rol }}</td>
                                    <td class="text-center">{{ user.mail }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">
                                            <i class="fal fa-edit"></i>
                                        </button>
                                        <a @click="activarUsuario(user.id)" type="button" class="btn btn-success"><i class="fas fa-folder-plus"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>


        <!-- Modal -->
        <div class=" modal modal-xl" id="editarModal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal">Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

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

                            <div class="col-10">
                                <div class="input-field col s6">
                                    <input v-model="usuario.nombre" id="first_name" type="text" class="validate">
                                    <label class="inputNombre" for="first_name">Nombre</label>
                                </div>
                                <div class="input-field col s6">
                                    <input v-model="usuario.apellidos" id="last_name" type="text" class="validate">
                                    <label for="last_name">Apellido</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input v-model="usuario.mail" id="email" type="email" class="validate">
                                <label for="email">Mail</label>
                            </div>
                            <div class="input-field col s6">
                                <select v-model="usuario.rol" class="form-select" aria-label="Default select example">
                                    <option selected disabled>Rol</option>
                                    <option value="1">Operador</option>
                                    <option value="2">Supervisor</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
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
                loading: false,
                seccion: 'todos',
                buscar: '',
                actual: [],

                usuario: {
                    id: '',
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
            selectTodos(){

                document.getElementById('todos').setAttribute('class', 'nav-link active');
                document.getElementById('operadores').setAttribute('class', 'nav-link');
                document.getElementById('supervisores').setAttribute('class', 'nav-link');
                document.getElementById('inactivos').setAttribute('class', 'nav-link');
                this.seccion = 'todos';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/usuarios')
                    .then(response => {
                        me.data = response.data;
                        this.actual = this.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            selectOperadores(){

                document.getElementById('todos').setAttribute('class', 'nav-link');
                document.getElementById('operadores').setAttribute('class', 'nav-link active');
                document.getElementById('supervisores').setAttribute('class', 'nav-link');
                document.getElementById('inactivos').setAttribute('class', 'nav-link');
                this.seccion = 'operadores';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/operadores')
                    .then(response => {
                        me.data = response.data;
                        this.actual = this.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            selectSupervisores(){

                document.getElementById('todos').setAttribute('class', 'nav-link');
                document.getElementById('operadores').setAttribute('class', 'nav-link');
                document.getElementById('supervisores').setAttribute('class', 'nav-link active');
                document.getElementById('inactivos').setAttribute('class', 'nav-link');
                this.seccion = 'supervisores';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/supervisores')
                    .then(response => {
                        me.data = response.data;
                        this.actual = this.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            selectInactivos(){

                document.getElementById('todos').setAttribute('class', 'nav-link');
                document.getElementById('operadores').setAttribute('class', 'nav-link');
                document.getElementById('supervisores').setAttribute('class', 'nav-link');
                document.getElementById('inactivos').setAttribute('class', 'nav-link active');
                this.seccion = 'inactivos';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/inactivos')
                    .then(response => {
                        me.data = response.data;
                        this.actual = this.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            deleteUsuario(usuario){
                let me = this;
                axios
                    .put('admin/deleteUsuario/' + usuario)
                    .then(response => {
                        if(me.seccion == 'todos'){
                            this.selectTodos();
                        }
                        else if(me.seccion == 'operadores'){
                            this.selectOperadores();
                        }
                        else if(me.seccion == 'supervisores'){
                            this.selectSupervisores();
                        }
                        else if(me.seccion == 'inactivos'){
                            this.selectInactivos();
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally();

            },
            activarUsuario(usuario){
                let me = this;
                axios
                    .put('admin/activarUsuario/' + usuario)
                    .then(response => {
                        if(me.seccion == 'todos'){
                            this.selectTodos();
                        }
                        else if(me.seccion == 'operadores'){
                            this.selectOperadores();
                        }
                        else if(me.seccion == 'supervisores'){
                            this.selectSupervisores();
                        }
                        else if(me.seccion == 'inactivos'){
                            this.selectInactivos();
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally();
            },
            buscarUsuario(){
                let response = [];
                if(this.buscar != ''){
                    for(let user of this.data){
                        if(user.nombre.toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0 || user.apellidos.toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                            response.push(user);
                        }
                    }
                    this.data = response;
                }
                else{
                    this.data = this.actual;
                }
            }
        },
        mounted() {
            this.selectTodos();
        }
    }
</script>
