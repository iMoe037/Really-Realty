<template>
  <div class="flex-row flex-wrap justify-c-c neighborhood-card-container">
    <neighborhood-card
    v-for="neighborhood in neighborhoods"
    :name="neighborhood.name"
    :id="neighborhood.id"
    :borough="neighborhood.borough"></neighborhood-card>
  </div>
</template>

<script>
  import neighborhoodCard from './Neighborhood-Card.vue';
  
  export default {
    components: {
      'neighborhoodCard': neighborhoodCard
    },
    data: function() {
      return {
        neighborhoods: []
      }
    },
    mounted() {
      axios.get('/api/main-neighborhoods')
        .then(response => {
          this.neighborhoods = response.data;
        })
        .catch(err => console.error(err));
    }

  }
</script>