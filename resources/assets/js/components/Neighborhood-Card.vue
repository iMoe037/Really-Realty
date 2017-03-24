<template>
  <div class="neighborhood-card">
    <a class="neighborhood-card-image-wrapper"
      v-bind:style="{ 'background-image' : `url(/images/neighborhoods/${paramCase(name)}.jpg)` }"></a> 
    <div class="neighborhood-card-title-container">
      <p class="neighborhood-card-title">{{ startCase(name) }}</p>
      <p class="neighborhood-card-subtitle">{{ startCase(borough) }}</p>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      name: {
        type: String,
        required: true
      },
      id: {
        type: Number,
        required: true
      },
      borough: {
        type: String,
        required: true
      }
    },
    methods: {
      startCase: text => _.startCase(text),
      paramCase: text => text.replace(/\s+/g, '-').toLowerCase()
    }
  }
</script>