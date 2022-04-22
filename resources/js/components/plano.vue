<template>
        <div id='map'></div>
</template>

<script>
    export default {
        data() {
            return {
                loading: false,
                map: {},
                accessToken: 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw',
            }
        },
        methods: {

            crearMapa(place) {
                mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw';
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
                
                this.map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: feature.center,
                    zoom: 12
                });
                
                const popup = new mapboxgl.Popup({ offset: 25 })
                    .setText(
                        'hola'
                    );

                    // Crear marker y añadirlo al mapa
                    new mapboxgl.Marker({
                    color: '#E74C3C',})
                    .setLngLat(feature.center)
                    .setPopup(popup)
                    .addTo(this.map);
            });
            },
        },

        created() {

        },
        mounted() {
            this.crearMapa('Barcelona, Spain');
        }
    }
</script>

<style>
    #map {
        width: 100%;
        height: 100%;
    }
    #sortir {
        position: fixed;
        right: 20px;
        bottom: 20px;
    }
</style>