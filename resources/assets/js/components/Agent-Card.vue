<template>
  <div class="agent-card">
    <a class="agent-card-image-wrapper"
      v-bind:style="[agentImage ? { 'background-image' : `url(${agentImage})` } : '']">
      <!--<img class="agent-card-image"
      v-bind:src="agentImage"
      v-bind:alt="agentName">-->
    </a>
    <div class="agent-card-contact">
      <a class="agent-card-name" href="#">
        {{ agentName }}
      </a>
      <a class="agent-card-email"
      v-bind:href="appendLink('email', agentEmail)">
        {{ agentEmail }}
      </a>
      <a class="agent-card-phone"
        v-bind:href="appendLink('phone', agentPhone)">
        {{ `M: ${agentPhone}` }}
      </a>
    </div>
  </div>
</template>


<script>
	export default {
		props: {
			agentImage: String,
      agentName: String,
			agentPhone: String,
			agentEmail: String,
		},
    methods: {
      appendLink: function(type, data) {
       return type === 'phone' ? `tel:${data}` : `mailto:${data}`
      }
    }
	}
</script>
