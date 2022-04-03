<template>
    <div class="container m-4">
        <button id="sortir" class="btn btn-primary">Salir</button>
        <div id='map'></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                agencias: [],
                loading: false,
                map: {},
                accessToken: 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw',
            }
        },
        methods: {
            selectAgencias(){
                this.loading = true;
                let me = this;
                axios
                    .get('/mapa/agencias')
                    .then(response => {
                        me.agencias = response.data;
                        this.añadirMarca()
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            },

            marcaAgencia(place) {
                let me = this;
                mapboxgl.accessToken = this.accessToken;

                const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
                mapboxClient.geocoding
                .forwardGeocode({
                    query: place,
                    autocomplete: false,
                    limit: 1
                    })
                .send()
                .then((response) => {
                    if (
                        !response ||
                        !response.body ||
                        !response.body.features ||
                        !response.body.features.length
                    ) {
                        console.error('Invalid response:');
                        console.error(response);
                        return;
                    }

                    const feature = response.body.features[0];

                    me.map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: feature.center,
                        zoom: 12
                    });

                // Create a marker and add it to the map.
                new mapboxgl.Marker({
                    color: '#E74C3C',
                }).setLngLat(feature.center).addTo(me.map);
                });
            },

            añadirMarca(){
                for(let agencia of this.agencias){
                    console.log(agencia);
                }
            }

        },

        created() {

        },
        mounted() {
            this.selectAgencias();
        }
    }
</script>

<style>
    #map {
        width: 100%;
        height: 700px;
    }
    #sortir {
        position: fixed;
        right: 20px;
        bottom: 20px;
    }
</style>
