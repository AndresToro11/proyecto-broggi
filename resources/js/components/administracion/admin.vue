<template>
    <div class="m-4">
        <h1 class="m-4">Administración</h1>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a @click="selectTodos()" id="todos" class="nav-link active" href="#">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a @click="selectOperadores()" id="operadores" class="nav-link" href="#">Operadores</a>
                    </li>
                    <li class="nav-item">
                        <a @click="selectSupervisores()" id="supervisores" class="nav-link" href="#">Supervisores</a>
                    </li>
                </ul>
            </div>

            <!-- Todos -->
        <div v-if="seccion == 'todos'">
            <div class="card-body">
                <div class="mt-4" v-if="loading == true">
                    <div id="loader" class="text-center">
                        <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
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
                                <td class="text-center">{{ user.nom }}</td>
                                <td class="text-center">{{ user.cognoms }}</td>
                                <td class="text-center">{{ user.perfil.nom }}</td>
                                <td class="text-center">{{ user.mail }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-light"><i class="fal fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fal fa-trash-alt"></i></button>
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
                        <div id="loader" class="text-center">
                            <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
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
                                        <button type="button" class="btn btn-light"><i class="fal fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fal fa-trash-alt"></i></button>
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
                        <div id="loader" class="text-center">
                            <div class="spinner-border text-danger" role="status" style="width: 9rem; height: 9rem;"/>
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
                                        <button type="button" class="btn btn-light"><i class="fal fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fal fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                seccion: 'todos'
            }
        },

        methods:{
            selectTodos(){

                document.getElementById('todos').setAttribute('class', 'nav-link active');
                document.getElementById('operadores').setAttribute('class', 'nav-link');
                document.getElementById('supervisores').setAttribute('class', 'nav-link');
                this.seccion = 'todos';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/usuarios')
                    .then(response => {
                        me.data = response.data;
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
                this.seccion = 'operadores';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/operadores')
                    .then(response => {
                        me.data = response.data;
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
                this.seccion = 'supervisores';

                this.loading = true;
                let me = this;
                axios
                    .get('/admin/supervisores')
                    .then(response => {
                        me.data = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },
        },
        mounted() {
            this.selectTodos();
        }
    }
</script>
