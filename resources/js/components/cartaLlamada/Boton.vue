<template>
    <div class="card m-5 p-5 z-depth-1">

        <div class="row d-flex justify-content-between">
          <h1 class="col" ><i class="fas fa-phone-alt"></i> Carta Llamada </h1>

          <p class="col"></p>
          <h2 class="col"> <i class="fal fa-alarm-clock" ></i> {{crono}}</h2>
        </div>
        <span v-if="loading == true">
            <div class="text-center">
                <div class="spinner-border text-danger" style="width: 5rem; height: 5rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        </span>
        <span v-else>
            <div class="row">
                <div class="col s6 m3">
                    <div class="card z-depth-0">
                        <div class="card-content ">
                            <span class="card-title">Dades Personals</span>
                            <div class="card-action mb-3" >
                                <span  v-if="cartaLlamada.tipus_localitzacions_id == 1">
                                    <br>
                                    <br>
                                </span>
                                <datos-personales @get-datapersonal="getDataPersonal" ></datos-personales>
                                <span  v-if="cartaLlamada.tipus_localitzacions_id == 1">
                                    <br>
                                </span>
                            </div>
                        </div>
                        <div class="card-action colorLink">
                            <a class="colorLink" id="myBtn" href="#" @click="camposExtra(), pararContador()">Aceptar</a>
                            <a class="colorLink" href="http://localhost:8080/proyecto-broggi/public/home" @click="pararContador()">Cancelar</a>
                            <button class="colorLink" id="myBtn btn" @click="funcionOpenModal()"> open modal</button>
                        </div>
                    </div>
                </div>
                <div class="col s6 m3">
                    <div class="card  z-depth-0">
                        <div class="card-content ">
                            <span class="card-title mx-2">Datos Incidente</span>
                            <div class="card-action mb-3">
                                <datos-incidentes @get-dataincidente="getDataIncidente"></datos-incidentes>
                                <span  v-if="cartaLlamada.tipus_localitzacions_id != 1">
                                    <br>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6 m3">
                    <div class="card  z-depth-0">
                        <div class="card-content ">
                            <span class="card-title">Expedientes Relacionados: {{expedienteRelacionado}}</span>
                            <div class="card-action">
                                <span>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nº Expediente</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Localizacion</th>
                                                <th scope="col">Tipificacion</th>
                                                <th scope="col"><button class="btn colorbutton" type="button" @click="expedienteRela(null)">Check</button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(pruebaCarta, index) in pruebaCartas" :key="index">
                                                <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">
                                                    {{pruebaCarta.expedients_id}}
                                                </td>
                                                <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">
                                                    {{pruebaCarta.telefon}}
                                                </td>
                                                <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">
                                                    <span v-for="municipi in municipis" :key="municipi.id">
                                                        <span v-if="municipi.id == pruebaCarta.municipis_id">
                                                            {{ municipi.nom }}
                                                        </span>
                                                    </span>
                                                </td>
                                                <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">

                                                    <span v-for="incidente in incidentes" :key="incidente.id">
                                                        <span v-if="incidente.id == pruebaCarta.incidents_id">
                                                            {{ incidente.descripcio }}
                                                        </span>
                                                    </span>
                                                </td>
                                                <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">
                                                    <button class="btn colorbutton" type="button" @click="expedienteRela(pruebaCarta.expedients_id)">Check</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" ref="openModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <p>Quieres guardar al llamante?</p>
                        <form action="#">
                            <p>
                            <label>
                                <input name="group1" type="radio"  v-model="guardarLlamante" value="si"/>
                                <span>Si </span>
                            </label>
                            <label>
                                <input name="group1" type="radio" checked v-model="guardarLlamante" value="no"/>
                                <span>No</span>
                            </label>
                            </p>
                        </form>
                    <p>Aviso:</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Calle</th>
                                <th>Codigo Postal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

                </div>
        </span>


    </div>
</template>
<script>
export default {
    data() {
        return {
            guardarLlamante: "no",
            crono: 0,
            expedienteRelacionado: null,
            loading: false,
            idDatosPersonales: [],
            pruebaCartas: [],
            incidentes:[],
            municipis:[],
            expediente:{
                id: null,
                data_creacio: "",
                data_ultima_modificacio:"",
                estats_expedients_id: 2,
            },
            cartaLlamada: {
                data_hora: "",
                temps_trucada: 3,
                dades_personals_id: null,
                telefon: " ",
                procedencia_trucada: " ",
                origen_trucada: " ",
                municipis_id_trucada: " ",
                adreca_trucada: " ",
                fora_catalunya: " ",
                provincies_id: " ",
                municipis_id: " ",
                tipus_localitzacions_id: " ",
                descripcio_localitzacio: " ",
                detall_localitzacio: " ",
                // altres_ref_localitzacio: "",
                incidents_id: " ",
                nota_comuna: " ",
                expedients_id: null,
                usuaris_id: 1,
            },
        };
    },
    methods: {
        select() {
            this.loading = true;
            let me = this;
            console.log("Entrando a la select");
            axios
                .get("/incidente")
                .then((response) => {
                    console.log("Incidente OK");
                    me.incidentes = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/municipio")
                .then((response) => {
                    console.log("Municipio OK");
                    me.municipis = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/datosPersonales")
                .then((response) => {
                    console.log("Datos Personales");
                    me.idDatosPersonales = response.data;
                })
                .catch((error) => {
                    this.console.log("Error:");
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            axios
                .get("/llamadas")
                .then((response) => {
                    console.log("Datos Personales");
                    me.pruebaCartas = response.data;
                })
                .catch((error) => {
                    this.console.log("Error:");
                    console.log(error);
                })
                .finally(() => (this.loading = false));
        },
        getDataPersonal(array) {
                (this.cartaLlamada.telefon = array.telefono),
                (this.cartaLlamada.procedencia_trucada = array.procedencia),
                (this.cartaLlamada.origen_trucada = array.origen),
                (this.cartaLlamada.municipis_id_trucada = array.municipio),
                (this.cartaLlamada.adreca_trucada = array.direccion),
                (this.cartaLlamada.nota_comuna = array.notaComun);
        },
        getDataIncidente(array) {
                if (array.localizacion =='Fuera Cataluña') {
                    (this.cartaLlamada.fora_catalunya = 1);
                }else{
                    (this.cartaLlamada.fora_catalunya = 0);
                }
                (this.cartaLlamada.provincies_id = array.provincia),
                (this.cartaLlamada.municipis_id = array.municipio),
                (this.cartaLlamada.tipus_localitzacions_id = array.localizacion),
                (this.cartaLlamada.descripcio_localitzacio = array.descripcio_localitzacio),
                (this.cartaLlamada.detall_localitzacio = array.detall_localitzacio),
                (this.cartaLlamada.incidents_id = array.incidente);
        },
        getDataAdministrativos(contador) {
            this.contador = contador;
        },

        pararContador(){
            clearInterval(contadorInterval);
        },
        contador(){
            this.crono+=1;
        },
        empezarContador(){
            contadorInterval = setInterval(this.contador,1000);
        },
        camposExtra() {
            let hoy = new Date();
            let fecha = hoy.getFullYear() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getDate();
            let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            let fechaYHora = fecha + ' ' + hora;
            this.cartaLlamada.data_hora = fechaYHora;
            console.log('objeto:'+this.cartaLlamada.data_hora);
            let codi_trucada = 0;
            if (this.expedienteRelacionado!= null) {
                this.cartaLlamada.expedients_id=this.expedienteRelacionado;
            }else{
                this.cartaLlamada.expedients_id = null;
            }
            setTimeout(this.insertBD,2000);
        },
        expedienteRela(idExpediente){
            this.expedienteRelacionado = idExpediente;

        },
        funcionOpenModal(){
            console.log("sd,gkoerhngivnweuiger9nrjigirohrthtjr");
            //   this.modal.style.display = "block";
            this.$refs.openModal.style.display = "block"
        },
        insertBD(){
            let me = this;
            if (this.cartaLlamada.expedients_id==null) {
                this.expediente.data_creacio=this.cartaLlamada.data_hora;
                this.expediente.data_ultima_modificacio=this.cartaLlamada.data_hora;
            axios
                .post("/expediente", me.expediente)
                .then(function (response) {
                    console.log("expediente OK");
                     me.cartaLlamada.expedients_id = response.data.id;

                        axios
                        .post("/llamadas", me.cartaLlamada)
                        .then(function (response) {
                            console.log("CartaLlamada OK");

                        })
                        .catch(function (error) {
                            this.console.log("Error:");
                            console.log(error);
                        });

                    })
                .catch(function (error) {
                    this.console.log("Error:");
                    console.log(error);
                });
            }else{
                axios
                        .post("/llamadas", me.cartaLlamada)
                        .then(function (response) {
                            console.log("CartaLlamada OK");
                        })
                        .catch(function (error) {
                            this.console.log("Error:");
                            console.log(error);
                        });
            }
            this.funcionOpenModal();
        }
    },
    computed: {
        descripcioLocalitzacio: function () {
            let varianle = -1;
            for (
                let index = 0; index < this.idDatosPersonales.length; index++) {
                if (  cartaLlamada.telefon == this.idDatosPersonales.telefono[index] ) {
                    varianle = this.idDatosPersonales.id[index];
                }
            }
            if (varianle != -1) {
                this.cartaLlamada.dades_personals_id = varianle;
            }
        },


    },
    mounted() {
        this.select();
        this.empezarContador();
        console.log("Component mounted.");
    },
};
</script>
