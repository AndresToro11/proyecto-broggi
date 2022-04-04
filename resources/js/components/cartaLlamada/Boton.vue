<template>
    <div>
        <datos-administrativos></datos-administrativos>
        <datos-personales @get-datapersonal="getDataPersonal"></datos-personales>
        <datos-incidentes @get-dataincidente="getDataIncidente"></datos-incidentes>
        <h3>boton</h3>
        <button type="button">Cancelar</button>
        <button type="button" @click="camposExtra()">Aceptar</button>
        <h3>Expedientes Relacionados: {{expedienteRelacionado}}</h3>
        <span>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nº Expediente</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Localizacion</th>
                        <th scope="col">Tipificacion</th>
                        <th scope="col"><button type="button" @click="expedienteRela(null)">Check</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(pruebaCarta, index) in pruebaCartas" :key="index">
                            <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">{{pruebaCarta.expedients_id}}</td>
                            <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">{{pruebaCarta.telefon}}</td>
                            <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">{{pruebaCarta.municipis_id}}</td>
                            <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id">{{pruebaCarta.incidents_id}}</td>
                            <td v-if="pruebaCarta.telefon == cartaLlamada.telefon || pruebaCarta.municipis_id == cartaLlamada.municipis_id || pruebaCarta.incidents_id == cartaLlamada.incidents_id"> <button type="button" @click="expedienteRela(pruebaCarta.expedients_id)">Check</button></td>
                    </tr>
                </tbody>
            </table>
        </span>
    </div>
</template>
<script>
export default {
    data() {
        return {
            expedienteRelacionado: null,
            idDatosPersonales: [],
            pruebaCartas: [],
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
            let me = this;
            console.log("Entrando a la select");
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

        empezarContador: function () {
            tiempo();
        },
    },
    mounted() {
        this.select();
        console.log("Component mounted.");
    },
};
</script>
