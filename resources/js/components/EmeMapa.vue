<template>
    <div class="container">
        <button id="sortir" class="btn btn-primary">Sortir</button> 
        <div id='map'></div>       
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                map: {},
                accessToken: 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw',
            }
        },
        methods: {
            positionMarkIncident(place) {
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
            
        },
        
        created() {
            
        },
        mounted() {
            console.log('Component mounted.')
            //this.selectAgencies();
            this.positionMarkIncident('Plaza Urquinaona, Barcelona');
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
