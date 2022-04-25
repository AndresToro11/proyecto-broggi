<template>
        <div></div>
</template>

<script>
    export default {

        props: ['place', 'codigo'],

        data() {
            return {
                loading: false,
                map: {},
                accessToken: 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw',
            }
        },
        methods: {

            crearMapa() {

                var newDiv = document.createElement("div");
                newDiv.setAttribute('id', this.codigo + 'mapa');
                newDiv.setAttribute('class', 'map');
                document.getElementById(this.codigo + 'container').appendChild(newDiv);

                mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw';
                const mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
                mapboxClient.geocoding
                .forwardGeocode({
                    query: this.place,
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
                    container: this.codigo + 'mapa',
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
                    .addTo(this.map);
            });
            }
        },

        created() {

        },
        mounted() {
            this.crearMapa();
        }
    }
</script>

<style>
    .map {
        width: 100%;
        height: 100%;
        position: absolute;
    }
</style>
