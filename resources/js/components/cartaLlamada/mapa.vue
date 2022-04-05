<template>

    <div id="map"></div>
        
</template>

<script>

export default {
  data() {
    return {

    };
  },
  methods:{
      montarMapa(){
          mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmVzdG9ybzExIiwiYSI6ImNsMWVzeHhzbDBxc2kzZG1mZGN5b3Z1bW0ifQ.Ri10l_V5MJyWX9VoF0a0iw';
            let mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
            mapboxClient.geocoding
            .forwardGeocode({
            query: 'Barcelona, Spain',
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
            
            const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: feature.center,
            zoom: 10
            });
            
            // Create a marker and add it to the map.
            new mapboxgl.Marker().setLngLat(feature.center).addTo(map);
            });
      }
  },

  mounted() {
      console.log('Hola');
      this.montarMapa();
  }
};

</script>